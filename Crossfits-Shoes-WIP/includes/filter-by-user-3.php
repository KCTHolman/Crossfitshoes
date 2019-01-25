<?php

    //filter-by-user-3.PHP

    include "../includes/db_connection.php";        

    $sql_querie = "SELECT product_name, product_comment,product_type , product_shoesize, product_price, product_image, 
    user_name, user_crossfitbox FROM users INNER JOIN products ON products.user_id = users.user_id WHERE users.user_id = 3
    ";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo '<div class="card-user">
        <div class="info-shoe-left">
        <img class="product-image-info" src="../' . $row['product_image'] . '">
        <div class="user-name">' . $row ['user_name'] . '</div>
        <div class="info-user-crossfitbox">'. $row ['user_crossfitbox'] . ' </div>
    </div>
    <div class="info-shoe-right">
        <div class="product-name-info">' . $row ['product_name'] . '</div>
        <div class="product-price-info">'. $row ['product_price'] . '</div>
        <div class="product-size-info">' . $row ['product_shoesize'] . '</div>
        <div class="product-comment-info">' . $row ['product_comment'] . '</div>
        <div class="product-category-info">' . $row ['product_type'] . '</div>
    </div></div>';
    }       

    $conn = null;
  
?>


