<?php
     include("db.php");
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="diamond.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <style>
  .left-sidebar {
  position: absolute;
  width: 250px;
  height: 100%;
  top: 0px;
  z-index: 10;
  padding-top: 64px;
  background: #fff;
  -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
}
  </style>




</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper">
        
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <h6>Complain Management </h6>
                            
                            
                        </span>
                        
                    </a>
                    
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                   
                    <ul class="navbar-nav float-right">
                        
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"> Logout</a>
                               
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-45">
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard" ></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="requirement.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Requirements</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="complain.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Complain Status</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Change Password</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="status.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Work Category</span></a></li>
                        
                    </ul>
                      
                </nav>
            </div>
        </aside>
   
  
       
        <div class="page-wrapper">
           
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Welcome Principal</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                            <!-- Button trigger modal -->
                        
                        </div>
                    </div>
                </div>
              </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="bi bi-person-fill"></i></h1>
                                <h6 class="text-white">NAME</h6>
                                <h6 class="text-white">MURUGAN B.S</h6>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6  col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">ROLE</h6>
                                <h6 class="text-white">PRINCIPAL</h6>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4  col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="bi bi-calendar-event"></i></h1>
                                <h6 class="text-white">DOB</h6>
                                <h6 class="text-white"></h6>
                            </div>
                        </div>
                    </div>


               
                
                    <div class="container">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-4 col-sm-12">
                              <div class="diamond-container">
                                <div class="border-animation"></div>
                                <div class="diamond" style="background-color: #f563fe ;">
                                  <div>
                                    <h5 class="text-white">Total Complaints</h5>
                                    <h5 class="text-white"><span id="complainCount"></span></h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                              <div class="diamond-container">
                                <div class="border-animation"></div>
                                <div class="diamond" style="background-color: #28df49;">
                                  <div>
                                    <h5 class="text-white">Completed</h5>
                                    <h5 class="text-white"><span id="completedCount"></span></h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                              <div class="diamond-container">
                                <div class="border-animation"></div>
                                <div class="diamond" style="background-color: #ecc908;">
                                  <div>
                                    <h5 class="text-white">In Progress</h5>
                                    <h5 class="text-white"><span id="inprogresscount"></span></h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4 col-sm-12">
                              <div class="diamond-container">
                                <div class="border-animation"></div>
                                <div class="diamond" style="background-color: #f1521b;">
                                  <div>
                                    <h5 class="text-white">Pending</h5>
                                    <h5 class="text-white"><span id="pendingCount"></span></h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                              <div class="diamond-container">
                                <div class="border-animation"></div>
                                <div class="diamond" style="background-color: #47b2c8  ;">
                                  <div>
                                    <h5 class="text-white">Request</h5>
                                    <h5 class="text-white">3</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                              <div class="diamond-container">
                                <div class="border-animation"></div>
                                <div class="diamond" style="background-color: #545557;">
                                  <div>
                                    <h5 class="text-white">Reassign</h5>
                                    <h5 class="text-white"><span id="reassignCount"></span></h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div> 
      
                

                
            </div>
                
            </div>
            
            <footer class="footer text-center">
                Developed By Technology Innovation Hub
            </footer>
            
        </div>
        
    </div>
   
  

    

    
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>

    <script>

// Fetch the complaint counts when the page loads
$(document).ready(function() {
  fetchComplaintCounts();
});

function fetchComplaintCounts() {
  $.ajax({
      url: 'diamondbackend.php', // URL to the PHP file
      method: 'POST',
      data: {}, // Additional data can be sent if needed
      dataType: 'json',
      success: function(response) {
          if (response.complainCount !== undefined && response.completedCount !== undefined) {
              $('#complainCount').text(response.complainCount);
              $('#completedCount').text(response.completedCount);
              $('#inprogresscount').text(response.inprogressCount);
              $('#pendingCount').text(response.pendingCount);       
              $('#reassignCount').text(response.reassignCount);


          } else {
              $('#complainCount').text("Error fetching data");
              $('#completedCount').text("Error fetching data");
              $('#inprogresscount').text("Error fetching data");
              $('#pendingCount').text("Error fetching data");
              $('#reassignCount').text("Error fetching data");


          }
      },
      error: function() {
          $('#complainCount').text("Error with AJAX request");
          $('#completedCount').text("Error with AJAX request");
          $('#inprogresscount').text("Error with AJAX request");
          $('#pendingcount').text("Error with AJAX request");
          $('#reassigncount').text("Error with AJAX request");

      }
  });
}


</script>

    

</body>

</html>