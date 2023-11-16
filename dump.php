<?php

require __DIR__.'/vendor/autoload.php';

// initialisation de variables
$number = 123;
$text = "foo bar baz";
$flag = true;

// inspection de variables
var_dump($number);
var_dump($text);
var_dump($flag);

// inspection variable w symfony/var-dumper
dump($number);
dump($text);
dump($flag);
