<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 11.09.18
 * Time: 17:06
 */

namespace Safta\Prepare\Model;

use Magento\Catalog\Model\Product as CoreProduct;

class Product extends CoreProduct
{
    public function getName()
    {
        $name = parent::getName();
        $price = $this->getData('price');
        if ($price < 60) {
            $name .= " So teasty";
        } else {
            $name .= " So dangerous";
        }
        return $name;
    }
}