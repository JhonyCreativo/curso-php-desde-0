<?php 
    include "conexion.php";
    $cn = Db();
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $cn->exec($sql);
    header("Location: index.php");