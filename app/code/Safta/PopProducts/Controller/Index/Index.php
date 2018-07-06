<?php

namespace Safta\PopProducts\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_test;
    protected $_productFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Safta\PopProducts\Model\Test $test,
        \Magento\Catalog\Model\ProductFactory $productFactory
    ) {
        $this->_test = $test;
        $this->_productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $product = $this->_productFactory->create();
        $product->load(25);
        echo $product->getName();
    }
}