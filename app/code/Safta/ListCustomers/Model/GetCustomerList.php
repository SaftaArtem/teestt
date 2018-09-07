<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 06.09.18
 * Time: 17:28
 */

namespace Safta\ListCustomers\Model;

use Safta\ListCustomers\Api\GetCustomerListInterface;

class GetCustomerList implements GetCustomerListInterface
{
    public function name() {
        return 'First Api';
    }
}