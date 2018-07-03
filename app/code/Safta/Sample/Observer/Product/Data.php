<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 27.06.18
 * Time: 15:47
 */

namespace Safta\Sample\Observer\Product;

use Magento\Framework\Event\Observer;

use Magento\Framework\Event\ObserverInterface;


class Data implements ObserverInterface

{
    public function execute(Observer $observer)
    {
        $product = $observer->getProduct();
        $originalName = $product->getName();
        $modifiedName = $originalName . ' - Modified by Magento 2 Events and Observers';
        $product->setName($modifiedName);
    }

}