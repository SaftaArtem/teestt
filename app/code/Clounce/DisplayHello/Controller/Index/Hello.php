<?php
/**
 * Copyright © 2015 Clounce. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Clounce\DisplayHello\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;


class Hello extends Action
{

    /**
     * Default hello page with layout
     *
     * @return void
     */
    public function execute()
    {

        /** @var \Magento\Framework\View\Result\Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}