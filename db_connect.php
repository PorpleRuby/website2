<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('se2-dhre-bmre-sample-firebase-adminsdk-fbsvc-d58e5e0754.json')
    ->withDatabaseUri('https://se2-dhre-bmre-sample-default-rtdb.asia-southeast1.firebasedatabase.app/');

    $database = $factory->createDatabase();

?>