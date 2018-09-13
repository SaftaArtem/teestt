<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 12.09.18
 * Time: 14:47
 */

namespace Safta\PushProduct\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements ObserverInterface {
    protected $_responseFactory;
    protected $_url;
    private $messageManager;

    public function __construct(
        \Magento\Framework\App\ResponseFactory $responseFactory,
        \Magento\Framework\UrlInterface $url,
        \Magento\Framework\Message\ManagerInterface $messageManager
    ) {
        $this->_responseFactory = $responseFactory;
        $this->_url = $url;
        $this->messageManager = $messageManager;
    }

    public function execute(Observer $observer) {
        $event = $observer->getEvent();
        $this->messageManager->addSuccess('Add new product in cart');
        $this->_responseFactory->create()->setRedirect('http://magento.loc/checkout/cart')->sendResponse();
        return $this;
    }
}