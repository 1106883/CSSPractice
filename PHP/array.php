<?php
/**
 * Created by PhpStorm.
 * User: 1106883
 * Date: 07/03/2016
 * Time: 09:57
 */

$provisionedActivity = array("specs", "drugs", "rock n roll");

foreach($provisionedActivity as $x) {
    print "<p>$x</p>";
}

$provisionedActivity[1] = "hugs";

foreach($provisionedActivity as $x) {
    print "<p>$x</p>";
}

unset($provisionedActivity[2]);

foreach($provisionedActivity as $x) {
    print "<p>$x</p>";
}
?>