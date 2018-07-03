<?php

/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.01.18
 * Time: 10:17
 */
namespace Devchanel\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;


class Index extends Action
{
    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}