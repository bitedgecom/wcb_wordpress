<?php

function how_old_in_year($yob, $target_year) 
{
    $result = $target_year - $yob;
    
    return "in " . $target_year . " you will turn " . $result;
}