<?php

    require_once('getData.php');
    $pdo = new getData();
    $users = $pdo->getUserData();
    $posts = $pdo->getPostData();


    
    // $sql = "SELECT * FROM users";
    // // // 関数db_connect()からPDOを取得する
    // $pdo = db_connect();
    // try {
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute();
    
    // $sql_stmt =$pdo-> query($sql);
    // //     // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // //     // 読み込むものがなくなったらループ終了
        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // echo $row['id'] . '、' . $row['first_name'] . '、' . $row['last_name'];
            // echo '<br />';
        // }
    // } catch (PDOException $e) {
        // echo 'Error: ' . $e->getMessage();
        // die();
    // }
?>

<!doctype html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <header>
            <img src="1599315827_logo.png" class="logo">
            <?php
                try {
                    // //     // ループ文を使用して、1行ずつ読み込んで$rowに代入する
                    // //     // 読み込むものがなくなったらループ終了
                        while ($row = $users->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div>
                                <p class="name"> <?php echo "ようこそ ".$row['last_name'].$row['first_name']." さん"; ?> </p>
                                <p class="login"> <?php echo "最終ログイン日:".$row['last_login']; ?> </p>
                            </div>
                        <?php }

                        
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                        die();
                    }
                
            
            ?>
        </header>

        <main>


            <div class="column">  <!-- カラムの出力 -->
                <p class="id_column"> <?php echo '記事ＩＤ'; ?></p>
                <p class="title_column"> <?php echo 'タイトル'; ?></p>
                <p class="category_column"> <?php echo 'カテゴリ'; ?></p>
                <p class="comment_column"> <?php echo '本文'; ?></p>
                <p class="created_column"> <?php echo '投稿日'; ?></p>
            </div>
            <?php try {  /* SQL処理を実行してDB postデータを出力*/ 
        
                // ループ文を使用して、1行ずつ読み込んで$rowに代入する
                // 読み込むものがなくなったらループ終了
                while ($row = $posts->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="info">
                        <p class="id"><?php echo $row['id']; ?> </p> 
                        <p class="title"><?php echo $row['title']; ?> </p>
                        <p class="category"><?php
                            if($row['category_no'] == 1){
                                echo "食事";}
                            elseif($row['category_no'] == 2){
                                echo "旅行";}
                            else{
                                echo "その他";
                            }
                            
                        ?> </p>
                        <p class="comment"><?php echo $row['comment']; ?> </p>
                        <p class="created"><?php echo $row['created']; ?> </p>
                    </div> 
                
                

                <?php }
            }catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        } ?>
        </main>

        <footer>
            <p>Y&I group.inc</p>
        </footer>
    </body>
</html>





