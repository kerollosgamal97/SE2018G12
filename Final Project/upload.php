<?php
include_once('./components/head.php');
include_once('./controllers/common.php');
include_once('./models/database.php');
include_once('./models/item.php');

Database::connect('egfashion', 'root', '');

$color = $_POST['color'];
$size = $_POST['size'];
$material = $_POST['material'];
$type = $_POST['type'];
$price = $_POST['price'];
$valid = $_POST['valid'];
$owner_id=$_POST['owner_id'];
$check = getimagesize($_FILES["image"]["tmp_name"]);

if ($check !== false) {
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    Item::add($color, $size, $material, $type, $price, $img,$valid,$owner_id);
}

?>
<?php include_once('./components/maintail.php');
  header('Location: show.php'); ?>
