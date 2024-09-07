<?php
include("db.php");
$sql1 = "SELECT complaints_detail.*,worker_taskdet.work_completion_date FROM complaints_detail LEFT JOIN worker_taskdet on complaints_detail.id=worker_taskdet.task_id WHERE complaints_detail.status = 13";
$result1 = mysqli_query($conn, $sql1);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Complaint</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- jQuery CDN -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--For data table-->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .nav-tabs .nav-link {
            color: #555;
            /* Default color for tabs */
            background-color: #f8f9fa;
            /* Default background color */
            border: 1px solid transparent;
            /* Default border */
        }

        .nav-tabs .nav-link.active {
            color: #fff;
            /* Text color when active */
            background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);
            /* Background color when active */
            border-color: #989393;
            border-width: 5px;
            /* Border color when active */
        }

        /* Optional: Hover effect */
        .nav-tabs .nav-link:hover {
            color: #000;
            border-color: #989393;
            border-width: 5px;
            /* Text color on hover */
        }
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
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
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Logout-->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
                    <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard" ></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="requirement.html" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Requirements</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="complain.php" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Complain Status</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Change Password</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="status.php" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Work Category</span></a></li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Complaint Status</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Complaint</li>
                                </ol>
                            </nav>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                <!-- Tabs -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4>Complaint Status</h4>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#completed"
                                            role="tab"><span class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><i class="mdi mdi-book-open"></i>Completed Work</span></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#inprogress"
                                            role="tab"><span class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><i class="mdi mdi-book-open"></i>Work
                                                Assigned</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reassign"
                                            role="tab"><span class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><i
                                                    class="mdi mdi-account-multiple"></i>Reassigned Work</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="completed" role="tabpanel">
                                        <div class="p-20">
                                            <div class="card">
                                                <div class="card-body" style="padding: 10px;">

                                                    <!-- Dropdown filter for Status -->


                                                    <table id="dataTable" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr style="color:white">
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>S.No</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Dept</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Block</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Venue</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Problem</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Image</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Date_raised</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Deadline</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Actual Date</h5>
                                                                    </b>
                                                                </th>
                                                                <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                    <b>
                                                                        <h5>Status</h5>
                                                                    </b>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $s = 1;
                                                            while ($row = mysqli_fetch_array($result1)) {
                                                                $modal_id = "problem" . $s;
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo $s ?></td>
                                                                    <td class="text-center"><?php echo $row['department'] ?></td>
                                                                    <td class="text-center"><?php echo $row['block_venue'] ?></td>
                                                                    <td class="text-center"><?php echo $row['venue_name'] ?></td>
                                                                    <td class="text-center"><button type="button" class="btn btn-info margin-5" data-toggle="modal" data-target="#<?php echo $modal_id; ?>" height="30px" width="30px">View description</button></td>
                                                                    <!--Description id=problem-->
                                                                    <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Problem Description</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="hidden" name="id" id="id">
                                                                                    <textarea id="problem_description" name="problem_description" class="form-control" readonly><?php echo $row['problem_description'] ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <td>
                                                                        <button type="button" class="btn btn-info showImage" data-id="<?php echo $row['id']; ?>">View</button>
                                                                    </td>

                                                                    <!-- Image Modal -->

                                                                    <td class="text-center"><?php echo $row['date_of_reg'] ?></td>
                                                                    <td class="text-center"><?php echo $row['days_to_complete'] ?></td>
                                                                    <td class="text-center"><?php echo $row['work_completion_date'] ?></td>
                                                                    <td class="text-center">Completed</td>
                                                                </tr>
                                                                <!-- Add more rows as needed -->
                                                            <?php
                                                                $s++;
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- work assigned tabs... -->
                                    <div class="tab-pane" id="inprogress" role="tabpanel">
                                        <div class="p-20">
                                            <div class="card">
                                                <div class="card-body" style="padding: 10px;">
                                                    <div class="filter-section" style="float:right">
                                                        <label for="status-filter">Filter by Status:</label>
                                                        <select id="status-filter" class="form-control" style="width: 200px; display: inline-block;">
                                                            <option value="">All</option>
                                                            <option value="In Progress">In Progress</option>
                                                            <option value="Pending">Pending</option>
                                                        </select>
                                                    </div>

                                                    <div class="table-responsive">
                                                        <!-- Table for In Progress tasks -->
                                                        <table id="dataTable1" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>S.No</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Dept</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Block</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Venue</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Problem</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Image</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Date_raised</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Deadline</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Status</h5>
                                                                        </b>
                                                                    </th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);">
                                                                        <b>
                                                                            <h5>Comments</h5>
                                                                        </b>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sql2 = "SELECT complaints_detail.*,manager.comment_query,manager.comment_reply FROM complaints_detail LEFT JOIN manager on complaints_detail.id=manager.problem_id WHERE status IN (8, 9,10, 15)";
                                                                $result2 = mysqli_query($conn, $sql2);
                                                                $s = 1;
                                                                while ($row = mysqli_fetch_array($result2)) {
                                                                    $modal_id = "problem1" . $s;
                                                                ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $s ?></td>
                                                                        <td class="text-center"><?php echo $row['department'] ?></td>
                                                                        <td class="text-center"><?php echo $row['block_venue'] ?></td>
                                                                        <td class="text-center"><?php echo $row['venue_name'] ?></td>
                                                                        <td class="text-center"><button type="button" class="btn btn-info margin-5" data-toggle="modal" data-target="#<?php echo $modal_id; ?>" height="30px" width="30px">View description</button></td>
                                                                        <!--Description id=problem-->
                                                                        <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Problem Description</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <textarea id="problem_description" name="problem_description" class="form-control" readonly><?php echo $row['problem_description'] ?></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info showImage" data-id="<?php echo $row['id']; ?>">View</button>
                                                                        </td>
                                                                        <!--Image id=image-->

                                                                        <td class="text-center"><?php echo $row['date_of_reg'] ?></td>
                                                                        <td class="text-center"><?php echo $row['days_to_complete'] ?></td>
                                                                        <td class="text-center"><?php
                                                                                                if ($row['status'] == 8) {
                                                                                                    echo "Worker Pending";
                                                                                                } elseif ($row['status'] == 9) {
                                                                                                    echo "Worker started to work";
                                                                                                } elseif ($row['status'] == 10) {
                                                                                                    echo "Worker inProgress";
                                                                                                } else {
                                                                                                    echo "Sent to Manager for rework";
                                                                                                }
                                                                                                ?></td>
                                                                        <td class="text-center">
                                                                            <button type="button" class="btn <?php
                                                                                                                if (!empty($row['comment_query']) && !empty($row['comment_reply'])) {
                                                                                                                    echo 'btn-success'; // Green if both query and reply exist
                                                                                                                } elseif (!empty($row['comment_query']) && empty($row['comment_reply'])) {
                                                                                                                    echo 'btn-warning'; // Yellow if only query exists
                                                                                                                } else {
                                                                                                                    echo 'btn-info'; // Default blue if neither query nor reply exists
                                                                                                                }
                                                                                                                ?> " data-toggle="modal" data-target="#comment<?php echo $row['id']; ?>">Comments</button>
                                                                        </td>
                                                                        <!-- Comment Modal -->

                                                                        <div class="modal fade" id="comment<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Comment Forum</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form id="comment_det<?php echo $row['id']; ?>">
                                                                                        <div class="modal-body">
                                                                                            <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">

                                                                                            <!-- Query Field -->
                                                                                            <?php if (!empty($row['comment_query'])): ?>
                                                                                                <label class="form-label">Query*</label>
                                                                                                <input type="text" class="form-control" id="query" name="comment_query" value="<?php echo htmlspecialchars($row['comment_query']); ?>" readonly>
                                                                                            <?php else: ?>
                                                                                                <label class="form-label">Query*</label>
                                                                                                <input type="text" class="form-control" id="query" name="comment_query" placeholder="Enter your query here" required>
                                                                                            <?php endif; ?>

                                                                                            <!-- Reply Field -->
                                                                                            <?php if (!empty($row['comment_reply'])): ?>
                                                                                                <label class="form-label">Reply*</label>
                                                                                                <input type="text" class="form-control" id="reply<?php echo $row['id']; ?>" name="comment_reply" value="<?php echo htmlspecialchars($row['comment_reply']); ?>" readonly>
                                                                                            <?php else: ?>
                                                                                                <label class="form-label">Reply*</label>
                                                                                                <input type="text" class="form-control" id="reply<?php echo $row['id']; ?>" name="comment_reply" placeholder="Reply will be displayed here" readonly>
                                                                                            <?php endif; ?>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">Save Details</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </tr>
                                                                    <!-- Add more rows as needed -->
                                                                <?php
                                                                    $s++;
                                                                } ?>
                                                                <!-- Rows for In Progress tasks -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="reassign" role="tabpanel">
                                        <div class="p-20">
                                            <div class="card">
                                                <div class="card-body" style="padding: 10px;">
                                                    <div class="table-responsive">
                                                        <!-- Table for Reassigned tasks -->
                                                        <table id="dataTable2" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>S.No</h5>
                                                                        </b></th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>Dept</h5>
                                                                        </b></th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>Block</h5>
                                                                        </b></th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>Venue</h5>
                                                                        </b></th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>Problem Description</h5>
                                                                        </b></th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>Image</h5>
                                                                        </b></th>
                                                                    <th class="text-center" style="background:linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%); color:white"><b>
                                                                            <h5>Reason</h5>
                                                                        </b></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $sql3 = "SELECT * FROM complaints_detail WHERE status=14";
                                                                $result3 = mysqli_query($conn, $sql3);
                                                                $s = 1;
                                                                while ($row = mysqli_fetch_array($result3)) {
                                                                    $modal_id = "problem2" . $s;
                                                                ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $s ?></td>
                                                                        <td class="text-center"><?php echo $row['department'] ?></td>
                                                                        <td class="text-center"><?php echo $row['block_venue'] ?></td>
                                                                        <td class="text-center"><?php echo $row['venue_name'] ?></td>
                                                                        <td class="text-center"><button type="button" class="btn btn-info margin-5" data-toggle="modal" data-target="#<?php echo $modal_id; ?>" height="30px" width="30px">View description</button></td>
                                                                        <!--Description id=problem-->
                                                                        <div class="modal fade" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Problem Description</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <textarea id="problem_description" name="problem_description" class="form-control" readonly><?php echo $row['problem_description'] ?></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <td>
                                                                            <button type="button" class="btn btn-info showImage" data-id="<?php echo $row['id']; ?>">View</button>
                                                                        </td>
                                                                        <td class="text-center"><button type="button" class="btn btn-info margin-5" data-toggle="modal" data-target="#reason<?php echo $modal_id; ?>" height="30px" width="30px">View Reason</button></td>
                                                                        <div class="modal fade" id="reason<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Reason</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="modal-body">
                                                                                        <textarea id="feedback" name="feedback" class="form-control" readonly><?php echo $row['feedback'] ?></textarea>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </tr>
                                                                    <!-- Add more rows as needed -->
                                                                <?php
                                                                    $s++;
                                                                } ?>
                                                                <!-- Rows for Reassigned tasks -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ============================================================== -->
                                <!-- End Container fluid  -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- footer -->
                                <!-- ============================================================== -->
                                <footer class="footer text-center">
                                    <b>2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>
                                        Developed and Maintained by Technology Innovation Hub.</b>
                                </footer>
                                <!-- ============================================================== -->
                                <!-- End footer -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Page wrapper  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel">Image</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img id="modalImage" src="" alt="Image" class="img-fluid" style="width:1500px;height:250px;"> <!-- src will be set dynamically -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                           
                            $(document).on('submit', '#comment_det<?php echo $row['id']; ?>', function(e) {
                                e.preventDefault();
                                var formData = new FormData(this);
                                console.log(formData)
                                formData.append("save_edituser", true);
                                $.ajax({
                                    type: "POST",
                                    url: "backend.php",
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function(response) {
                                        console.log(response);
                                        var res = jQuery.parseJSON(response);
                                        if (res.status == 200) {
                                            $('#comment<?php echo $row['id']; ?>').modal('hide');
                                            $('#comment_det<?php echo $row['id']; ?>')[0].reset();
                                            $('#dataTable2').load(location.href + " #dataTable2");
                                            Swal.fire({
                                                title: "Good job!",
                                                text: "You clicked the button!",
                                                icon: "success"
                                            });

                                        } else if (res.status == 500) {
                                            $('#comment<?php echo $row['id']; ?>').modal('hide');
                                            $('#comment_det<?php echo $row['id']; ?>')[0].reset();
                                            console.error("Error:", res.message);
                                            alert("Something Went wrong.! try again")
                                        }
                                    }
                                });
                            });
                        </script>





                        <!-- End Wrapper -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- All Jquery -->
                        <!-- ============================================================== -->
                        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap tether Core JavaScript -->

                        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
                        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                        <!-- slimscrollbar scrollbar JavaScript -->
                        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
                        <!--Wave Effects -->
                        <script src="dist/js/waves.js"></script>
                        <!--Menu sidebar -->
                        <script src="dist/js/sidebarmenu.js"></script>
                        <!--Custom JavaScript -->
                        <script src="dist/js/custom.min.js"></script>
                        <!--for data table-->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
                        <script>
                            //image
                            // Show image
                            $(document).on('click', '.showImage', function() {
                                var user_id = $(this).data('id'); // Get the user ID from data attribute
                                console.log(user_id);

                                $.ajax({
                                    type: "POST",
                                    url: "complainbackend.php",
                                    data: {
                                        'get_image': true,
                                        'user_id': user_id
                                    },
                                    success: function(response) {
                                        var res = jQuery.parseJSON(response);
                                        console.log(res);

                                        if (res.status == 500) {
                                            alert(res.message);
                                        } else {
                                            $('#modalImage').attr('src', 'uploads/' + res.data.images); // Dynamically set the image source
                                            $('#imageModal').modal('show'); // Show the modal
                                        }
                                    }
                                });
                            });
                        </script>

                        <script>
                            $(document).ready(function() {
                                $('#dataTable').DataTable();
                            });
                        </script>

                        <script>
                            $(document).ready(function() {
                                // Initialize DataTable
                                var table = $('#dataTable1').DataTable();

                                // Apply filter on status change
                                $('#status-filter').on('change', function() {
                                    var selectedStatus = $(this).val();
                                    if (selectedStatus) {
                                        table.column(8).search('^' + selectedStatus + '$', true, false).draw();
                                    } else {
                                        table.column(8).search('').draw();
                                    }
                                });
                            });
                        </script>
                        <script>
                            $(document).ready(function() {
                                $('#dataTable2').DataTable();
                            });
                        </script>

</body>

</html>