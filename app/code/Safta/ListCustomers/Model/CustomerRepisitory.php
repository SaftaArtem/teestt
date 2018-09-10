<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 10.09.18
 * Time: 15:08
 */

namespace Safta\ListCustomers\Model;


use Safta\ListCustomers\Model\CustomerFactory;


class CustomerRepisitory
{

    protected $_modelSampleFactory;

    public function __construct(
        CustomerFactory $customerFactory
    )
    {
        $this->_modelSampleFactory = $customerFactory;
    }

    /**
     * @api
     * @return \Safta\ListCustomers\Api\Return|string
     */
    public function name() {
        $sampleModel = $this->_modelSampleFactory->create();
        $sampleCollection = $sampleModel->getCollection();
        $collection = [];
        foreach ($sampleCollection->getData() as $item)
            $collection[] = $item['firstname'];
        return$collection;
    }
}