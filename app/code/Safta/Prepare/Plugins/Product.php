<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 11.09.18
 * Time: 14:51
 */

namespace Safta\Prepare\Plugins;

use Magento\Catalog\Model\Product as CatalogProduct;

class Product
{
    public function afterGetName(CatalogProduct $product, $name) {
        $price = $product->getData('price');
        if( $price < 60) {
            $name .= " So cheap";
        } else {
            $name .= " So bloody expencive";
        }
        return $name;
    }
}