<?php

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;

$sum = 2 + 2;

$string = 'Hello World';

echo 'This is a string ' . $string . ' that was concatenated.';

echo "\n $string ";
echo '\n $string ';

#functions:

function doubleMe($parameter) {
    return $parameter * 2;
}
$num = doubleMe(5);


#conditions

if ($num > 75) {
    echo "You passed with a grade of $num";
} else {
    echo "You failed :(";
}

#starting
#php -S localhost:8000

