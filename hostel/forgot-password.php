<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$contact=$_POST['contact'];
$stmt=$mysqli->prepare("SELECT email,contactNo,password FROM userregistration WHERE (email=? && contactNo=?) ");
				$stmt->bind_param('ss',$email,$contact);
				$stmt->execute();
				$stmt -> bind_result($username,$email,$password);
				$rs=$stmt->fetch();
				if($rs)
				{
				$pwd=$password;				
				}

				else
				{
					echo "<script>alert('Invalid Email/Contact no or password');</script>";
				}
			}
				?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>User Forgot Password</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head
<body>
	
	<div class="login-page bk-img" style="">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold  mt-4x">Forgot Password</h1>

						<div class="well row pt-2x pb-3x bk-light" style=" border-color: #C4BFBF;
						 border-width: 1px; box-shadow: 3px 5px #C4BFBF; border-radius: 1.75rem;
						background-color:#9DD6EF;">
							<div class="col-md-8 col-md-offset-2">
							<?php if(isset($_POST['login']))
{ ?>
					<p>Your Password is <?php echo $pwd;?><br> Change the Password After login</p>
					<?php }  ?>
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Your Email</label>
									<input type="email" placeholder="Email" name="email" 
									class="form-control mb">
									<label for="" class="text-uppercase text-sm">Your Contact no</label>
									<input type="text" placeholder="Contact no" name="contact" 
									class="form-control mb">
									
								<div class="login-btn" style="display:flex; justify-content:center;"> 
									<input type="submit" name="LOGIN" 
									class="btn btn-primary btn-block" style="padding: 20px 25px;border-radius: 1.75rem; font-size:20px; 
									margin:7px 15px 10px 7px;
									background-color:green; 
									line-height:.5rem; width:50% " value="LOGIN" >
									</div>
								</form>

								<div class="text-center ">
							<a href="index.php" class="" style=" font-size:15px
							font-weight:600; line-height:3em;
									text-align:centre; margin:7px 7px;">
								SIGN IN?</a>
						</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>