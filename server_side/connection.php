<?php

$server = 'localhost';
$Dbname = 'infosystem';
$userdb = 'root';
$passdb = '';

try{
    $connect = new mysqli($server, $userdb, $passdb, $Dbname);

    if(!$connect){
        throw new mysqli_sql_exception('connection failed'.$connect->connect_error);
    }
} catch (mysqli_sql_exception $e){
    echo 'failed to connect'.$e->getMessage();
}