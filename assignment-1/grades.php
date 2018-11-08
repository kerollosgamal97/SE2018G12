<?php
	include_once('./controllers/common.php');
	include_once('./components/head_grade.php');
	include_once('./models/grade.php');
	Database::connect('epiz_22929516_school', 'epiz_22929516', '');
?>
	<div style="padding: 10px 0px 10px 0px; vertical-align: text-bottom;">
		<span style="font-size: 125%;">Grades</span>
		<button class="button float-right edit_grade" id="0">Add Grades</button>
	</div>

    <table class="table table-striped">
    	<thead>
	    	<tr>
	      		<th scope="col">Student Name</th>
               	      		<th scope="col">Course Name</th>
                              	      		<th scope="col">Degree</th>
                                             	      		<th scope="col">Examine At</th>
	      		<th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
		  	<?php
				$grades = grade::all(safeGet('keywords'));
				foreach ($grades as $grade) {
			?>
    		<tr>
    			<td><?=$grade->studentname?></td>
                			<td><?=$grade->coursename?></td>
                            			<td><?=$grade->degree?></td>
                                        			<td><?=$grade->examine_at?></td>
    			<td>
    				<button class="button edit_grade" id="<?=$grade->gradeid?>">Edit</button>&nbsp;
    				<button class="button delete_grade" id="<?=$grade->gradeid?>">Delete</button>
				</td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>

<?php include_once('./components/tail.php') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.edit_grade').click(function(event) {
			window.location.href = "editgrade.php?id="+$(this).attr('id');
		});

		$('.delete_grade').click(function(){
			var anchor = $(this);
			$.ajax({
				url: './controllers/deletegrade.php',
				type: 'GET',
				dataType: 'json',
				data: {id: anchor.attr('id')},
			})
			.done(function(reponse) {
				if(reponse.status==1) {
					anchor.closest('tr').fadeOut('slow', function() {
						$(this).remove();
					});
				}
			})
			.fail(function() {
				alert("Connection error.");
			})
		});
	});
</script>
