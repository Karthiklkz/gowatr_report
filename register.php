<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aiui-admin.wordpressthemeshub.com/main/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jan 2024 11:41:58 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://aiui-admin.wordpressthemeshub.com/images/favicon.ico">

    <title>AIUI Admin - Registration </title>
	<!-- <link rel="stylesheet" href="../css/Register/register.css"> -->
	<link rel="stylesheet" href="./css/Register/register.css">
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend -->
	<!-- <link rel="stylesheet" href="../css/bootstrap-extend.css"> -->
	
	<!-- <link rel="stylesheet" href="../css/bootstrap-extend.css"> -->
	<link rel="stylesheet" href="./css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="./css/master_style.css">

	<!-- AIUI Admin skins -->
	<link rel="stylesheet" href="./css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<!-- <body class="hold-transition register-page bg-img" style="background-image:url(../images/error/bg-3.jpg);"> -->
	<body class="hold-transition register-page bg-img register_body">
	<?php session_start();

require "conn.php";


if(isset($_POST['submit']))
{

$username=$_POST['username'];
$pno=$_POST['pno'];
$email = $_POST['email'];


$email_query="SELECT email from users where email = '$email'";
$email_stmt = mysqli_query($conn,$email_query);
$count_email = mysqli_num_rows($email_stmt);
if($count_email > 0){
  ?>
  <script>
window.addEventListener('load', function() {
      swal({
        title: "Mail ID already exised",
        text: "",
        icon: "warning",
        button: "OK",
      }).then((okey) => {
        if (okey) {
          window.location.href = "register.php";
        }
      });
    })
</script>
  <?php
}else{
// success!
$password =$_POST['password'];
$password = md5($password);
$query="INSERT into users(name,username,pno,email,password) values(?,?,?,?,?)";
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('ssiss', $username,$username,$pno,$email,$password);
$stmt->execute();
?>

<script>
window.addEventListener('load', function() {
	Swal.fire("SweetAlert2 is working!");
          window.location.href = "login.php";
       
    })
</script>
<?php
}
}
?>
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-lg-4 col-md-8 col-12">
				<div class="register-box bg-white rounded">
				  <div class="register-box-body">
					<!-- <h3 class="text-center">Get started with Us</h3>
					<p class="login-box-msg">Register a new membership</p> -->
					<div class="img_container d-flex align-items-center justify-content-center"><img src="./assets/Images/GoWatr_logo.png" class="img_logo" /></div>

					<form action="" method="post" class="form-element">
					  <div class="form-group has-feedback">
						<input type="text" name="username" class="form-control" placeholder="Full name">
						<!-- <span class="ion ion-person form-control-feedback"></span> -->
					  </div>
					  <div class="form-group has-feedback">
					  <input type="number" name="pno" class="form-control" placeholder="Phone">
						<!-- <span class="ion ion-person form-control-feedback"></span> -->
					  </div>
					  <div class="form-group has-feedback">
						<input type="email" name="email" class="form-control" placeholder="Email">
						<!-- <span class="ion ion-email form-control-feedback"></span> -->
					  </div>
					  <div class="form-group has-feedback">
						<input type="password" name="password" class="form-control" placeholder="Password">
						<!-- <span class="ion ion-locked form-control-feedback"></span> -->
					  </div>
					  <div class="form-group has-feedback">
						<input type="password" name="cpassword" class="form-control" placeholder="Confirm password">
						<!-- <span class="ion ion-log-in form-control-feedback"></span> -->
					  </div>
					 
					  <div class="row">
						
						<!-- /.col -->
						<div class="col-12 text-center">
						  <button  type="submit" name="submit" class="btn btn-info btn-block margin-top-10">SIGN UP</button>
						</div>
						<!-- /.col -->
					  </div>
					</form>

				
					<!-- /.social-auth-links -->

					 <div class="margin-top-20 text-center">
						<p>Already have an account?<a href="login" class="text-info m-l-5"> Sign In</a></p>
					 </div>

				  </div>
				  <!-- /.form-box -->
				</div>
			
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- jQuery 3 -->
	<script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>
	
	<!-- popper -->
	<script src="./assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	
</body>

</html>
