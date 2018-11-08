<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/student.php");
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
	$student = new Student($_GET['id']);
	$student->delete();
	echo json_encode(['status'=>1]);
?>