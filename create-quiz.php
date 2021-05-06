<!DOCTYPE html>
<html>
<head>
	<title>Quiz Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>

	<?php include_once "db.php"; //include_once "navbar.php";  ?>

		<form method='POST' action='create-quiz-handle.php' enctype='multipart/form-data'>
			<table class="CreateQuiz" style="border-radius: 1em;">
				<tr>
					<th><br><h4>Name Your Quiz!</h4></th>
				</tr>
				<tr>
					<td><input type='text' class="btnon" name='inputname' placeholder="Input quiz Name: " required> </td>
				</tr>

				<tr>
					<th><br><h4>Question:</h4></th>
				</tr>
				<tr>
					<!---Create Question Name--->
					<td><input class='btnon' type='text' name='questionName' placeholder="Input Question Name: " required></td>
				</tr>
				<tr>
					<!---Create Question Answer--->
					<td><br><input class='btnon' type='text' name='answer' placeholder="Input Question Answer: " required></td>
				</tr>
				<tr>
					<!---Create Question Choice--->
					<td><br><input class='btnon' type='text' name='choice1' placeholder="Choice 1: " required></td>
				</tr>
				<tr>
					<!---Create Question Choice--->
					<td><br><input class='btnon' type='text' name='choice2' placeholder="Choice 2: " required></td>
				</tr>
				<tr>
						<td colspan="2">
							<br><input type="submit" value="submit">
						</td>
				</tr>
						<tr>
								<td><br><a href="main.php" class="main">Go back</a></td>
						</tr>
			</table>
		</form>
		</div>
	</div>

	<div class="container">
                <br />
                <br />
                <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2>
                <div class="form-group">
                     <form name="add_name" id="add_name">
                          <div class="table-responsive">
                               <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                         <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                    </tr>
                               </table>
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                          </div>
                     </form>
                </div>
           </div>

</body>
	<?php include_once "footerr.php"; ?>
</html>
<script>
 $(document).ready(function(){
      var i=1;
      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });
      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });
      $('#submit').click(function(){
           $.ajax({
                url:"name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                     alert(data);
                     $('#add_name')[0].reset();
                }
           });
      });
 });
 </script>
