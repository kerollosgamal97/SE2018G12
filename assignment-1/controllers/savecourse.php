<?php
	include_once("../controllers/common.php");
	include_once("../models/course.php");
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
	$id = safeGet("id", 0);
	if($id==0) {
		course::add(safeGet("name"),safeGet("max_degree"),safeGet("study_year"));
	} else {
		$course = new course($id);
		$course->name = safeGet("name");
		$course->max_degree = safeGet("max_degree");
		$course->study_year = safeGet("study_year");
		$course->save();
	}
	header('Location: ../courses.php');
?>