<?php
    function formatPrice($value){
        return "R$ " . number_format($value, 2, ',', '.');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>


  <body>
    <?php
      if(!isset($_COOKIE['data'])){
        echo "<div>";
        echo "<p>Never visited any product, cookie not present.</p>";
        echo "</div>";
      } else {
        $data = $_COOKIE['data'];
        if(array_key_exists ("originalPrice" , array $data )){
          $original_price = formatPrice($_COOKIE['originalPrice']);
        }
        $sale_price = formatPrice($_COOKIE['salePrice']);
        echo "<a href='$_COOKIE['prodURL']' target='_blank'>";
        echo "<div>";
        echo "<h3>$data['name']</h3>";
        echo "<img src='$_COOKIE['prodURL']'>";
        if(array_key_exists ("originalPrice" , array $data )){
          echo "<p>De: $original_price</p>";
        }
        echo "<p>Por: $sale_price</p>";
        echo "</div>";
        echo "</a>";
      }
    ?>
  </body>
</html>
