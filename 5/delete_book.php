<?php

require_once('db_connect.php');
require_once('function.php');

$id = $_GET['id'];

check_user_logged_in();

redirect_main_unless_parameter($id);


try{
    $pdo = db_connect();
    $sql = 'DELETE FROM books WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: main.php");

}catch(Exception $e){
    echo 'Error: ' .$e->getMessage();
    die(); 

}