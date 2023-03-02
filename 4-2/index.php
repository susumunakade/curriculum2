<?php

    require_once('getData.php');

    
    // $sql = "SELECT * FROM posts";
    // // // 関数db_connect()からPDOを取得する
    $pdo = db_connect();
    // try {
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->execute();
    
    // //     // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // //     // 読み込むものがなくなったらループ終了
    //     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //         echo $row['id'] . '、' . $row['title'] . '、' . $row['comment'];
    //         echo '<br />';
    //     }
    // } catch (PDOException $e) {
    //     echo 'Error: ' . $e->getMessage();
    //     die();
    // }

//     $sql_a = 'select id,comment from posts';

// // ↓queryに$sqlを渡す
// $result = $pdo->query($sql_a);

// // ↓queryの結果は配列で返ってくるのでforeachで取り出す
// foreach($result as $val) {
//     echo $val['id']. '<br />';
//     echo $val['comment']. '<br />';
// }

    // class Infomation{  //ユーザー情報、記事情報をインスタンス化するクラス

    //     public $content;

    //     public function __construct (/*$sql_users,$sql_posts,$test,*/$info) {
    //         // $this->users = $sql_users;
    //         // $this->posts = $sql_posts;
    //         // $this->aaa = $test;
    //         $this->content = $info;
    //     }

    //     public function getPosts(){
    //         echo $this->content;
    //     }

        // public function whatIsContent() {
        //     echo '中身は'.$this->content.'だよ。';
        // }

        // public function In_posts(){
        //     $this->content;
        // }




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

        </header>

        <main>

        <?PHP 
            // $sql_posts = "SELECT * FROM posts ORDER BY id desc";
            // $pdo = db_connect();

            // $testout = new Infomation("1");
            // $testout -> getPosts();

            // $sql_posts = new infomation($post_data);
            // $sql_posts -> In_posts();


            $sql_posts = new getData(db_connect());
            $sql_posts -> getPostData();
        ?>
            <div class="column">
                <p class="id_column"> <?php echo '記事ＩＤ'; ?></p>
                <p class="title_column"> <?php echo 'タイトル'; ?></p>
                <p class="category_column"> <?php echo 'カテゴリ'; ?></p>
                <p class="comment_column"> <?php echo '本文'; ?></p>
                <p class="created_column"> <?php echo '投稿日'; ?></p>
            </div>
            <?php try {
                $stmt = $pdo->prepare($sql_posts);
                $stmt->execute();
        
                // ループ文を使用して、1行ずつ読み込んで$rowに代入する
                // 読み込むものがなくなったらループ終了
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
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

        </footer>
    </body>
</html>





