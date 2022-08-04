<?php
// while

while (expression)statement

$total = 0; $i=1;
while ($i <= 10) { $total += $i; $i++;
}

while (expr): statement;
more statements ;
endwhile;

$total = 0; $i=1;
while ($i <= 10): $total += $i; $i++;
endwhile;

// for

$counter = 0;
while ($counter < 10) {
echo "Counter is {$counter} <br/>"; $counter++;
}

for ($counter = 0; $counter < 10; $counter++) { echo "Counter is $counter <br/>";
}

for (start; condition; increment) { statement(s); }

for (expr1; expr2; expr3): statement;
...;
endfor;

$total = 0;
for ($i= 1; $i <= 10; $i++) { $total += $i;
}

// foreach
foreach ($array as $current) { 
    // ...
}

foreach ($array as $current): 
    // ...
endforeach;

foreach ($array as $key => $value) { 
    // ...
}

foreach ($array as $key => $value): 
    // ...
endforeach;
// try catch

try {
    $dbhandle = new PDO('mysql:host=localhost; dbname=library', $username, $pwd);
    doDB_Work($dbhandle); // call function on gaining a connection
    $dbhandle = null; // release handle when done
} catch (PDOException $error) {
    print "Error!: " . $error->getMessage() . "<br/>";
    die();
}

// exit and return

$db = mysql_connect("localhost", $USERNAME, $PASSWORD);
if (!$db) {
    die("Could not connect to database");
}

$db = mysql_connect("localhost", $USERNAME, $PASSWORD) or die("Could not connect to database");

// goto 

for ($i = 0; $i < $count; $i++) { // oops, found an error
    if ($error) {
        goto cleanup;
    }
}
cleanup:
    // do some cleanup