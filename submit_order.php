<?php 
	include 'inc/header1.php';
?>

<?php
	$con=mysqli_connect("localhost","root","","online_cake");
	$order_code=(int)$_GET['order_id'];
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Order Submission
			<span class="pull-right"><strong>
			<?php
				$name= Session::get("name");
				if (isset($name)) {
					echo $name;
				}
			?>
		</strong></span></h2>
	</div>

	<div class="panel-body">
		<div style="max-width:600px; margin:0 auto">
<?php
	if (isset($usergi)) {
		echo $usergi;
	}
?>

				<?php 
                  
					$q="INSERT INTO report (Order_Id,Cake_Id,Customer_Id)
												SELECT order_id, Cake_id, Customer_Id FROM order_table WHERE order_id=$order_code";
					$res = mysqli_query($con,$q);
					if($res)
					{
						echo '<div class="alert alert-success" role="alert">';
						 echo ' <strong>Done!</strong> Data Insert Successfully';
						echo '</div>';

						header("refresh:1;url=Order.php"); /* Redirect browser */
						exit();
					}
					else{
						echo 'Data not Insert';
					}

				?>
				
				


	    </div>
	</div>
</div>
<?php include 'inc/footer.php' ?>


