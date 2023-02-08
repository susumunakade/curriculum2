<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$answer_1 = $_POST['answer_1'];
$answer_2 = $_POST['answer_2'];
$answer_3 = $_POST['answer_3'];
$success_1 = $_POST['success_1'];
$success_2 = $_POST['success_2'];
$success_3 = $_POST['success_3'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><!--POST通信で送られてきた名前を表示-->
<?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if($answer_1 == $success_1){
        echo '正解！';
    }else{
        echo '残念・・・';
    }
?>
    

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if($answer_2 == $success_2){
        echo '正解！';
    }else{
        echo '残念・・・';
    }
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    if($answer_3 == $success_3){
        echo '正解！';
    }else{
        echo '残念・・・';
    }
?>