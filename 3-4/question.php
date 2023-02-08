<link rel="stylesheet" href="style.css">

<?php

//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$question_1 = ['80' , '22' , '20' ,'21'];
$question_2 = ['PHP' , 'Python' , 'JAVA' ,'HTML'];
$question_3 = ['join' , 'select' , 'insert' ,'update'];


//② ①で作成した、配列から正解の選択肢の変数を作成してください
$success_1 = $question_1[0];
$success_2 = $question_2[3];
$success_3 = $question_3[1];

?>

<!--フォームの作成 通信はPOST通信で-->
<form action = "answer.php" method = "post">
    <p>お疲れ様です<?php echo $my_name; ?><!--POST通信で送られてきた名前を出力-->さん</p>


    <h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php 
            foreach($question_1 as $value){ ?>
                <input type="radio" 
                    value="<?php echo $value; ?>" 
                    name="answer_1" >
                    <?php echo $value; ?>
            <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php 
            foreach($question_2 as $value){ ?>
                <input type="radio"  
                    value="<?php  echo $value; ?>" 
                    name="answer_2">
                    <?php echo $value; ?>
            <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php 
            foreach($question_3 as $value){ ?>
                <input type="radio"  
                    value="<?php echo $value; ?>" 
                    name="answer_3">
                    <?php echo $value; ?>
            <?php } ?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <br>
    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
    <input type="hidden" name="success_1" value="<?php echo $success_1; ?>">
    <input type="hidden" name="success_2" value="<?php echo $success_2; ?>">
    <input type="hidden" name="success_3" value="<?php echo $success_3; ?>">
    <input type="submit" value="回答する">
</form>


