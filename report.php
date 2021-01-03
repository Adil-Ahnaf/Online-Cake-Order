<?php
include 'inc/header1.php';
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
	    <li><a href="anniversary_report.php">Anniversary Cake</a></li>
	    <li><a href="birthday_report.php">Birthday Cake</a></li>
	    <li><a href="christmas_report.php">Christmas Cake</a></li>
	    <li><a href="regular_report.php">Regular Cake</a></li>
	  </ul>
	</div>

	<div class="panel panel-default">
	    <div class="panel-body" >A Basic Panel
	    </div>
	</div>

</div>
<?php include 'inc/footer.php' ?>