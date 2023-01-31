<?php

define("TAX",1.1);

$products = array(
    "鉛筆" => "100",
    "消しゴム" => "150", 
    "物差し" => "500");



        

        function get_teika($products){
            foreach($products as $key => $value){
                echo '<p>';
                echo $key;
                echo 'の税込み価格は';
                echo $value * TAX;
                echo '円です';
                echo '</p>';
                
            }    
            
        
            
            
    
            // $kakaku= $products * TAX;
            
            // return $kakaku;

        }

        get_teika($products);


    // get_teika(100);
    // get_teika(150);
    // get_teika(500);
    
    
    

?>
