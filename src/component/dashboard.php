<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel = "stylesheet" href = "../../node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel = "stylesheet" href = "../../node_modules/sweetalert2/dist/sweetalert2.min.css" />    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel = "stylesheet" href = "dashboard.css">
<title>Admin || SIS</title>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    width:100%;
    height: 100vh;
  }
  .profile-container{
    padding: 12px 4px;
  }
  .profile{
    padding: 4px;
    width: 64px;
    height:64px;
  }
.menu-container{
  padding: 12px 4px;
}
</style>
  </head>
  <body>
    <!-- admin dashboard -->
    <div class = "container-fluid">

      <div class = "row vh-100">
        <!-- sidebar section -->
        <div class = "col-xl-2" style = "background-color:#3d3c3c;">
          <div class = "profile-container d-flex flex-row align-items-center mx-auto">
            <img class = "profile" src = "../../assets/avatar-female.png" alt = "temporary profile">
            <div class = "d-flex flex-column m-0">
              <h5 class = "m-0 font-medium " style = "letter-spacing: -1px;  font-size: 18px; font-family: helvetica; color: #f6f5f5;">Admin@gmail.com</h5>
              <h6 class = "m-0 font-medium" style = "letter-spacing: -1px; font-size: 16px; font-family: helvetica; color: #f6f5f5;">Admin</h6>
            </div>
          </div>

          <div class = "menu-container">
            <ul class = "nav flex-column align-items-start">
              <li class = "nav-item py-2 px-1 font-medium" style = "color: #d1d0d0; font-family:Helvetica; font-size: 18px;">Menu</i>
              <li class = "nav-item">
                <a class = "nav-link link-secondary-subtle active py-1 px-2" href = "/"style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Dashboard</a>
              </li>
              <li class = "nav-item">
              <a class="nav-link link-secondary-subtle active py-1 px-2 font-medium" data-bs-toggle="collapse" href="#Student" role="button" aria-expanded="false" aria-controls="student"style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Student</a>

              <div class = "collapse" id = "Student">
                <ul class = "list-group">
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                </ul>
              </div>
              </li>

              <li class = "nav-item">
              <a class="nav-link link-secondary-subtle active py-1 px-2 font-medium" data-bs-toggle="collapse" href="#teacher" role="button" aria-expanded="false" aria-controls="teacher" style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Teacher</a>

              <div class = "collapse" id = "teacher">
                <ul class = "list-group">
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                </ul>
              </div>
              </li>

              <li class = "nav-item">
              <a class="nav-link link-secondary-subtle active py-1 px-2 font-medium" data-bs-toggle="collapse" href="#course" role="button" aria-expanded="false" aria-controls="course" style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Course's</a>

              <div class = "collapse" id = "course">
                <ul class = "list-group">
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                </ul>
              </div>
              </li>

              <li class = "nav-item">
              <a class="nav-link link-secondary-subtle active py-1 px-2 font-medium" data-bs-toggle="collapse" href="#attend" role="button" aria-expanded="false" aria-controls="attend" style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Attendance</a>

              <div class = "collapse" id = "attend">
                <ul class = "list-group">
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                </ul>
              </div>
              </li>

              <li class = "nav-item">
              <a class="nav-link link-secondary-subtle active py-1 px-2 font-medium" data-bs-toggle="collapse" href="#grade" role="button" aria-expanded="false" aria-controls="grade" style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Grades</a>

              <div class = "collapse" id = "grade">
                <ul class = "list-group">
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                </ul>
              </div>
              </li>

              <li class = "nav-item">
              <a class="nav-link link-secondary-subtle active py-1 px-2 font-medium" data-bs-toggle="collapse" href="#event" role="button" aria-expanded="false" aria-controls="event" style = "color: #f6f5f5; font-family:Helvetica; font-size: 20px;">Events</a>

              <div class = "collapse" id = "event">
                <ul class = "list-group">
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                  <li class = "list-group-item">home</li>
                </ul>
              </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- main content section -->
        <div class = "col-xl-10 bg-primary">
          <h1>hello</h1>
        </div>
      </div>
    </div>
                

      <script type = "text/javascript" src = "./toggle-light.js"></script>
    <script src = '../../node_modules/sweetalert2/dist/sweetalert2.min.js'></script>
    <script src= "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<!-- <script type ="text/javascript">
              document.addEventListener('DOMContentLoaded', function() {
            var xhr = new XMLHttpRequest();
            var url = './admincomponent/admin.php'; // Path to your PHP file

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById('maindashboard').innerHTML = xhr.responseText;
                    } else {
                        console.error('Error fetching data:', xhr.status);
                    }
                }
            };

            xhr.open('GET', url, true);
            xhr.send();
        });
            </script> -->