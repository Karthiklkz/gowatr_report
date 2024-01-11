<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">

	<title>AIUI Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="./css/bootstrap-extend.css">

	<!-- weather weather -->
	<link rel="stylesheet" href="./assets/vendor_components/weather-icons/weather-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- theme style -->
	<!-- <link rel="stylesheet" href="./css/master_style.css"> -->
	<link rel="stylesheet" href="./css/master_style.css">


	<!-- AIUI Admin skins -->
	<!-- <link rel="stylesheet" href="./css/skins/all-skins.css"> -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<style>
	/* .circle_container {
		display: flex;
		align-items: center;
		justify-content: center;
		height: 100vh;
		margin: 0;
	} */
	.box-body {
		padding: 0px !important;
	}

	.site_live {
		padding: 15px;
	}

	.circle_text {
		padding: 15px;
	}

	.box {
		padding: 10px !important;
		border-radius: 8px !important;
	}

	.circle {
		position: relative;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		background-color: #c8c8ff;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 18px;
	}

	.fraction {
		display: flex;
		flex-direction: column;
		align-items: center;
		width: 100%;
	}

	.fraction hr {
		width: 100%;
		border: 1px solid black;
		margin: 5px 0;
	}

	@media (min-width: 767px) {
		.sidebar-toggle {
			display: none;
		}
	}
</style>

