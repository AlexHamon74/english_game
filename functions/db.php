<?php

function getConnection(): PDO   
{
    // Chargement de la configuration
    [
        'DB_HOST'     => $host,
        'DB_PORT'     => $port,
        'DB_NAME'     => $dbName,
        'DB_CHARSET'  => $charset,
        'DB_USER'     => $dbUser,
        'DB_PASSWORD' => $dbPassword
    ] = parse_ini_file(__DIR__ . '/../config/db.ini');

    // Injection des paramètres de configuration dans le Data Source Name
    $dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$charset";

    $pdo = new PDO(
        $dsn,
        $dbUser,
        $dbPassword,
    );
    return $pdo;
}