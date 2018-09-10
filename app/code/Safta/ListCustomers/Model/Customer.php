<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 17:24
 */

namespace Safta\ListCustomers\Model;

use Magento\Framework\Model\AbstractModel;


class Customer extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Safta\ListCustomers\Model\ResourceModel\Customer');
    }
}