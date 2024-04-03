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
<link rel = "stylesheet" href = "dashboard.css">
<title>Login || SIS</title>
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

</style>
  </head>
  <body>
    <!-- admin dashboard -->
      <div class = "container-fluid d-flex flex-xl-column ">
        <!-- sidebar & dashboard container -->
        <div class = "row px-0">
            <div class = "col-xl-2 bg-dark p-0 d-flex flex-column justify-content-between" style = "height: 100vh;"> 
            <!-- logo section -->
              <div class = "logo-container p-4 border-bottom border-bottom-1">
                <img src = "../../assets/cicslogo.jpg" alt = "cics logo" class = "logo rounded-circle">
                <h1 id="title-text" class = "fs-1">CICS</h1>
              </div>
             
              <div class = "menu-container p-3 mb-5">
                <ul class = "menu">
                    <li class = "item">
                    <a class = "sidebars" href = "/">
                    <i class="bi bi-speedometer"></i>
                    <span>Dashboard</span>
                    </a>
                    </li>

                    <li class = "item">
                    <a class = "sidebars" href = "/">
                    <i class="bi bi-backpack2"></i>
                    <span>Student</span>
                    </a>
                    </li>

                    <li class = "item">
                    <a class = "sidebars" href = "/">
                    <i class="bi bi-book-half"></i>
                    <span>Course</span>
                    </a>
                    </li>

                    <li class = "item">
                    <a class = "sidebars" href = "/">
                    <i class="bi bi-person-badge"></i>
                    <span>Attendance</span>
                    </a>
                    </li>

                    <li class = "item">
                    <a class = "sidebars" href = "/">
                    <i class="bi bi-mortarboard"></i>
                    <span>Grades</span>
                    </a>
                    </li>
                </ul>
              </div>
              
              <div class = "logout-container mx-2 mt-1 p-2">
                <button type = "submit" name = "submit" class = "btn btn-md btn-none text-white fs-4">
                <i class="bi bi-box-arrow-in-left"></i>
                Logout
                </button>
              </div>
            </div>

            <div class = "col-xl-10 bg-light">
              <nav class = "navbar navbar-expand-xl bg-secondary-subtle mt-1">
                  <div class = "container-fluid">
                    <button type = "submit" id = "menu" class = "btn btn-sm btn-none">
                    <i class="bi bi-list fs-2 text-primary"></i>
                    </button>

                    <form>
                      <input type = "search">
                    </form>
                  </div>
              </nav>
            <div id = "maindash" class = "container p-1">
                <div class = "row">
                  <div class = "col-xl-3 shadow-md">
                      <div class = "card ">
                        <div class = "card-body d-flex flex-row justify-content-between align-items-center" style = "border-left: 6px solid #fc4d47;">
                          <div id = "seperate">
                          <h4 class = "card-title" style= "font-family: var(--font-style);">Students</h4>

                          <h4 class = "card-subtitle" style= "font-family: var(--font-style);">00</h4>
                              </div>

                          <i class="bi bi-people-fill display-4"></i>
                        </div>
                      </div>
                  </div>

                  <div class = "col-xl-3">
                  <div class = "card ">
                        <div class = "card-body d-flex flex-row justify-content-between align-items-center" style = "border-left: 6px solid #fc4d47;">
                          <div id = "seperate">
                          <h4 class = "card-title" style= "font-family: var(--font-style);">Students</h4>

                          <h4 class = "card-subtitle" style= "font-family: var(--font-style);">00</h4>
                              </div>

                          <i class="bi bi-people-fill display-4"></i>
                        </div>
                      </div>
                  </div>

                  <div class = "col-xl-3">
                  <div class = "card ">
                        <div class = "card-body d-flex flex-row justify-content-between align-items-center" style = "border-left: 6px solid #fc4d47;">
                          <div id = "seperate">
                          <h4 class = "card-title" style= "font-family: var(--font-style);">Students</h4>

                          <h4 class = "card-subtitle" style= "font-family: var(--font-style);">00</h4>
                              </div>

                          <i class="bi bi-people-fill display-4"></i>
                        </div>
                      </div>
                  </div>

                  <div class = "col-xl-3">
                  <div class = "card ">
                        <div class = "card-body d-flex flex-row justify-content-between align-items-center" style = "border-left: 6px solid #fc4d47;">
                          <div id = "seperate">
                          <h4 class = "card-title" style= "font-family: var(--font-style);">Students</h4>

                          <h4 class = "card-subtitle" style= "font-family: var(--font-style);">00</h4>
                              </div>

                          <i class="bi bi-people-fill display-4"></i>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
         </div>
         </div>
      </div>
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