<body class="hold-transition skin-black dark-sidebar">
	<div class="wrapper">

		<header class="main-header">
			<div class="p-10 clearfix float-left logo-block">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M4 6l16 0" />
						<path d="M4 12l10 0" />
						<path d="M4 18l14 0" />
					</svg>
				</a>
				<!-- Logo -->

			</div>
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->


				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages -->

						<!-- User Account-->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/avatar/avatar.png" class="img-fluid" alt="" >
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
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-ellipsis-h"></i></a>
						</li>
					</ul>
				</div>
			</nav> </header>

			<!-- Left side column. contains the logo and sidebar -->
			<?php require "sidebar.php"; ?>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header d-none d-md-block">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="page-title br-0">Dashboard</h3>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="container-full">
						<div class="row">
							<div class="col-md-3 col-sm">
								<div class="box">
									<div class="box-body">
										<div class="d-flex justify-content-between align-items-center site_live">
											<div>
												<h3 class="mb-0 mt-0">Site Data</h3>

											</div>
											<div>
												<!-- <h3 class="mb-0 mt-0">Live <span style="color: green; font-size: 27px;  font-weight: 900; ">.</span></h3> -->
												<h3 class="mb-0 mt-0">Live <span style="color: green;" class="logged-in">●</span></h3>


											</div>

										</div>
										<hr style="margin: 10px 0px 0px 0px; border: 1px solid #5e5e8b">
										<!-- <div class="progress progress-sm mt-30 mb-10">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 52%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
									</div> -->
										<div class="d-flex justify-content-between align-items-center circle_text">
											<div>
												<h3 class="mb-0 mt-0"> Active Site Date Tables</h3>
											</div>
											<div class="circle_container">
												<div class="circle">
													<div class="fraction">
														<div>
															<span style="margin-left: 26px;">25</span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-up" style="color: green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																<path d="M12 5l0 14" />
																<path d="M16 9l-4 -4" />
																<path d="M8 9l4 -4" />
															</svg>
														</div>

														<hr>
														<span>23</span>
													</div>
												</div>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Baashyaam Site Down by 8 hours</h6>


										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Green Pharma site Down by 8 hours</h6>


										</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm">
								<div class="box">
									<div class="box-body">
										<div class="d-flex justify-content-between align-items-center site_live">
											<div>
												<h3 class="mb-0 mt-0">Site Data</h3>

											</div>
											<div>
												<!-- <h3 class="mb-0 mt-0">Live <span style="color: green; font-size: 27px;  font-weight: 900; ">.</span></h3> -->
												<h3 class="mb-0 mt-0">Live <span style="color: green;" class="logged-in">●</span></h3>


											</div>

										</div>
										<hr style="margin: 10px 0px 0px 0px; border: 1px solid #5e5e8b">
										<!-- <div class="progress progress-sm mt-30 mb-10">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 52%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
									</div> -->
										<div class="d-flex justify-content-between align-items-center circle_text">
											<div>
												<h3 class="mb-0 mt-0"> Active Site Date Tables</h3>
											</div>
											<div class="circle_container">
												<div class="circle">
													<div class="fraction">
														<div>
															<span style="margin-left: 26px;">25</span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-up" style="color: green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																<path d="M12 5l0 14" />
																<path d="M16 9l-4 -4" />
																<path d="M8 9l4 -4" />
															</svg>
														</div>

														<hr>
														<span>23</span>
													</div>
												</div>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Baashyaam Site Down by 8 hours</h6>


										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Green Pharma site Down by 8 hours</h6>


										</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm">
								<div class="box">
									<div class="box-body">
										<div class="d-flex justify-content-between align-items-center site_live">
											<div>
												<h3 class="mb-0 mt-0">Site Data</h3>

											</div>
											<div>
												<!-- <h3 class="mb-0 mt-0">Live <span style="color: green; font-size: 27px;  font-weight: 900; ">.</span></h3> -->
												<h3 class="mb-0 mt-0">Live <span style="color: green;" class="logged-in">●</span></h3>


											</div>

										</div>
										<hr style="margin: 10px 0px 0px 0px; border: 1px solid #5e5e8b">
										<!-- <div class="progress progress-sm mt-30 mb-10">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 52%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
									</div> -->
										<div class="d-flex justify-content-between align-items-center circle_text">
											<div>
												<h3 class="mb-0 mt-0"> Active Site Date Tables</h3>
											</div>
											<div class="circle_container">
												<div class="circle">
													<div class="fraction">
														<div>
															<span style="margin-left: 26px;">25</span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-up" style="color: green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																<path d="M12 5l0 14" />
																<path d="M16 9l-4 -4" />
																<path d="M8 9l4 -4" />
															</svg>
														</div>

														<hr>
														<span>23</span>
													</div>
												</div>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Baashyaam Site Down by 8 hours</h6>


										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Green Pharma site Down by 8 hours</h6>


										</div>

									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box">
									<div class="box-body">
										<div class="d-flex justify-content-between align-items-center site_live">
											<div>
												<h3 class="mb-0 mt-0">Site Data</h3>

											</div>
											<div>
												<!-- <h3 class="mb-0 mt-0">Live <span style="color: green; font-size: 27px;  font-weight: 900; ">.</span></h3> -->
												<h3 class="mb-0 mt-0">Live <span style="color: green;" class="logged-in">●</span></h3>


											</div>

										</div>
										<hr style="margin: 10px 0px 0px 0px; border: 1px solid #5e5e8b">
										<!-- <div class="progress progress-sm mt-30 mb-10">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 52%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
									</div> -->
										<div class="d-flex justify-content-between align-items-center circle_text">
											<div>
												<h3 class="mb-0 mt-0"> Active Site Date Tables</h3>
											</div>
											<div class="circle_container">
												<div class="circle">
													<div class="fraction">
														<div>
															<span style="margin-left: 26px;">25</span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-up" style="color: green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
																<path stroke="none" d="M0 0h24v24H0z" fill="none" />
																<path d="M12 5l0 14" />
																<path d="M16 9l-4 -4" />
																<path d="M8 9l4 -4" />
															</svg>
														</div>

														<hr>
														<span>23</span>
													</div>
												</div>
											</div>
										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Baashyaam Site Down by 8 hours</h6>


										</div>
										<div class="d-flex justify-content-between align-items-center circle_text" style="padding: 15px 15px 0px 15px;">
											<h6 style="    color: cadetblue;" class="mb-0 mt-0">Green Pharma site Down by 8 hours</h6>


										</div>

									</div>
								</div>
							</div>





						</div>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				<div class="pull-right d-none d-sm-inline-block">
					<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0)">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Purchase Now</a>
						</li>
					</ul>
				</div> &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
			</footer>

			<!-- Control Sidebar -->

			<!-- /.control-sidebar -->

			<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>

	</div>
	<!-- ./wrapper -->



	<!-- jQuery 3 -->
	<script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

	<!-- jQuery UI 1.11.4 -->
	<script src="./assets/vendor_components/jquery-ui/jquery-ui.js"></script>

	<!-- popper -->
	<script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

	<!-- Slimscroll -->
	<script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- FastClick -->
	<script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Sparkline -->
	<script src="./assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

	<!-- apexcharts -->
	<script src="./assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="./assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<!-- AIUI Admin App -->
	<script src="main/js/template.js"></script>

	<!-- AIUI Admin dashboard demo (This is only for demo purposes) -->
	<script src="main/js/pages/dashboard2.js"></script>

</body>

</html>