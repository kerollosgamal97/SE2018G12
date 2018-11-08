<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/grade.php");
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
	$grade = new grade($_GET['id']);
	$grade->delete();
	echo json_encode(['status'=>1]);
?>