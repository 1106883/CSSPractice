<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 07/03/2016
 * Time: 09:41
 */
$myage = 18;
$canbuy = "I can buy";

echo "I am " + $myage;

if($myage >= 16) {
    $canbuy += "specs";
    if($myage >= 18) {
        $canbuy += ", mugs";
        if($myage >= 21) {
            $canbuy += "and sausage rolls";
        }
    }
}

echo $canbuy;

?>