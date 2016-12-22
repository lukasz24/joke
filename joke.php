<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__ . '/ranJok.php';

$api = new Joke;

echo "Random today's joke is: \n\n";
echo "{$api -> randomJoke()}";

echo "All jokes: \n\n";
$api->all(false);