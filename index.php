<?php
require_once("autoload.php");

/**
 * Created by JetBrains PhpStorm.
 * User: dante
 * Date: 11.12.12
 * Time: 23:52
 * To change this template use File | Settings | File Templates.
 */


$b = new Register();
echo "В списке: ";
if ($b->setName("789"))
    echo "yes";
else {
    echo "no";
    echo "<br>Имя: " . $b->getDec()->getName();
}
//if ($b->setInfo("sdf", "12-10-2012", "24", "54")){
//    echo "<br>Работа: " . $b->getDec()->getJob();
//}
//$b->saveDeclaration();
$c = new RegisteredWork();
echo "<br>Работа в списке: ";
if ($c->checkWork("7841")) {
    echo "yes";
} else {
    echo "no";
}