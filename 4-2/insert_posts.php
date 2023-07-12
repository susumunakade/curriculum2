<?php

require_once("pdo.php");

if(!empty($_POST)){
    if(empty($_POST['title'])){
        echo "タイトルが未入力です" .'</br>';
    }

    if(empty($_POST['category_no'])){
        echo "カテゴリＮｏが未入力です" .'</br>';
    }

    if(empty($_POST['comment'])){
        echo "本文が未入力です" .'</br>';
    }

    if(empty($_POST['created'])){
        echo "投稿日が未入力です" .'</br>';
    }

}

if(!empty($_POST['title']) && $_POST['category_no'] && $_POST['comment'] && !empty($_POST['created'])){
    
    $title= htmlspecialchars($_POST['title'], ENT_QUOTES);
    $category_no = htmlspecialchars($_POST['category_no'], ENT_QUOTES);
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES);
    $created = htmlspecialchars($_POST['created'], ENT_QUOTES);

    try{
        $pdo = db_connect();
        $sql = "INSERT INTO posts(title, category_no, comment, created) VALUE(:title, :category_no, :comment, :created)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':category_no', $category_no);
        $stmt->bindParam('comment', $comment);
        $stmt->bindParam('created',$created);
        $stmt->execute();
    }catch(Exception $e){
        echo 'Error: '. $e->getMessage();
        die();
    }
}

?>

<!doctype html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
        <p>記事登録画面</p>
        <form method="post" action="">
            <input type="text" name="title" id="title"><br>
            <input type="text" name="category_no" id="category_no"><br>
            <input type="text" name="comment" id="comment"><br>
            <input type="hidden" name="created" id="created" value="<?php echo date('Y-m-d H:i:s'); ?>">
            <input  type="submit" value="登録">
        </form>
        <a href="index.php">記事一覧画面へ戻る</a>
    </body>