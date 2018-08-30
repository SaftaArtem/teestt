<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 30.08.18
 * Time: 16:10
 */

namespace Safta\SFT\Block;

use Magento\Framework\View\Element\Template\Context;
use Safta\SFT\Model\SampleFactory;

class Test extends \Magento\Framework\View\Element\Template
{
    protected $_modelSampleFactory;

    public function __construct(
        Context $context,
        SampleFactory $modelSampleFactory
    ) {
        parent::__construct($context);
        $this->_modelSampleFactory = $modelSampleFactory;
    }

    public function test() {
        $sampleModel = $this->_modelSampleFactory->create();

        return $sampleCollection = $sampleModel->getCollection()->getData();
    }
}