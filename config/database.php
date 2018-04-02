<?php

// database credentials
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'id5155105_users');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');

// connexion to the databases
  try{
    $db = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    //detect errors and can't continue running without resolving the printed error
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
    die('Erreur: '.$e->getMessage());
  }

 ?>
