<?php
require 'vendor/autoload.php';

$token = '';
$databaseId = '';


use Notion\Notion;

$client = new Notion($token);
$database = $client->database($databaseId)->query()->get();

//var_dump($database);

