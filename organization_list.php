<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 19:58
 * To change this template use File | Settings | File Templates.
 */
class OrganizationList
{
    private $organizationList = array();

    public function checkAddress($address)
    {
        $this->organizationList = mysql_query("SELECT addresses FROM org_addresses");
        while ($result = mysql_fetch_assoc($this->organizationList)) {
            if ($result['addresses'] == $address)
                return true;
        }
    }

}
