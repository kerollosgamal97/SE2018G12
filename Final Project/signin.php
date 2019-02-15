<?php
include_once('./components/head.php');
 include_once('./models/customer.php');
 include_once('./controllers/common.php');
Database::connect('egfashion', 'root','');
 ?>
<div class="container">
<p> </p>
<h3> Sign In </h3>
<p> </p>
<form action="check.php"  method ="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="inputemail" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="inputpass" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary submit">Sign In</button>
</form>
</div>
