<?php
	include_once("./controllers/common.php");
	include_once('./components/head_grade.php');
	include_once('./models/grade.php');
	$id = safeGet('id');
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
	$grade = new grade($id);
?>

    <h2 class="mt-4"><?=($id)?"Edit":"Add"?> Grade</h2>

    <form action="controllers/savegrade.php" method="post">
    	<input type="hidden" name="id" value="<?=$grade->get('gradeid')?>">
		<div class="card">
			<div class="card-body">
				<div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Student Name</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="studentname" value="<?=$grade->get('studentname')?>" disabled>
					</div>
				</div>

            <div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="coursename" value="<?=$grade->get('coursename')?>" disabled>
					</div>
				</div>



            <div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Examine At</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="examine_at" value="<?=$grade->get('examine_at')?>" required>
					</div>
				</div>



            <div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Degree</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="degree" value="<?=$grade->get('degree')?>" required>
					</div>
				</div>









		    	<div class="form-group">
		    		<button class="button float-right" type="submit">Add</button>
		    	</div>
		    </div>
		</div>
    </form>

<?php include_once('./components/tail.php') ?>
