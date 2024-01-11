<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aiui-admin.wordpressthemeshub.com/main/fullscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2024 11:41:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Report</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->

    <link rel="stylesheet" href="css/bootstrap-extend.css">
    <link href="./assets/vendor_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/master_style.css">

    <!-- AIUI Admin skins -->
    <link rel="stylesheet" href="./main/css/skins/all-skins.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

	<![endif]-->
    <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
</head>
<?php require "conn.php";  ?>
<style>
    #reasonTextarea1 {
        display: none;
    }

    #reasonTextarea2 {
        display: none;
    }

    #reasonTextarea3 {
        display: none;
    }

    #reasonTextarea4 {
        display: none;
    }

    table {
        width: 100%;
    }

    #example_filter {
        float: right;
    }

    #example_paginate {
        float: right;
    }

    label {
        display: inline-flex;
        margin-bottom: .5rem;
        margin-top: .5rem;
    }

    .table_btn {
        cursor: pointer;
        border: none;
        background-color: #c8c8ff;
        padding: 8px;
        border-radius: 8px;

    }

    .buttons_table {
        display: flex;
        justify-content: center;
        gap: 20px;
        align-items: center;
    }
</style>

<body class="hold-transition skin-black light-sidebar sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <div class="">

            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="ml-10 app-menu">
                    <ul class="header-megamenu nav">

                        <li class="dropdown nav-item">
                            <a href="#" aria-haspopup="true" data-toggle="dropdown" class="nav-link rounded" aria-expanded="false">
                                <i class="nav-link-icon fa fa-cogs mx-5 text-white"></i>
                                Projects
                                <i class="fa fa-angle-down ml-2"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-header-inner bg-img" style="background-image: url('images/gallery/landscape1.jpg');" data-overlay="5">
                                    <div class="p-30 text-left w-250">
                                        <h5 class="text-white">Overview</h5>
                                        <h6 class="text-white">Unlimited options</h6>
                                        <div class="menu-header-btn-pane">
                                            <button class="mr-2 btn btn-success btn-sm">Settings</button>
                                            <button class="btn-icon btn-icon-only btn btn-info btn-sm">
                                                <i class="fa fa-cog"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-10">
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Graphic Design</button>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>App Development</button>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Icon Design</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Miscellaneous</button>
                                    <button type="button" class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i class="fa fa-folder mr-10"> </i>Frontend Dev</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages -->
                    
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/avatar/avatar.png" class="img-fluid" alt="" />
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My
                                        Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My
                                        Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i>
                                        Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i>
                                        Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success">View
                                            Profile</a></div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                      
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the sidebar -->
        <?php require "sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header d-none d-md-block">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">Request Status</h3>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <!-- /.box -->

                        <div class="box">
                           
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr class="bg-gray">
                                                <th>#</th>
                                                <th>Site Name</th>
                                                <th>QSIR Date & Time</th>
                                                <th>Report</th>
                                                <th>Uploaded Images</th>
                                                <th>Summary</th>
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center; color: #4a4a4a;">
                                            <?php
                                            $sql_qsir = "SELECT * from qsir";
                                            $result = mysqli_query($conn, $sql_qsir);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id = $row["id"];
                                                $date_time = $row["time_received"];
                                                $site_name = $row["site_name"];
                                                $summary = $row["summary"];
                                                $images = $row["images"];
                                                $status = $row["issue_status"];
                                                ?>
                                                <tr>
                                                    <td><?php echo $id; ?></td>
                                                    <td><?php echo $site_name; ?></td>
                                                    <td><?php echo $date_time; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-id="<?php echo $id; ?>" data-target="#modal<?php echo $id; ?>">View report</button>
                                                    </td>
                                                    <td class="buttons_table">
                                                  
                                                
                                                    
                                                    <?php
                                                    $images = json_decode($images);
                                                    foreach ($images as $image): ?>
                                                          <a href="<?php echo $image; ?>" data-effect="mfp-zoom-in"><img  width="100px" src="<?php echo $image; ?>"  alt="" /></a>
                                                        <?php endforeach; ?>
                                                    
                                                   
                                               
                                                  
                                                 
                                                         
                                               
                                                	
                                                                                            
                                                    </td>
                                                    <td><?php echo $summary; ?></td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option hidden>Select</option>
                                                                <option value="2">Postponed alert for 2 hours</option>
                                                                <option value="4">Postponed alert for 4 hours</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                
                                                    <td><?php echo $status; ?></td>
                                                
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

<?php
// Modal outside of the loop to avoid repetition
$result = mysqli_query($conn, $sql_qsir);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $power = $row["power"];
    $p_issue = $row["power_issue"];
    $network = $row["network"];
    $network_issue = $row["network_issue"];
    $iot1 = $row["iot_1"];
    $iot1_issue = $row["iot2_issue"];
    $iot2 = $row["iot_2"];
    $iot2_issue = $row["iot2_issue"];

    ?>
    <div class="modal center-modal fade" id="modal<?php echo $id; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">QSIR Report</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="bg-gray">
                                <td></td>
                                <td>Availability</td>
                                <td>Reason</td>
                                
                            </tr>
                        </thead>
                        <tbody >
                            <tr >
                            <td>Power:</td>
                                <td><?php echo $power; ?></td>
                                <td><?php echo $p_issue; ?></td>
                            </tr>
                            <tr >
                            <td>Network:</td>
                                <td><?php echo $network; ?></td>
                                <td><?php echo $network_issue; ?></td>
                            </tr>
                            <tr >
                            <td>IoT 1:</td>
                                <td><?php echo $iot1; ?></td>
                                <td><?php echo $iot1_issue; ?></td>
                            </tr>
                            <tr >
                            <td>IoT 2:</td>
                                <td><?php echo $iot2; ?></td>
                                <td><?php echo $iot2_issue; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer modal-footer-uniform">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>



                                        	  <!-- Modal -->
                                      

                                        
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!-- jQuery 3 -->

    <!-- <script src="D:\xampp\htdocs\git_report\main\js\formReason.js"></script> -->

    <!-- table js -->

    <script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

    <!-- popper -->
    <script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SlimScroll -->
    <script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- Sparkline -->
    <script src="./assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="./assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="./assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
    <!-- AIUI Admin App -->
    <!-- <script src="js/template.js"></script> -->
    <script src="./main/js/template.js"></script>

    <!-- This is data table -->
    <script src="./assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- AIUI Admin for Data Table -->
    <!-- <script src="js/pages/data-table.js"></script> -->
    <script src="./main/js/pages/data-table.js"></script>



</body>


</html>