<?php

require 'Cat.php';
//use Cat\Cat;

$cat = new Cat('garfield');

if ($cat->getName() === 'garfield') {
    echo 'it\'s garfield';
};

echo '<br/>';
echo $cat->meow();

?>
