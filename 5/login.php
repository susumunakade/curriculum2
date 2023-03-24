<?php

require_once('db_connect.php');

session_start();

if (!empty($_POST)){
    if(empty($_POST["name"])){
        echo "名前が未入力です";
    }

    if(empty($_POST["password"])){
        echo "パスワードが未入力です";
    }
}

if(!empty($_POST["name"]) && !empty($_POST["password"])){
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES);

    $pdo = db_connect();

    try{
        $sql = "SELECT * FROM users WHERE name = :name";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }catch(Exception $e){
        echo 'Error: '. $e->getMessage();
        die();
    }

    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($password, $row['password'])){

            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['name'];

            header("Location: main.php");
            exit;
        }else{
            echo "パスワードに誤りがあります。";
        }
    }else{
        echo "ユーザー名かパスワードに誤りがあります。";
        }
}




?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Typr" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<div class="login_title">    
    <h1>ログイン画面</h1>
    <p class="signUp_pos"><a class="signUp_btn" href="signUp.php">新規ユーザー登録</a></p>
</div>
    <form method='post' action=''>
        <input class="text" type="text" name="name"  id="name"  placeholder="ユーザー名"><br>
        <input class="text" type="password" name="password"  id="password"  placeholder="パスワード"><br>
        <input class="login_btn" type="submit" value="ログイン"></br>
    </form>
</body>
