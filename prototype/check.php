<?php
include_once('./components/head.php');
 include_once('./models/customer.php');
 include_once('./controllers/common.php');
Database::connect('egfashion', 'root','');
$sql = "SELECT email , password ,type FROM customer WHERE email=? AND password=?";
$statement = Database::$db->prepare($sql);
$statement->execute([$_POST['inputemail'],$_POST['inputpass']]);
$data = $statement->fetch(PDO::FETCH_ASSOC);
if(empty($data)){

  echo "<br><h1>Email or Password is invalid</h1>";
  ?>
<form action="signin.php">
  <button type="submit" class="btn btn-primary submit">Try Again</button>
</form>
<?php
}
else if ($data['type']=="Customer")
          header('Location: customerpage.php');
else if ($data['type']=="Designer")
          header('Location: designer.php');
else
  header('Location: home.php');

?>
