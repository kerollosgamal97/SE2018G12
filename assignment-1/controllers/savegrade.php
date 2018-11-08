<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
	$id = safeGet("id", 0);
	if($id==0) {
		grade::add(safeGet("studentname"),safeGet("coursename"),safeGet("examine_at"),safeGet("degree"));
	} else {
		$grade = new grade($id);
		$grade->studentname = safeGet("studentname");
      $grade->coursename = safeGet("coursename");
      $grade->examine_at = safeGet("examine_at");
      $grade->degree = safeGet("degree");
		$grade->save();
	}
	header('Location: ../grades.php');
?>
