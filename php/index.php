<?php

require_once __DIR__ . '/vendor/autoload.php';

/** PUT namspaces here */
use Connectors\Database\DatabaseConnector;

/** START functionality here */
$connector = new DatabaseConnector();

echo "<h1>Welcome to PHP Migrator ...</h1>";
