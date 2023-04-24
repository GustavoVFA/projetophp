<?php

$emp = array(
    array(1,"José",4000),
    array(2,"Maria",5000),
    array(3,"João",3000)
);

echo "<pre>";
print_r($emp);
echo "<pre>";

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $emp[$i][$j]." ";
    }
    echo "<br/>";
}