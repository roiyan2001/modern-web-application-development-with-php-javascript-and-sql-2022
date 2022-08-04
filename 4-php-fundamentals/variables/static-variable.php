<?php
function updateCounter() {
    static $counter = 0; $counter++;
    
    echo "Static counter is now {$counter}<br/>"; 
}

$counter = 10;
updateCounter();
updateCounter();

echo "Global counter is {$counter}";
Static counter is now 1
Static counter is now 2
Global counter is 10

?>