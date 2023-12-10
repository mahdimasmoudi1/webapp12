<?php
const DB_DSN = 'mysql:host=mysql_container;dbname=test';
const DB_USER = "tcqhqgipdj";
const DB_PASS = "CVKW73PNS5XE7761$";



$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // encodage utf-8
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // gérer les erreurs en tant qu'exception
    PDO::ATTR_EMULATE_PREPARES => false // faire des vrais requêtes préparées et non une émulation
);
