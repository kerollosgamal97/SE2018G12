<?php include_once('./components/head.php');
include_once('./controllers/common.php');
include_once('./models/customer.php');
include_once('./models/item.php');
Database::connect('egfashion', 'root','');
$id = safeGet('id');
Item::order($id);
$item = Item::show($id);
?>


<div class="col-lg-6">
<div class=" mr-md-9 pt-5 px-6 pt-md-5 px-md-6 text-center overflow-hidden" style="margin-top:5px; display:inline-block; background-color:rgb(240, 240, 240);border-radius: 30px 30px 30px 30px;">
  <div class="my-5 py-6">
      <?php echo '<img style="width:300px; height:200px;border-radius: 30px 30px 30px 30px; " src="data:image/jpeg;base64,'.base64_encode($item['img'] ).'"/>';?>

    <p style="margin:10px; margin-bottom:0;"> <b>Color:</b>   <?=$item['color']?></p>
    <p style="margin:0;"><b>Size:</b>     <?=$item['size']?></p>
    <p style="margin:0;"> <b>Material:</b>      <?=$item['material']?></p>
    <p style="margin:0;"> <b>Category: </b>    <?=$item['type']?></p>
      <p style="margin:0;"> <b>Price: </b>       <?=$item['price']?></p>
        <p style="margin:0;"> <b>Valid: </b>       <?=$item['valid']?></p>
          <p style="margin:0;"> <b>Owner_id: </b>       <?=$item['owner_id']?></p>
            <p style="margin:0;"> <b>Email: </b>       <?=$item['email']?></p>
              <p style="margin:0;"> <b>Address: </b>       <?=$item['address']?></p>
                <p style="margin:0;"> <b>PhoneNumber: </b>       <?=$item['phonenumber']?></p>

    </div>
<p><a class="btn btn-secondary order" style ="background-color:rgb(0, 227, 0);border-radius: 21px 21px 21px 21px;" href="show.php" role="button">Back To Gallery</a></p>
</div>
</div>



<div class="col-lg-6">

<h1>  Thanks For Order    </h1>

</div>

<?php include_once('./components/maintail.php');?>
