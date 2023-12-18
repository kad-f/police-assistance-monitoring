<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sidebar</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">PAMS</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        <h3>Police Assistance Monitoring</h3>
                    </li>
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Call Logs
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="addcaller.php" class="sidebar-link">Add Caller</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="callerinfo.php" class="sidebar-link">Caller Info</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard"
                            aria-expanded="false" aria-controls="dashboard">
                            <i class="fa-solid fa-book pe-2"></i>
                            Incident Details
                        </a>
                        <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="addreport.php" class="sidebar-link">Add Report</a>
                            </li>
                        </ul>
                        <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="reports.php" class="sidebar-link">Reports</a>
                            </li>
                        </ul>
                        <li a class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                            Log Out
                        </a>
                    </li>
                    </li>
                   
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1>Add Reports</h1>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">

                    <form action="sample.php" method="post">

                <div class="container">
                <br>
                <div class="row g-2">
  
  <div class="col">
    <input type="text" class="form-control" placeholder="Type of Report" name="report">
  </div>
</div>
<br>
<div class="row g-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Location" name="location">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Status" name="status">
  </div>
</div>
<br>
<div class="row g-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Officer incharge" name="officer">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Badge No." name="badge">
  </div>
</div>
<br>
<div class="row g-2">
  <div class="col">
    <input type="date" class="form-control" placeholder="" name="date">
  </div>
  </div>         
                <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    
                    <th scope="col">Type of Reports</th>
                    <th scope="col">Location</th>
                    <th scope="col">Status</th>
                    <th scope="col">Officer Incharge</th>
                    <th scope="col">Badge No.</th>
                    <th scope="col">Date.</th>
                    </tr>
                </thead>
               
                </table>
                <input class="btn btn-outline-success" type="submit" name="create" value="Add Caller">
             
               
                </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>