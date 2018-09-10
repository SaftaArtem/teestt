<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 17:30
 */

namespace Safta\ListCustomers\Model\ResourceModel\Customer;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Safta\ListCustomers\Model\Customer',
            'Safta\ListCustomers\Model\ResourceModel\Customer'
        );
    }
}