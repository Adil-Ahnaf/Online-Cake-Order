<?php 
	include 'inc/header2.php';
	include 'lib/User.php';
	//$user= new User(); 
?>

<?php
	$loginmsg= Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Welcome<span class="pull-right"><strong>
			<?php
				$name= Session::get("name");
				if (isset($name)) {
					echo $name;
				}
			?>
		</strong></span></h2>
	</div>

	<div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:black">Select Catagory 
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="anniversary_cake.php">Anniversary Cake</a></li>
	    <li><a href="birthday_cake.php">Birthday Cake</a></li>
	    <li><a href="christmas_cake.php">Christmas Cake</a></li>
	    <li><a href="regular_cake.php">Regular Cake</a></li>
	  </ul>
	</div>

	<div class="panel panel-default">
	    <div class="panel-body" >A Basic Panel
	    </div>
	</div>

</div>
<?php include 'inc/footer.php' ?>