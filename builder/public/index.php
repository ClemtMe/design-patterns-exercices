<?php

use App\LitteralQueryBuilder;
use App\MySQLQueryBuilder;

require('../vendor/autoload.php');

$query = (new MySQLQueryBuilder())
    ->from("users")
    ->select(["id", "name", "email"])
    ->where("id", "=", 1)
    ->where("role", "=", "admin")
    ->getQueryString();

echo $query . "<br>";

$query = (new LitteralQueryBuilder())
    ->from("users")
    ->select(["id", "name", "email"])
    ->where("id", "=", 1)
    ->where("role", "=", "admin")
    ->getQueryString();

echo $query;