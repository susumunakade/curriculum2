<?php
    $my_name = $_POST['my_name'];
    $number = $_POST['number'];

    $fortune = $number * mt_rand(1,6);

    

?>


    <p> <?php echo date("Y-m-d H:i:s",time()); ?></p>
    <p>名前：<?php echo $my_name; ?></p>
    <p>番号：<?php echo $fortune; ?></p>
    <p>結果は
    <?php if($fortune <= 10){
        echo '凶です';
    }elseif($fortune <= 15){
        echo '小吉です';
    }elseif($fortune <=20){
        echo '中吉です';
    }elseif($fortune <=25){
        echo '吉です';
    }elseif($fortune <= 36){
        echo '大吉です';
    }else{
        echo '残念';
    } ?>
    </p>