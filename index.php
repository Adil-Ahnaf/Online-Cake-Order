<?php
include 'inc/header.php';
include 'lib/User.php';
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2><strong>Welcome!</strong>User
					<span style="float:right;">
						<?php
						date_default_timezone_set('Asia/Dhaka');
						echo "Date:".Date("d-m-Y")."<br/>";
						?>
					</span>
				</h2>
			</div>	
			<div class="panel-body">
				<center>
					<a href="login.php" style="color:#239B56"><strong>please login !!</strong></a>
				</center>
				<center>
					<a href="register.php" style="color:#239B56">New user register first.</a>
				</center>
			</div>
		</div>
<?php include 'inc/footer.php' ?>