<?php

spl_autoload_register();

use Strategies\Adder;
use Strategies\Multiplier;
use Strategies\Raiser;

$source = [1, 2, 3, 4, 5, 6];

echo 'Pervious array: <pre>';
print_r($source);
echo '</pre><br />';

$obj = new Context(new Adder);

echo 'With adder: <pre>';
print_r($obj->calculate($source, 4));
echo '</pre><br />';

$obj->setStrategy(new Multiplier);

echo 'With multiplier: <pre>';
print_r($obj->calculate($source, 4));
echo '</pre><br />';

$obj->setStrategy(new Raiser);

echo 'With exponentiation: <pre>';
print_r($obj->calculate($source, 4));
echo '</pre><br />';
