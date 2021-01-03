<?php
include 'inc/header2.php';
include 'lib/User.php'; 
?>




		<div class="panel panel-default">
			<div class="panel-heading">
				<h2> Customer Order List</h2>
			</div>	
			<div class="panel-body">
			<table class="table table-striped">

				   <th width="20%">Order Date</th>

                   <th width="20%">Cake Name</th>

					<th width="20%">Cake Price</th>
		
<?php
	$order=new User();
	
	$customerorderlist=$order->getcustomerorderlist();
	if ($customerorderlist) {
		foreach ($customerorderlist as $sorder) {

			
?>

					<tr>
						<td><?php echo $sorder['Order_date']; ?></td>

						<td><?php echo $sorder['Cake_Name']; ?></td>

						<td><?php echo $sorder['Cake_Price']; ?></td>
					</tr>
		<?php } }else{ ?>
			<tr><td colspan="5"><h2>No user data found..</h2></td></tr>
		<?php }?>
				</table>
				
			</div>
		</div>
<?php include 'inc/footer.php' ?>