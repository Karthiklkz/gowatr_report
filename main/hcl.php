<!DOCTYPE html>
<html lang="en">

<?php
require "../conn.php";
require "../head.php";
?>

<body class="hold-transition skin-black light-sidebar sidebar-mini">
    <link rel="stylesheet" type="text/css" href="../assets/vendor_components/datatable/datatables.min.css" />

    <div class="wrapper">
        <script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>
        <header class="main-header">
            <div class="p-10 clearfix float-left logo-block">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <i class="ti-align-left"></i>
                </a>
                <a href="../index" class="logo">
                    <!-- Your logo goes here -->
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="ml-10 app-menu">
                    <!-- Your sidebar content goes here -->
                </div>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../images/avatar/avatar.png" class="img-fluid" alt="" />
                            </a>
                            <ul class="dropdown-menu scale-up">
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success">View Profile</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the sidebar -->
        <?php require "../sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header d-none d-md-block">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title br-0">HCL</h3>
                    </div>
                    <div class="right-title">
                        <div class="d-flex mt-10 justify-content-end">
                            <!-- Additional content on the right side if needed -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Hover Export Data Table</h4>
                                <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="hcl" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
										<tr>
						<th>id</th>
							<th>Received_data</th>
							<th>Time_received</th>
							<th>FlowmeterID</th>
							<th>Flow</th>
							<th>Tot</th>
							<th>Version</th>
							<th>Flow_status</th>
							<th>UpdatedAt</th>
							
						</tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table body content goes here -->
                                        </tbody>
                                
                                    </table>

                                    <script>
                                        $(document).ready(function() {
                                            $('#hcl').DataTable({
                                                "ajax": {
                                                    "url": "api/api_call.php?id=hcl", // Path to your PHP script fetching data
                                                    "type": "GET",
                                                    "dataType": "json",
                                                    "dataSrc": "" // No need to specify if the returned data is in the correct format
                                                },
                                                "columns": [
                                                    { "data": "id" },
                                                    { "data": "recieved_data" },
                                                    { "data": "time_received_data" },
                                                    { "data": "FlowmeterID" },
                                                    { "data": "flow" },
                                                    { "data": "tot" },
                                                    { "data": "version" },
                                                    { "data": "flow_status" },
                                                    { "data": "updatedAt" },
                                                   
                                                ],
                                                "pageLength": 100,
												dom: 'Bfrtip',
                                                    buttons: [
	                                                     'copy', 'csv', 'excel', 'pdf', 'print'
                                                  ],
                                            });
                                        });
                                    </script>
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

    <script>
        // $('#example').DataTable().destroy();
        // $('#example').DataTable();
    </script>

    <!-- popper -->
    <script src="../assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- SlimScroll -->
    <script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!-- Sparkline -->
    <script src="../assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- AIUI Admin App -->
    <script src="js/template.js"></script>

    <!-- This is data table -->
    <script src="../assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- AIUI Admin for Data Table -->
    <script src="js/pages/data-table.js"></script>

    <script>
        $(document).ready(function() {
    $.fn.dataTable.defaults.deferRender = false;
});
$(document).ready(function() {
    $.fn.dataTable.ext.errMode = 'none';
});
        </script>

</body>

</html>
