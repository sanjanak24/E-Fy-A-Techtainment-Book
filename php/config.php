<?php

$localConfig = __DIR__ . "/config.local.php";

if (is_file($localConfig)) {
    require_once $localConfig;
} else {
    $servername = getenv("DB_HOST") ?: "localhost";
    $username = getenv("DB_USER") ?: "root";
    $password = getenv("DB_PASSWORD") ?: "";
    $database = getenv("DB_NAME") ?: "test";
}

$con = mysqli_connect($servername, $username, $password, $database);
