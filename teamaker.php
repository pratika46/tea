<?php
$arr = array("pratik","hariom","harshita","rashmi","swapnil","pragati","pratik","hariom","harshita","rashmi","swapnil","pragati");
$random1 = array_rand($arr, 1);
$random2 = array_rand($arr, 1);

for ($i=0; $i <= count($arr); $i++) { 
    if ($arr[$random1] == $arr[$random2]) {
        echo "today tea making turn is $arr[$random1],$arr[$random2]";
        die();
    }
    else {
        echo " not matched $arr[$random1] ,$arr[$random2]";
        return;
    }
}

?>

