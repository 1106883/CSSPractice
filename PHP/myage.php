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
    echo "I can buy specs";
    if($myage >= 18) {
        echo "I can buy mugs";
        if($myage >= 21) {
            echo "I can buy sausage rolls";
        }
    }
}

echo $canbuy;

?>