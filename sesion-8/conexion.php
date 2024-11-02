<?php 
    function Db(){
        try{
            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "crud_php";
            $cn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
            return $cn;
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
