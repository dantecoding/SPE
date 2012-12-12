<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 21:04
 * To change this template use File | Settings | File Templates.
 */
include_once("address_specification.php");
include_once("declaration.php");
require_once("claim_vacancy.php");
require_once("jobless_list.php");
require_once("organization_list.php");
require_once("registered_work.php");
require_once("vacancy_list.php");
require_once("register.php");

$con = mysql_connect("localhost", "root", "mysql");
mysql_select_db("spe");