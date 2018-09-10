<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 17:26
 */

namespace Safta\ListCustomers\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Customer extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('customer_entity', 'entity_id');
    }
}