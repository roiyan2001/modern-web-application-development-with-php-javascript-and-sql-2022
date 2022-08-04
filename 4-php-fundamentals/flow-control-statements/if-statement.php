<?php 
if (expression)statement

if (expression) 
    statement
else statement

if ($user_validated)
    echo "Welcome!";
else
    echo "Access Forbidden!";

if ($user_validated) { 
    echo "Welcome!"; 
    $greeted = 1;
} else {
    echo "Access Forbidden!";
    exit; }
?>