<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
	->withServiceAccount('funda-project-f98ca-firebase-adminsdk-fioma-5484dae11a.json')
	->withDatabaseUri('https://funda-project-f98ca-default-rtdb.firebaseio.com/');

	$database = $factory->createDatabase();
?>