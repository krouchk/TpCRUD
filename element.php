<?php
require_once(__DIR__ . "/config.php");

$elevesStatement = $mysqlUser->prepare('SELECT * FROM eleve e
    JOIN classe cl ON e.classe_id = cl.Id
    ORDER BY e.id');
$elevesStatement->execute();
$eleve = $elevesStatement->fetchAll();

$classeStatement = $mysqlUser->prepare('SELECT * FROM classe');
$classeStatement->execute();
$classe = $classeStatement->fetchAll();
