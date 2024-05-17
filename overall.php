<?php

session_start(); 
include "connect.php";

?>

<!DOCTYPE html>
<tml>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="sidebarother.css">
	<link rel="stylesheet" type="text/css" href="homepageother.css">
	<title>Report Card</title>
</head>
<body>




<section class="headerhome">

		<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" id="hamburger"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
		  
		<a href="adminhome.php" class="linkhome" id="linkhome">Saugan Elementary School</a>

</section>

<!--ADD DATA Modal-->
<div class="modal fade" id="studentimportmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Grades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="addoverall.php" method="POST" enctype="multipart/form-data">

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

      <form action="addoverall.php" method="POST" enctype="multipart/form-data">

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
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>

                <form action="deleteoverall.php" method="POST">

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
				<h2>Overall</h2>
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
						$query = "SELECT * FROM `overall`";
						$query_run = mysqli_query($con,$query);
					?>

					<div class ="table-responsive col-lg-12">	<table id="datatableid" class="table table-bordered">
							  <thead>
							    <tr>
							      <th scope="col">Subject</th>
							      <th scope="col">1st Quarter</th>
							      <th scope="col">2nd Quarter</th>
							      <th scope="col">3rd Quarter</th>
							      <th scope="col">4th Quarter</th>
							      <th scope="col">Final Grade</th>
							      <th scope="col">Remarks</th>
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
							      <td><?php echo $row['subject']; ?></td>
							      <td><?php echo $row['first_qtr']; ?></td>
							      <td><?php echo $row['second_qtr']; ?></td>
							      <td><?php echo $row['third_qtr']; ?></td>
							      <td><?php echo $row['fourth_qtr']; ?></td>
							      <td><?php echo $row['final_grade']; ?></td>
							      <td><?php echo $row['remarks']; ?></td>
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
        
        <a href="adminhome.php" class="sidebar-item">
          <svg
            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" fill="#fff"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" /></svg>
          <div>Home</div>
        </a>
        <a href="students.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
            <div>Students</div>
        </a>
        <a href="teachers.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
            <div>Teachers</div>
        </a>
        <a href="subjectmanagement.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg>
            <div>Subjects</div>
          </a>
          <a href="classrooms.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
            <div>Classrooms</div>
          </a>
          <a href="allgrades.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <div>Grades</div>
          </a>
          <a href="profilepage_admin.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
            <div>My Profile</div>
          </a>
          <a href="faculty.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><rect fill="none" height="24" width="24"/><g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/></g></svg>
            <div>Faculty</div>
        </a>
          <a href="accounts.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path clip-rule="evenodd" d="M0 0h24v24H0z" fill="none"/><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/></svg>
            <div>Accounts</div>
          </a>
          <a href="contactus.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>  
            <div>Contact Us</div>
          </a>
          <a href="logout.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
            <div>Log Out</div>
          </a>
        </div>
    </main>


<!--JAVASCRIPT-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
				$('#subject').val(data[1]);
				$('#first_qtr').val(data[2]);
				$('#second_qtr').val(data[3]);
				$('#third_qtr').val(data[4]);
				$('#fourth_qtr').val(data[5]);
				$('#gradelvl').val(data[6]);
				$('#gradelvl').val(data[7]);

			});
		});
	</script>
</body>

</html>