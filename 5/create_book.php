<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

if(!empty($_POST)){
    if(empty($_POST['title'])){
        echo "タイトルが未入力です" .'</br>';
    }
    if(empty($_POST['date'])){
        echo "発売日が未入力です。" .'</br>';
    }
    if(empty($_POST['stock'])){
        echo "数量が未入力です" .'</br>';
    }   
}
if(!empty($_POST['title']) && !empty($_POST['date'])&& !empty($_POST['stock'])){

    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
    $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);

    try{
        $pdo = db_connect();
        $sql = "INSERT INTO books(title, date, stock) VALUE(:title, :date, :stock)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':stock', $stock);
        $stmt->execute();
    
        header("Location: main.php");
    
    }catch(Exception $e){
        echo 'Error: '. $e->getMessage();
        die();
    }
}







?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Typr" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本登録</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body> 
    <h1>本 登録画面</h1>
    <form method="post" action="">
        <input class="text" type="text" name="title" id="title" placeholder="タイトル"></br>
        <input class="text" type="date" name="date" id="date" placeholder="発売日"></br>
        <input class="text" type="number" name="stock" id="stock"  min="0" max="100" placeholder="選択して下さい"></br>
        <input class="login_btn" type="submit" value="登録">
    </form>
</body>
