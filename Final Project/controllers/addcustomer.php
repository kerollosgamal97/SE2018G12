<?php

include_once('../models/customer.php');
 	include_once('../controllers/common.php');
  include_once('../components/head.php');
Database::connect('egfashion', 'root', '');
Customer::add(safeGet("name"),safeGet("email"),safeGet("password"),safeGet("governate"),safeGet("address"),safeGet("phonenumber"),safeGet("type"));

$row = Customer::search(safeGet("name"),safeGet("email"),safeGet("password"),safeGet("governate"),safeGet("address"),safeGet("phonenumber"),safeGet("type"));
if (safeGet("type")=="Customer")
          header('Location: ../customerpage.php');
else if (safeGet("type")=="Designer")
          header('Location: ../designer.php?name='.safeGet("name")."&id=".$row['id']);
else
  header('Location: ../index.php');
 ?>
