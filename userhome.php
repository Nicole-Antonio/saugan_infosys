<?php
session_start();

if(!isset($_SESSION["username"]))
{
  header("location:index.php");
}

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="addt.css">
    <link rel="stylesheet" href="sidebar.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
  </head>
  <body>
    <main>

     <!----------------HOMEPAGE------------------->

<section class="headerhome">

<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" id="hamburger"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" /></svg>
  
  <a href="userhome.php" class="linkhome" id="linkhome">Saugan Elementary School</a>

  <div class="text-box">
    <h1> <?php echo "Welcome back, ".$_SESSION["username"]; echo "!"; ?></h1>
    <p>Have a look around to see what you've missed</p>
  </div>

</section>

</section>

<section class="description">
    <h1>Saugan Elementary School</h1>
    <p>A small yet proud elementary school located in Barangay Saugan, Oras, Eastern Samar.</p>
    <br><br>
    <h1>Core Values</h1>
    <p>Maka-Diyos<br>Makatao<br>Makakalikasan<br>Makabansa</p>

  
</section>

<section class="events">
  <h1>Events</h1>
  <p>Here are some of the lively and enjoyable events the school holds every years</p>
  <br>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img_1347.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Buwan ng Wika</h5>
        <p>Celebrated in the month of August</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/intrams.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Intramurals</h5>
        <p>A fun and festive week-long event for children who love sports</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/nutrition.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nutrition Month</h5>
        <p>Celebrated in the month of July </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<section class="mvision">
      <h1>Mission</h1>
      <p>To protect and promote the right of every Filipino to quality, equitable, culture-based and complete basic education where students learn in a child-friendly, gender-sensitive, safe and motivating environment, teachers facilitate learning and constantly nurture every learner, administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen, family, community and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>
      <br><br>
      <h1>Vision</h1>
      <p>We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contibute meaningfully to building the nation as a learner-centered public institution, the Department of Education continously improves itself to better serve its stakeholders.</p>
</section>


<section class="facilities">
    <h1>Onsite Facilities</h1>
    <p>These are the school's facilities in response to the ongoing COVID-19 Pandemic.</p>


    <div class="new-sec">
      <div class="facilities-col">
         <img src="images/barrier.jpg">
         <div class="layer-col">
           <h3>Plastic Barrier</h3>
         </div>
      </div>
      <div class="facilities-col">
         <img src="images/distancing.jpg">
         <div class="layer-col">
           <h3>Distancing</h3>
         </div>
      </div>
       <div class="facilities-col">
         <img src="images/sanitizing.jpg">
         <div class="layer-col">
           <h3>Sanitizing Station</h3>
         </div>
      </div>
    </div>

</section>

<section style="text-align: center; width: 80%; margin: auto; padding-top: 100px;">
  <h1>What our Students Say</h1>
    <p>*Lorem ipsum dolor sit amet, consectetur adipisicing elit*</p>
    <div  style="flex-basis: 44%; border-radius: 10px; margin-bottom: 5%; text-align: left; background: #e3edff; padding: 25px; cursor: pointer; display: flex;">
      <div style="text-align: center;">
        <img src="images/joshua.jpg" style="height: 40px; margin-left: 5px; margin-right: 30px; border-radius: 50%;">
        <div>
          <h3 style="margin-top: 15px; text-align: center;">Joshua Habla</h3>
          <p style="padding: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>

          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
        </div>
      </div>
    </div>

    <div style="flex-basis: 44%; border-radius: 10px; margin-bottom: 5%; text-align: left; background: #e3edff; padding: 25px; cursor: pointer; display: flex;">
      <div style="text-align: center;">
        <img src="images/nicole.jpg" style="height: 40px; margin-left: 5px; margin-right: 30px; border-radius: 50%;">
        <div>
          <h3 style="margin-top: 15px; text-align: center;">Ma. Nicole G. Antonio</h3>
          <p style="padding: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
          <span class="material-icons-outlined" style="color: orange;">star_rate</span>
        </div>
      </div>
    </div>

</section>

  <section style="margin: 100px auto; width: 80%; background: linear-gradient(90deg, #29ffe2, #3782fa); background-position: center; background-size: cover; border-radius: 10px; text-align: center; padding: 100px 0;">
    <h1 style="color: #fff; margin-bottom: 40px; padding: 0;">Enroll For Our Various Courses<br>Anywhere From The World</h1>
    <a href="contact_us.php" class="hero-btn">Contact Us</a>
  </section>






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
        
        <a href="userhome.php" class="sidebar-item">
          <svg
            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" fill="#fff"> <path d="M0 0h24v24H0z" fill="none" /> <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" /></svg>
          <div>Home</div>
        </a>
        <a href="submitassignment.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg>
            <div>My Subjects</div>
          </a>
          <a href="myclassroom.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg>
            <div>My Classroom</div>
          </a>
          <a href="profilepage_user.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
            <div>My Profile</div>
          </a>
          <a href="school_faculty.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
            <div>Faculty</div>
        </a>
          <a href="contact_us.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>  
            <div>Contact Us</div>
          </a>
          <a href="logout.php" class="sidebar-item">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#fff"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
            <div>Log Out</div>
          </a>
        </div>
    </main>
    <script src="sidebar.js"></script>
  </body>
   <footer>
  <p class="text-center">Made by Group 2 BSIT-3A</p>
</footer>
</html>