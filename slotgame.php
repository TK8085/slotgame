<?php

$letter = [
    "C", "B", "A"];

$money = 0;
$count = 0;
$spin = "";
while($money < 500 || $count < 20){
    for($i = 0; $i < 3; $i++){
        $randomKey = array_rand($letter);
        $spin = $letter[$randomKey];

        

}
echo($spin);
$count = $count + 1;
};

