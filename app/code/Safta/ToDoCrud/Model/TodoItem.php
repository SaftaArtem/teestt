<?php
namespace Safta\ToDoCrud\Model;
class TodoItem extends \Magento\Framework\Model\AbstractModel implements \Safta\ToDoCrud\Api\Data\TodoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'safta_todocrud_todoitem';

    protected function _construct()
    {
        $this->_init('Safta\ToDoCrud\Model\ResourceModel\TodoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
