<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

try{
    $pdo = db_connect();
    $sql = 'SELECT * FROM books ORDER BY id ASC';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}catch(Exception $e){
    echo 'Error: '. $e->getMessage();
    die();
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Typr" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>在庫一覧</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body> 
    <p> ようこそ <?php echo $_SESSION["user_name"]; ?>さん</p>  
    <h1>在庫一覧画面</h1>
    <div class="menu">
        <p><a class="create_book_btn" href="create_book.php">新規登録</a></p>
        <p class="main_pos"><a class="logout_btn" href="logout.php">ログアウト</a></p>
    </div>
    <table cellspacing="0">
        <tr class='columun'>
            <td>タイトル</td>
            <td>発売日</td>
            <td>在庫</td>
            <td></td>
        </tr>
    <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td> <?php echo $row['title']; ?> </td>
                <td> <?php echo $row['date']; ?> </td>
                <td> <?php echo $row['stock']; ?> </td>
                <td>
                    <a class="delete_btn" href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    

   
</body>
