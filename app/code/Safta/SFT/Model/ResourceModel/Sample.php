<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.08.18
 * Time: 17:26
 */

namespace Safta\SFT\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Sample extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('sandbox', 'grid_id');
    }
}