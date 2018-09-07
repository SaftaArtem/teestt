<?php
namespace Safta\ToDoCrud\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Safta\ToDoCrud\Model\TodoItem','Safta\ToDoCrud\Model\ResourceModel\TodoItem');
    }
}
