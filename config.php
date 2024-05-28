<?php
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'db_eleves';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';

try {
    $mysqlUser = new PDO (
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8',
        MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlUser->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
} catch (Exception $exception) {
    die('Erreur : ' . $exception->getMessage());
}

?>