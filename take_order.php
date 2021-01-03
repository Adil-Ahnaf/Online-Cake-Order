<?php 
	include 'inc/header2.php';
	include 'lib/Take_order.php';
?>
<?php
	$loginmsg= Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
?>
<?php
	$order = new Customer_order();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order'])) {
		$orderi =$order->add_order($_POST);
		echo $orderi;	
	}
?>
<?php
	if (isset($_GET['Cake_id'])) {
		$order_cake=(int)$_GET['Cake_id'];
	}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Delivery Information
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

			<form  action="" method="POST">
				<div class="form-group">
					<label for="cake_id">Cake Id</label>
					<input type="text" id="cake_id" name="cake_id" class="form-control" value="<?php echo $order_cake ?>" />		
				</div>
				<div class="form-group">
					<label for="customer_id">Customer Id</label>
						<input type="text" id="customer_id" name="customer_id" class="form-control" value="<?php $id= Session::get("id");
												echo $id; ?>" />
				</div>

				<div class="form-group">
					<label for="contract_number">Contract Number</label>
					<input type="text" id="contract_number" name="contract_number" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" id="address" name="address" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="date">Delivery Date</label>
					<input type="date" id="date" name="date" class="form-control"/>
				</div>
				<button type="submit" name="order" class="btn btn-success">Submit</button>
			</form>
	    </div>
	</div>
</div>
<?php include 'inc/footer.php' ?>