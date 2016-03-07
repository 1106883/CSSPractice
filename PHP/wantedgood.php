<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 07/03/2016
 * Time: 09:51
 */
$wantedgood = "specs";

switch($wantedgood){
    case "mugs":
        echo "You must be 16 to buy mugs";
    case "specs":
        echo "You must be 18 to buy mugs";
    case "sausage rolls":
        echo "You must be 16 to buy mugs";
    default:
        echo "You're a sucky suck";
}

?>