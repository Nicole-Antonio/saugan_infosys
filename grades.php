<?php

include "connect.php";

?>

<!DOCTYPE html>
<tml>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <title>Grades</title>
  <link rel="stylesheet" type="text/css" href="sidebarother.css">
  <link rel="stylesheet" type="text/css" href="homepageother.css">
  <link rel="stylesheet" type="text/css" href="classroom.css">
</head>
<body>




<section class="headerhome">

	<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" id="hamburger"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
		  
	<a href="teacherhome.php" class="linkhome" id="linkhome">Saugan Elementary School</a>

</section>
		
		<div class="container">
        <div class ="card my-3">
             <h2>Grades</h2>
        </div>
        <div class ="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img src="images/quiz.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Quizzes</h5>
                    <p class="card-text">Click here to see your students' performance in their quizzes</p>
                    <a href="quizzes.php" class="btn btn-primary">View</a>
                  </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img src="images/test.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tests</h5>
                    <p class="card-text">Click here to see your students' performance in their tests</p>
                    <a href="tests.php" class="btn btn-primary">View</a>
                  </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <img src="images/report-card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Progress Report</h5>
                    <p class="card-text">Click here to see your students' overall academic performance</p>
                    <a href="student-list.php" class="btn btn-primary">View</a>
                  </div>
              </div>
            </div>
        </div>
      </div>

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


<script src="sidebar.js"></script>
</body>

</html>