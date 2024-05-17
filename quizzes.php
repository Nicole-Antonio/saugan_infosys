<?php

session_start();
include "connect.php";
 
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="sidebarother.css">
	<link rel="stylesheet" type="text/css" href="homepageother.css">
	<title>Quizzes</title>
</head>
<body>


 

<section class="headerhome">

		<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" id="hamburger"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
		  
		<a href="teacherhome.php" class="linkhome" id="linkhome">Saugan Elementary School</a>

</section>

<!-- ADD DATA Modal -->
<div class="modal fade" id="studentimportmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Grade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="quizzesupload.php" method="POST" enctype="multipart/form-data">

      <div class="modal-body">
				<input type="file" name="import_file" class="form-control">
				</input>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Save data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- EXPORT DATA Modal -->
<div class="modal fade" id="studentexportmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Export Grade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="quizzesupload.php" method="POST" enctype="multipart/form-data">

      <div class="modal-body">
			<select name="export_file_type" id="" class="form-control">
                <option value ="xlsx">XLSX</option>
                <option value ="csv">CSV</option>
                <option value ="xls">XLS</option>
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="export_excel_btn" class="btn btn-primary">Export</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--DELETE DATA Modal-->	

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Grade</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>

                <form action="deletequizzes.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h6>Are you sure you want to delete this data?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="deletedata" class="btn btn-primary">Yes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<!----###################################################################################--->

	<div class="container">
		<div class ="jumbotron">
			<div class="card my-3">
				<?php
				if (isset($_SESSION['status'])) 
				{
					?>
					<div class="alert alert-success" role="alert">
  				<strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
					</div>
					<?php
					
					unset($_SESSION['status']);
				}

				?>
				<h2>Quizzes</h2>
			</div>
			<div class="card">
				<div class="card-body">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentimportmodal">
  					Import File
					</button>
					<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentexportmodal">
  					Export File
					</button>
				</div>
			</div>



				<div class="card">
					<div class="card-body">

					<?php
						$query = "SELECT * from `quizzes`";
						$query_run = mysqli_query($con,$query);
					?>

					<div class ="table-responsive col-lg-12">	
						<table class="table table-bordered">
							  <thead>
							    <tr>
							      <th scope="col">ID</th>
							      <th scope="col">Student ID</th>
							      <th scope="col">Subject</th>
							      <th scope="col">Score</th>
							      <th scope="col">No. of Items</th>
							      <th scope="col">Date</th>
							      <th scope="col">Quiz No.</th>
							    </tr>
							  </thead>

					<?php
					if ($query_run)
					{
						foreach ($query_run as $row) 
					{
					?>

							  <tbody>
							    <tr>
							      <td><?php echo $row['id']; ?></td>
							      <td><?php echo $row['stud_id']; ?></td>
							      <td><?php echo $row['subject']; ?></td>
							      <td><?php echo $row['score']; ?></td>
							      <td><?php echo $row['items']; ?></td>
							      <td><?php echo $row['dateposted']; ?></td>
							      <td><?php echo $row['quiz_no']; ?></td>
							    </tr>
							  </tbody>
							  
					<?php
							}	
						}
						else{
						echo "Data does not exist";
						}
					?>

							</table>
						</div>	
					
					</div>
				</div>

		</div>
	</div>

<br><br>

<!----------------SIDEBAR-------------------> 

      <div id="overlay"></div>
      <div id="sidebar">
        <div class="top">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
                <h2>S.E.S.I.S</h2>
            </div>
        </div>    
        
        <a href="teacherhome.php" class="sidebar-item">
          <svg
            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" fill="#fff"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" /></svg>
          <div>Home</div>
        </a>
        <a href="mystudents.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
            <div>Students</div>
        </a>
        <a href="subjects.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg>
            <div>Subjects</div>
          </a>
          <a href="classroom.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
            <div>Classroom</div>
          </a>
          <a href="grades.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <div>Grades</div>
          </a>
          <a href="profilepage_teacher.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
            <div>My Profile</div>
          </a>
        <a href="schoolfaculty.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
            <div>Faculty</div>
        </a>
          </a>
          <a href="contact-us.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>  
            <div>Contact Us</div>
          </a>
          <a href="logout.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
            <div>Log Out</div>
          </a>
        </div>

<!--JAVASCRIPT-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="sidebar.js"></script>
	

<!--DELETE BUTTON-->

	<script>
		$(document).ready(function() {
			$('.deletebtn').on('click',function()
			{
				$('#deletemodal').modal('show');

				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function()
				{
					return $(this).text();	
				}).get();

				console.log(data);

				$('#delete_id').val(data[0]);
			
			});
		});
	</script>

<!--EDIT BUTTON-->

	<script>
		$(document).ready(function() {
			$('.editbtn').on('click',function()
			{
				$('#editmodal').modal('show');

				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function()
				{
					return $(this).text();	
				}).get();

				console.log(data);

				$('#update_id').val(data[0]);
				$('#stud_id').val(data[1]);
				$('#subject').val(data[2]);
				$('#score').val(data[3]);
				$('#items').val(data[4]);
				$('#dateposted').val(data[5]);
				$('#quiz_no').val(data[6]);

			});
		});
	</script>
</body>

</html>