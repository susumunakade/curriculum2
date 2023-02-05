<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
    <form action="result.php" method="post">
        <p>名前：<input type="text" name="my_name" /></p>
        <p>番号（1～6入力):<input type="text" name="number" /><p>
            <!-- <select name="number">
                <?php for($i=1;$i<=6;$i++){ ?>
                    <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>  
                    </option>
                <?php } ?>
            </select></p> -->
        <p><input type="submit" value="送信" /></p>
    </form>
</body>
</html>