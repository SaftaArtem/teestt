<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 05.07.18
 * Time: 17:10
 */
namespace Safta\Plgn\Plugins;

class Product
{
    public function aftergetName(\Magento\Catalog\Model\Product $product, $name){
        $price = $product->getData('price');
        if($price < 60) {
            $name .= " So cheap";
        }
        else{
            $name .= " So bloody expencive";
        }

        return $name;
    }
}