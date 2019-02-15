<?php
include_once('./components/Customer_head.php');
include_once('./models/customer.php');
include_once('./controllers/common.php');
include_once('./models/item.php');
	include_once('./models/database.php');
$name=$_GET['name'];
$gov=$_GET['gov'];
$type=$_GET['type'];
Database::connect('egfashion', 'root','');

$users=Customer::search_user($name,$gov,$type);

?>


<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Governate</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Address</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php

    foreach ($users as $user) {
  ?>
    <tr>
      <td><?=$user->name?></td>
      <td><?=$user->email?></td>
      <td><?=$user->governate?></td>
      <td><?=$user->phonenumber?></td>
      <td><?=$user->address?></td>
      <td>
<a id="<?=$user->id?>" class ="click"  href="show2.php?id=<?=$user->id?>"><button class="btn btn-secondary click" style ="background-color:rgb(0, 227, 0);border-radius: 21px 21px 21px 21px;">Show</button></a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>





<script type="text/javascript">
 $(document).ready(function() {
   $('.click').click(function(event) {
     window.location.href = "show2.php?id="+$(this).attr('id');

   });



 });


 </script>
