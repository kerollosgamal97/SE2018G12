<?php
include_once('./components/head.php');
include_once('./models/customer.php');
include_once('./controllers/common.php');
Database::connect('egfashion', 'root','');
$id = safeGet('id');
$Customer = new Customer($id);
 ?>
<div class="container">
<p> </p>
<h3>Sign up Now </h3>
<p> </p>
<form action="controllers/addcustomer.php" method="post">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Name</label>
      <input type="text" class="form-control" name="name" value="<?=$Customer->get('name')?>" required>
    </div>
	 <div class="form-group col-md-6">
      <label for="inputCity">Mobile Number</label>
      <input type="text" class="form-control" name="phonenumber" value="<?=$Customer->get('phonenumber')?>" required>
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$Customer->get('email')?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" value="<?=$Customer->get('password')?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" placeholder="1234 Main St" value="<?=$Customer->get('address')?>" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Governerate</label>
      <select name="governate" class="form-control" value="<?=$Customer->get('governate')?>" required>
        <option selected>Cairo</option>
        <option>Giza</option>
		<option>Alexandria</option>
		<option>Al Gharbia</option>
		<option>Al Qalubia</option>
		<option>Al Mansoura</option>
		<option>Al Wadi Al Gdid</option>
      </select>
    </div>
	<div class="form-group col-md-4">
      <label for="inputState">Sign Up As:</label>
      <select name="type" class="form-control" value="<?=$Customer->get('type')?>" required>
        <option selected>Customer</option>
		<option>Designer</option>
		<option>Shop Owner</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
</div>
