<?php

session_start();
$_SESSION = array();
session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Typr" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>  
    <h1>ログアウト画面</h1>
    <p>ログアウトしました</p>
    <a class="back_login_btn" href="login.php">ログイン画面に戻る</a>
</body>
