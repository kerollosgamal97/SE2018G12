<?php include_once('./components/head.php');
include_once('./controllers/common.php');
include_once('./models/customer.php');
include_once('./models/item.php');
Database::connect('egfashion', 'root','');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Products</title>



    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>

  <body>

    <?php

	//$items = Item::all();
  $items = Item::all();
    foreach ($items as $item) {
  ?>


  <div class=" mr-md-6 pt-5 px-6 pt-md-5 px-md-6 text-center overflow-hidden" style="margin-top:5px; display:inline-block; background-color:rgb(240, 240, 240);border-radius: 30px 30px 30px 30px;">
    <div class="my-5 py-6">
        <?php echo '<img style="width:300px; height:200px;border-radius: 30px 30px 30px 30px; " src="data:image/jpeg;base64,'.base64_encode($item->img ).'"/>';?>

      <p style="margin:10px; margin-bottom:0;"> <b>Color:</b>   <?=$item->color?></p>
      <p style="margin:0;"><b>Size:</b>     <?=$item->size?></p>
      <p style="margin:0;"> <b>Material:</b>      <?=$item->material?></p>
      <p style="margin:0;"> <b>Category: </b>    <?=$item->type?></p>
        <p style="margin:0;"> <b>Price: </b>       <?=$item->price?></p>
          <p style="margin:0;"> <b>Valid: </b>       <?=$item->valid?></p>
      </div>
  
</div>


  <?php } ?>



     <?php include_once('./components/maintail.php') ?>





    