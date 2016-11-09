<?php
  /*Esperamos receber como parâmetros os parâmetros do produto visualizado como seu SKU, a URL de sua página, seu nome, valor original (se existir), valor de venda e a URL de sua imagem.*/
  if(isset($_GET('sku')) && isset($_GET('prodURL')) && isset($_GET('name')) && isset($_GET('saleValue')) && isset($_GET('imageURL'))){
    $data = array(
      'sku' => $_GET('sku'),
      'prodURL' => $_GET('prodURL'),
      'name' => $_GET('name'),
      'originalValue' => $_GET('originalValue'),
      'saleValue' => $_GET('saleValue'),
      'imageURL' => $_GET('imageURL'),
    );
    setcookie("data", serialize($data), time() + (86400 * 30), "/"); /*cria o cookie com duração de um mês*/
  }
  $im = imagecreatefrompng("pixel.png");
  header('Content-Type: image/png');
  imagepng($im);
  imagedestroy($im);
?>
