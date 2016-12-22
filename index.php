<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/ranJok.php';

$api = new Joke;

echo "<p><b>Random today's joke is: </b></p>\n";
echo "<p>{$api -> randomJoke()}</p>\n";


echo "<p><b>All jokes: </b></p>\n";
$api->all(true);