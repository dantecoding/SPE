<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:29
 * To change this template use File | Settings | File Templates.
 */
class AddressSpecification
{
    private $addressesList;

    public function  checkAddress($address)
    {
        $this->addressesList = mysql_query("SELECT address FROM addresses");
        while ($result = mysql_fetch_assoc($this->addressesList)) {
            if ($result['address'] == $address)
                return true;
            else
                return false;
        }
    }
}
