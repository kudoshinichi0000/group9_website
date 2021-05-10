<?php include('db.php');?>

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_quiz">
					<i class="fa fa-plus"></i> Add quiz
				</button>
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Items</th>
								<th>Teacher</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								<?php
								$where = '';

								$qry = $conn->query("SELECT q.*,u.name as fname from quiz_list q left join users u on q.user_id = u.id ".$where." order by q.title asc ");
								$i = 1;
								if($qry->num_rows > 0):
									while($row= $qry->fetch_assoc()):
										$items = $conn->query("SELECT count(id) as item_count from questions where qid = '".$row['id']."' ")->fetch_array()['item_count'];
								?>
								<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $row['title'] ?></td>
									<td><?php echo $items ?></td>
									<td class="text-center">
										<a class="btn btn-sm btn-outline-primary edit_quiz" href="index.php?page=quiz_view&id=<?php echo $row['id'] ?>" >Manage</a>
										<button class="btn btn-sm btn-outline-primary edit_quiz" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_quiz" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>

</div>
<style>

	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$('table').dataTable()
	$('#new_quiz').click(function(){
		uni_modal("New Quiz","manage_quiz.php")
	})

	$('.edit_quiz').click(function(){
		uni_modal("Edit Quiz","manage_quiz.php?id="+$(this).attr('data-id'))

	})
	$('.delete_quiz').click(function(){
		_conf("Are you sure to delete this quiz?","delete_quiz",[$(this).attr('data-id')])
	})

	function delete_quiz($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_quiz',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
