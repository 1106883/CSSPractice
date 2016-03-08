<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 08/03/2016
 * Time: 09:24
 */
$mugstock = 7;
$specstock = 7;
$srollsstock = 7;

do {
    $i += 1;
    $good = "";
    $todaysgood = rand(1, 2);
    switch($todaysgood) {
        case 0:
            $srollsstock - rand(0, 2);
            $good = "Sausage Rolls";
            break;
        case 1:
            $specstock - rand(0, 2);
            $good = "Specs";
            break;
        case 2:
            $mugstock - rand(0, 2);
            $good = "Mugs";
            break;
        default:
            echo "You're a sucky suck";
            break;
    }
    echo "On the $i $good are available";
}
while($mugstock > 0 && $specstock > 0 && $srollsstock > 0 and $i < 31);

?>