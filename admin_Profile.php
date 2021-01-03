<?php 
	include 'inc/header1.php';
	include 'lib/Admin_Profile.php';
?>

<?php
	$iteam = new Admin();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$itemi =$iteam->update_profile($_POST);
		echo $itemi;	
	}
?>


<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Update Profile<span class="pull-right">
			<?php
				$name= Session::get("name");
				if (isset($name)) {
					echo $name;
				}
			?>
		</span></h2>
	</div>

	<div class="panel-body">
		<div style="max-width:600px; margin:0 auto">
			<form action="" method="POST">
				

				<div class="form-group">
					<label for="old_password">Old Password</label>
					<input type="password" id="old_password" name="old_password" class="form-control" required="" />
				</div>

				<div class="form-group">
					<label for="password">New Password</label>
					<input type="password" id="password" name="password" class="form-control"/>
				</div>
				<button type="submit" name="update" class="btn btn-success">update</button>
			</form>
	    </div>
	</div>
</div>
<?php include 'inc/footer.php' ?>