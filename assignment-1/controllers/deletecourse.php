<?php
	header('Content-Type: application/json; charset=utf-8');
	include_once("../models/course.php");
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
	$course = new course($_GET['id']);
	$course->delete();
	echo json_encode(['status'=>1]);
?>