<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 16:55
 */

namespace Safta\SFT\Controller\Sandbox;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Safta\SFT\Model\SampleFactory;

/**
 * Class Index
 * @package Safta\SFT\Controller\Frontend
 */
class Index extends Action
{
    /**
     * @var \Safta\SFT\Model\SampleFactory
     */
    protected $_modelSampleFactory;

    /**
     * @param Context $context
     * @param SampleFactory $modelSampleFactory
     */
    public function __construct(
        Context $context,
        SampleFactory $modelSampleFactory
    ) {
        parent::__construct($context);
        $this->_modelSampleFactory = $modelSampleFactory;
    }

    public function execute()
    {
        $sampleModel = $this->_modelSampleFactory->create();

        // Load the item with ID is 1
        $item = $sampleModel->load(1);
        var_dump($item->getData());

        // Get sample collection
        $sampleCollection = $sampleModel->getCollection();
        // Load all data of collection
        var_dump($sampleCollection->getData());
    }

}