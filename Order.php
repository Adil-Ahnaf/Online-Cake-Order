<?php
include 'inc/header1.php';
include 'lib/User.php';

$con=mysqli_connect("localhost","root","","online_cake");
?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Order List</h2>
		</div>	
		<div class="panel-body">
			<table class="table table-striped">
				<th width="2%">ID</th>
				<th width="2%">Customer ID</th>
				<th width="2%">Address</th>
				<th width="2%">ContactNo</th>
				<th width="2%">CakeID</th>
				<th width="2%">Price</th>
				<th width="2%">O.Date</th>
				<th width="2%">Action</th>
					
<?php
	$order=new User();
	$orderlist=$order->getorderlist();
	if ($orderlist) {
		foreach ($orderlist as $sorder) {

			
?>
					<tr>
						<td><?php echo $sorder['order_id']; ?></td>
						<td><?php echo $sorder['Customer_Id']; ?></td>
						<td><?php echo $sorder['Address']; ?></td>
						<td><?php echo $sorder['Contact_Number']; ?></td>
						<td><?php echo $sorder['Cake_id']; ?></td>
						<td><?php echo $sorder['Cake_Price']; ?></td>
						<td><?php echo $sorder['Order_date']; ?></td>
						<td>
							<a name="order" class="btn btn-primary" href="submit_order.php?
							order_id=<?php echo $sorder['order_id'] ?>"
							>Deliver</a>
						</td>
					</tr>
		<?php } }else{ ?>
			<tr><td colspan="5"><h2>No user data found..</h2></td></tr>
		<?php }?>
				</table>
			</div>
		</div>



		<!-------------- This is Another Instant Report Table--------------->

			<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Deliver List</h2>
		</div>	
		<div class="panel-body">
			<table class="table table-striped">
				<th width="2%">Report Id</th>
				<th width="2%">Order Id</th>
				<th width="2%">Customer Id</th>
				<th width="2%">Cake Id</th>
					
				<?php 
                        $res = mysqli_query($con,"SELECT * FROM report");
                        while($row=mysqli_fetch_array($res))
                        {

                        echo'<tr>';
							echo'<td>'.$row['Report_Id'].'</td>';
							echo'<td>'.$row['Order_Id'].'</td>';
							echo'<td>'.$row['Customer_Id'].'</td>';
							echo'<td>'.$row['Cake_Id'].'</td>';
						echo'</tr>';
                      }
                      ?> 
				</table>
			</div>
		</div>

<?php include 'inc/footer.php' ?>