<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aiui-admin.wordpressthemeshub.com/main/fullscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2024 11:41:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://aiui-admin.wordpressthemeshub.com/images/favicon.ico">

    <title>Report</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->

    <link rel="stylesheet" href="css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/master_style.css">

    <!-- AIUI Admin skins -->
    <link rel="stylesheet" href="css/skins/_all-skins.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script  src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

	<![endif]-->
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
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

	table{
		width:100%;
	}
	#example_filter{
		float:right;
	}
	#example_paginate{
		float:right;
	}
	label {
		display: inline-flex;
		margin-bottom: .5rem;
		margin-top: .5rem;
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
                            <a href="#" aria-haspopup="true" data-toggle="dropdown" class="nav-link rounded"
                                aria-expanded="false">
                                <i class="nav-link-icon fa fa-cogs mx-5 text-white"></i>
                                Projects
                                <i class="fa fa-angle-down ml-2"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-header-inner bg-img"
                                    style="background-image: url('images/gallery/landscape1.jpg');" data-overlay="5">
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
                                    <button type="button"
                                        class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i
                                            class="fa fa-folder mr-10"> </i>Graphic Design</button>
                                    <button type="button"
                                        class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i
                                            class="fa fa-folder mr-10"> </i>App Development</button>
                                    <button type="button"
                                        class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i
                                            class="fa fa-folder mr-10"> </i>Icon Design</button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button"
                                        class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i
                                            class="fa fa-folder mr-10"> </i>Miscellaneous</button>
                                    <button type="button"
                                        class="btn btn-outline btn-flat btn-primary w-p100 text-left"><i
                                            class="fa fa-folder mr-10"> </i>Frontend Dev</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages -->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-email"></i>
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <li class="header">You have 5 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu inner-content-div">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="images/user2-160x160.jpg" class="rounded-circle"
                                                        alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Lorem Ipsum
                                                        <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                    </h4>
                                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                        elit.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="images/user3-128x128.jpg" class="rounded-circle"
                                                        alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Nullam tempor
                                                        <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                    </h4>
                                                    <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="images/user4-128x128.jpg" class="rounded-circle"
                                                        alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Proin venenatis
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <span>Vestibulum nec ligula nec quam sodales rutrum sed
                                                        luctus.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="images/user3-128x128.jpg" class="rounded-circle"
                                                        alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Praesent suscipit
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis
                                                        neque.</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="images/user4-128x128.jpg" class="rounded-circle"
                                                        alt="User Image">
                                                </div>
                                                <div class="mail-contnet">
                                                    <h4>
                                                        Donec tempor
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See all e-Mails</a></li>
                            </ul>
                        </li>
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
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="ion ion-email-unread"></i> Inbox</a>
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
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-ellipsis-h"></i></a>
                        </li>
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
                    <div class="right-title">
                        <div class="d-flex mt-10 justify-content-end">
                            <div class="d-md-flex mr-20 ml-10 d-none">
                               
                                <div class="spark-chart">
                                    <div id="thismonth"><canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex ml-10 d-none">
                               
                                <div class="spark-chart">
                                    <div id="lastyear"><canvas width="60" height="35"
                                            style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            
         
		
			
                        <table  id="example" class="table table-striped table-bordered table-hover">
			<thead>

				<th>#</th>
				<th>Site_name</th>
				<th>Power</th>
				<th>power_issue</th>
				<th>network</th>
				<th>network_issue</th>
				<th>IoT 1</th>
				<th>IoT 1 Reason</th>
				<th>IoT 2</th>
				<th>IoT 2 Reason</th>
				<th>images</th>
				<th>summary</th>
				<th>issue_status</th>
				<th>Action</th>
			</thead>
			<tbody>
		
			</tbody>
		</table>
		<script>
                    $(document).ready(function() {
                        $('#example').DataTable(
                            {     
                                "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
                                "iDisplayLength": -1
                            } 
                            );
                    });


                    function checkAll(bx) {
                    var cbs = document.getElementsByTagName('input');
                    for(var i=0; i < cbs.length; i++) {
                        if(cbs[i].type == 'checkbox') {
                        cbs[i].checked = bx.checked;
                        }
                    }
                            }
	</script>



<?php include('table/add_modal.php'); ?>
                        </div>
                    </div>
                </div>
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
    <script src="assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

    <!-- popper -->
    <script src="assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SlimScroll -->
    <script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- Sparkline -->
    <script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- fullscreen -->
    <script src="assets/vendor_components/screenfull/screenfull.js"></script>

    <!-- AIUI Admin App -->
    <script src="js/template.js"></script>

    <script src="js/pages/fullscreen.js"></script>
    <!-- <script src="D:\xampp\htdocs\git_report\main\js\formReason.js"></script> -->
 


</body>

<!-- Mirrored from aiui-admin.wordpressthemeshub.com/main/fullscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2024 11:41:45 GMT -->

</html>