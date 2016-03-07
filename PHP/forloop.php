<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 07/03/2016
 * Time: 10:04
 */
for ($i = 1; $i < 30; $i++)
{
    echo "On the $i you can buy ";
    if (($i % 2) == 0){
        echo " specs";
    }
    if (($i % 3) == 0){
        echo " mugs";
    }
    if (($i % 4) == 0){
        echo " sausage rolls";
    }

    echo "\n";
}
?>