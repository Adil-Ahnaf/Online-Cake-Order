<?php 
	include 'inc/header2.php';
	include 'lib/Christmas_cake.php';
	 
?>

<?php
	$loginmsg= Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
?>

<div class="panel panel-default" style="border-color: #34495E  ">
	<div class="panel-heading">
		<h2>
			<span class="pull-right"><strong>
			<?php
				$name= Session::get("name");
				if (isset($name)) {
					echo $name;
				}
			?>
		</strong></span></h2>
	

		<div class="dropdown">
		  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #2ECC71 ">Select Catagory 
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu">
		    <li><a href="anniversary_cake.php">Anniversary Cake</a></li>
		    <li><a href="birthday_cake.php">Birthday Cake</a></li>
		    <li><a href="christmas_cake.php">Christmas Cake</a></li>
		    <li><a href="regular_cake.php">Regular Cake</a></li>
		  </ul>
		</div>
	</div>

	<div class="panel panel-default">
			<div class="panel-heading" style="background: #45B39D">
				<h3>Christmas cake</h3>
			</div>	
			<div class="panel-body" style="background: #C5E1A5" >
				<table class="table table-striped">
					<th width="10%">Cake Id</th>
					<th width="10%">Cake Name</th>
					<th width="10%">Cake Size(Pounds)</th>
					<th width="10%">Cake Price(TK)</th>
					<th width="10%">Cake Image</th>
					<th width="10%">Action</th>
<?php
	$cakes=new Christmas_Cake();
	$cakelist=$cakes->view_cakes();
	if ($cakelist) {
		foreach ($cakelist as $scake) {

			
?>
					<tr>
						<td><?php echo $scake['Cake_id']; ?></td>
						<td><?php echo $scake['Cake_Name']; ?></td>
						<td><?php echo $scake['Cake_size']; ?></td>
						<td><?php echo $scake['Cake_Price']; ?></td>
						<td><img src="cakes/christmas cake/<?php echo $scake['image']; ?>" height="150" width="150" /></td>
						<td>
						<a class="btn btn-primary" href="take_order.php?Cake_id=<?php echo $scake['Cake_id'] ?>" style=" background : #FFA000">Order</a></td>
					</tr>
		<?php } }else{ ?>
			<tr><td colspan="5"><h2>No user data found..</h2></td></tr>
		<?php }?>
				</table>
			</div>
		</div>

</div>
<?php include 'inc/footer.php' ?>