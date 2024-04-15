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
  :root{
    --font-style: 'Poppins', sans-serif;
    --other-font: 'Roboto'. sans-serif;
    --primary-100:#1F3A5F; /*main-primary*/
    --primary-200:#4d648d;
    --primary-300:#acc2ef;
    --accent-100:#3D5A80;/* accent */
    --accent-200:#cee8ff;
    --text-100:#FFFFFF;
    --text-200:#e0e0e0;
    --bg-100:#0F1C2E; /*main background */
    --bg-200:#1f2b3e;
    --bg-300:#374357;
}
#sidecontent{
    height: 100vh;
}
#title-text{
    font-weight: 500;
    color: var(--text-100);
}
.logo{
    width:50px;
    height:50px;
}
#crumb-dash::after {
    content: '>'; /* Define the content for the divider */
    margin: 0 5px; /* Adjust the spacing around the divider */
    color: #555; /* Color of the divider */
}

</style>
  </head>
  <body>
    <!-- admin dashboard -->
      <div class = "container-fluid d-flex flex-xl-column ">
        <!-- sidebar & dashboard container -->
        <div class = "row px-0">
            <div id = "sidecontent" class = " col-xl-2 bg-dark p-0 d-flex flex-column justify-content-between overflow-y-auto"> 
            <!-- logo section -->
              <div class = "logo-container p-4 border-bottom border-bottom-1 d-flex align-items-center w-100">
                <h1 id="title-text" class = "text-light display-5">SIS</h1>
              </div>
             
              <div class = "menu-container p-3 mb-5">
                <ul class = "menu">
                <li class="item py-2">
                  <a class="sidebars text-white align-items-center" href="#">
                    <i class="bi bi-speedometer fs-6"></i>
                       Dashboard
                    </a>
                </li>


                <li class="item py-2" data-bs-toggle="collapse" data-bs-target="#collapse-student" aria-expanded="false" aria-controls="collapse-student">
                    <a class="sidebars text-white" href="#">
                        <i class="bi bi-backpack2 fs-6"></i>
                        Student
                    </a>
                    <div class="collapse py-2" id="collapse-student">
                        <ul class="drop-list">
                            <li><a href="#">Add Student</a></li>
                            <li><a href="#">Student List</a></li>
                        </ul>
                    </div>
                </li>

            <li class="item py-2" data-bs-toggle="collapse" data-bs-target="#collapse-course" aria-expanded="false" aria-controls="collapse-course">
                <a class="sidebars text-white" href="#">
                    <i class="bi bi-book-half fs-6"></i>
                    Course
                </a>
                <div class="collapse py-2" id="collapse-course">
                    <ul class="drop-list">
                        <li><a href="#">Dropdown Item 1</a></li>
                        <li><a href="#">Dropdown Item 2</a></li>
                        <li><a href="#">Dropdown Item 3</a></li>
                    </ul>
                </div>
            </li>

              <li class="item py-2" data-bs-toggle="collapse" data-bs-target="#collapse-attendance" aria-expanded="false" aria-controls="collapse-attendance">
                  <a class="sidebars text-white" href="#">
                      <i class="bi bi-person-badge fs-6"></i>
                      Attendance
                  </a>
                  <div class="collapse py-2" id="collapse-attendance">
                      <ul class="drop-list">
                          <li><a href="#">Dropdown Item 1</a></li>
                          <li><a href="#">Dropdown Item 2</a></li>
                          <li><a href="#">Dropdown Item 3</a></li>
                      </ul>
                  </div>
              </li>

              <li class="item py-2" data-bs-toggle="collapse" data-bs-target="#collapse-grades" aria-expanded="false" aria-controls="collapse-grades">
                  <a class="sidebars text-white" href="#">
                      <i class="bi bi-mortarboard fs-6"></i>
                      Grades
                  </a>
                  <div class="collapse py-2" id="collapse-grades">
                      <ul class="drop-list">
                          <li><a href="#">Dropdown Item 1</a></li>
                          <li><a href="#">Dropdown Item 2</a></li>
                          <li><a href="#">Dropdown Item 3</a></li>
                      </ul>
                  </div>
              </li>

                </ul>
              </div>
              
              <div class = "logout-container mx-2 mt-1 p-2">
                <button id = "logout" type = "submit" name = "submit" class = "btn btn-md btn-none text-white fs-5">
                <i class="bi bi-box-arrow-in-left fs-6"></i>
                Logout
                </button>
              </div>
            </div>

            <div id = "dash-content" class = "col-xl-10 bg-light-subtle">
              <nav class = "navbar navbar-expand-xl bg-light mt-1 border-bottom border-bottom-1 border-bottom-primary shadow-md">
                  <div class = "container-fluid py-1 d-flex flex-row justify-content-between align-items-center">
                    <!-- menu icon -->
                    <button type = "submit" id = "menu" class = "btn btn-sm btn-none rounded-circle ">
                    <i class="bi bi-list fs-4 text-dark"></i>
                    </button>
                    <!-- search function -->
                    <form class="d-flex flex-row align-items-center">
                        <div class="input-group">
                          <input type="search" class="form-control form-control-sm rounded-3 me-2" aria-label="search" placeholder = "search..."style ="width: 20rem;">
                            <button type="button" class="btn btn-sm btn-dark rounded-circle d-flex flex-row me-1">
                          <i class="bi bi-search mx-auto"></i>
                             </button>
                          </div>
                      </form>
                    <!-- setting, notif, dark and light -->
                    <div class = "d-flex flex-row align-content-center">
                      <div class = "btn-group me-2">
                        <button type = "button" id = "light" class = "btn btn-none px-2 py-1 me-1">
                        <i class="bi bi-brightness-high-fill  fs-5"></i>
                        </button>
                        <button type = "button" id = "dark" class = "btn btn-none px-2 py-1 disabled border border-0">
                        <i class="bi bi-moon-stars-fill fs-5"></i>
                        </button>

                      </div>
                      <button class = "btn btn-none px-2 py-1 me-1">
                      <i class="bi bi-bell-fill fs-5"></i>
                      </button>
                      <button class = "btn btn-none px-2 py-1 me-1">
                      <i class="bi bi-gear-fill fs-5"></i>
                      </button>
                    </div>
                  </div>
              </nav>
              <!-- analytics section -->
            <div id = "maindash" class = "container py-4">
                <div class = "d-flex flex-row justify-content-between align-items-center">
                  <h1 class = "fs-4 font-lighter ms-3 pb-4" style = "font-family: var(--font-style); color: var(--bg-100);" >Admin Dashboard</h1>

                </div>
            
                <div class = "row d-flex justify-content-center">
                  <div class = "col-xl-3  me-3" style = "width: 250px;">
                      <div id = "card-1"class = "card rounded-1 border-0">
                        <div class = "card-body d-flex flex-row justify-content-around align-items-center" style = "border-left: 6px solid #fc4d47;">
                          <div id = "seperate">
                          <h5 class = "card-title" style= "font-family: var(--font-style);">Students</h5>

                          <h5 class = "card-subtitle" style= "font-family: var(--font-style);">00</h5>
                          
                              </div>

                          <i class="bi bi-people-fill text-white fs-4 bg-danger px-2 py-1 rounded-circle shadow-lg"></i>
                          </div>
                        </div>
                  </div>

                  <div class = "col-xl-3 me-3" style = "width: 250px;">
                      <div id = "card-1" class = "card rounded-1 border-0">
                        <div class = "card-body d-flex flex-row justify-content-around align-items-center" style = "border-left: 6px solid #f7ea3a;">
                          <div id = "seperate">
                          <h5 class = "card-title" style= "font-family: var(--font-style);">Teachers</h5>

                          <h5 class = "card-subtitle" style= "font-family: var(--font-style);">00</h5>
                              </div>

                          <i class="bi bi-people-fill text-white fs-4 bg-warning px-2 py-1 rounded-circle shadow-lg"></i>
                        </div>
                      </div>
                  </div>

                  <div class = "col-xl-3  me-3" style = "width: 250px;">
                      <div id = "card-1"class = "card rounded-1 border-0">
                        <div class = "card-body d-flex flex-row justify-content-around align-items-center" style = "border-left: 6px solid #3a76f7;">
                          <div id = "seperate">
                          <h5 class = "card-title" style= "font-family: var(--font-style);">Courses</h5>

                          <h5 class = "card-subtitle" style= "font-family: var(--font-style);">00</h5>
                              </div>

                              <i class="bi bi-book-fill text-white fs-4 bg-primary px-2 py-1 rounded-circle shadow-lg"></i>
                        </div>
                      </div>
                  </div>

                  <div class = "col-xl-3 me-3" style = "width: 250px;">
                      <div id = "card-1" class = "card rounded-1 border-0">
                        <div class = "card-body d-flex flex-row justify-content-around align-items-center" style = "border-left: 6px solid #3af74a;">
                          <div id = "seperate">
                          <h5 class = "card-title" style= "font-family: var(--font-style);">Events</h5>

                          <h5 class = "card-subtitle" style= "font-family: var(--font-style);">00</h5>
                              </div>

                              <i class="bi bi-calendar2-week-fill text-white fs-4 bg-success px-2 py-1 rounded-circle shadow-lg"></i>
                        </div>
                      </div>
                  </div>

                </div>
                <div class = "row">

                </div>
            </div>
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