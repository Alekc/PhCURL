<?php

require '../vendor/autoload.php';

$client = new \PhCURL\Client();

$response = $client->get("http://www.lenta.ru/");