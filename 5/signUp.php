<?php
require_once('db_connect.php');

if(!empty($_POST)){
    if(empty($_POST['name'])){
        echo "ユーザー名が未入力です".'<br>';
    }

    if(empty($_POST['password'])){
        echo "パスワードが未入力です";
    }

    if(!empty($_POST['name']) && !empty($_POST['password'])){
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);


        $pdo = db_connect();

        $sql = "INSERT INTO users (name, password) VALUE(:name, :password)";
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        try{            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':password', $password_hash);
            $stmt->execute();
            echo "登録しました";
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Typr" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method='post' action=''>
        <input class="text" type="text" name="name"  id="name"  placeholder="ユーザー名"><br>
        <input class="text" type="password" name="password"  id="password"  placeholder="パスワード"><br>
        <input class="login_btn" type="submit" value="新規登録"></br>
        <p><a class="back_login_btn" href="login.php">ログイン画面に戻る</a></p>
    </form>
</body>
</html>