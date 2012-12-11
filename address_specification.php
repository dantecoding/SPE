<?php
require_once("autoload");
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:29
 * To change this template use File | Settings | File Templates.
 */
class AddressSpecification
{
    private $addressesList = array("Маршала Говорова", "Ришельевская", "Дерибасовкая", "Армейская", "Пушкинская", "Екатериниская");

    public function  checkAddress($address)
    {
        foreach ($this->addressesList as $addr) {
            if ($addr == $address)
                return true;
            else
                return false;
        }
    }
}
