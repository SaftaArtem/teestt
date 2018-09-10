<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 17:24
 */

namespace Safta\SFT\Model;

use Magento\Framework\Model\AbstractModel;


class Sample extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Safta\SFT\Model\ResourceModel\Customer');
    }
}