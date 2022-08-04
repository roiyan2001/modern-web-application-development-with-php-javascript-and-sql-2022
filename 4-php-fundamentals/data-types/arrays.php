<?php

$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";
$creator['Light bulb'] = "Edison";
$creator['Rotary Engine'] = "Wankel";
$creator['Toilet'] = "Crapper";


$person = array("Edison", "Wankel", "Crapper"); 
$creator = array('Light bulb' => "Edison",
     'Rotary Engine' => "Wankel",
     'Toilet' => "Crapper");

foreach ($person as $name) { 
    echo "Hello, {$name}<br/>";
    }
    
foreach ($creator as $invention => $inventor) { 
    echo "{$inventor} invented the {$invention}<br/>";
    }
//        Hello, Edison
//        Hello, Wankel
//        Hello, Crapper
//        Edison created the Light bulb
//        Wankel created the Rotary Engine
//        Crapper created the Toilet