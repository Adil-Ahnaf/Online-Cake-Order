<?php
include 'inc/header1.php';
include 'lib/User.php';
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Customer List</h2>
			</div>	
			<div class="panel-body">
				<table class="table table-striped">
					<th width="2%">Customer Id</th>
					<th width="2%">Customer Name</th>
					<th width="2%">Email</th>
<?php
	$customer=new User();
	$customerlist=$customer->getcustomerlist();
	if ($customerlist) {
		foreach ($customerlist as $scustomer) {

			
?>
					<tr>
						<td><?php echo $scustomer['Id']; ?></td>
						<td><?php echo $scustomer['Name']; ?></td>
						<td><?php echo $scustomer['email']; ?></td>
					</tr>
		<?php } }else{ ?>
			<tr><td colspan="5"><h2>No user data found..</h2></td></tr>
		<?php }?>
				</table>
			</div>
		</div>
<?php include 'inc/footer.php' ?>