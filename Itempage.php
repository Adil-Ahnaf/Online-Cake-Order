<?php 
	include 'inc/header1.php'; 
	include 'lib/Add_Product.php';
	include 'lib/Remove_Product.php';
?>
<?php
	$loginmsg= Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
?>
<?php
	$iteam = new Product();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Add_Item'])) {
		$itemi =$iteam->add_product($_POST);
		echo $itemi;	
	}
?>
<?php
	$iteam = new RProduct();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
		$itemi =$iteam->remove_product($_POST);
		echo $itemi;	
	}
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User<span class="pull-right"><strong>Welcome!</strong>
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
					<label for=" Id">Cake Id</label>
					<input type="text" id="Id" name="Cake_id" class="form-control" required="" />
				</div>
				<div class="form-group">
					<label for=" Name">Cake Name</label>
					<input type="text" id="Name" name="Cake_Name" class="form-control" required="" />
				</div>
				<div class="form-group">
					<label for=" Catagory">Cake Catagory</label>
					<input type="text" id="Catagory" name="Cake_Catagory" class="form-control" required="" />
				</div>
				<div class="form-group">
					<label for=" Price">Cake Price</label>
					<input type="text" id="Price" name="Cake_Price" class="form-control" required="" />
				</div>
				<div class="form-group">
					<label for=" size">Cake Size</label>
					<input type="text" id="size" name="Cake_size" class="form-control" required="" />
				</div>
				<div class="form-group">
					<label for=" categorie"> Image</label>
					<?php
						if(isset($_FILES['image'])){
							$filename=$_FILES['image']['name'];
							$filetmp=$_FILES['image']['tmp_name'];
							move_uploaded_file($filetmp,"images/".$filename);
							echo "file uploaded successfully !!";
						}
					?>
					<form method="POST" action="" enctype="multipart/form-data">
					<input type="file" name="image" />
				</div>
				
				<button type="submit" name="Add_Item" class="btn btn-success">Add Item</button>				
			</form>
	    </div>
	</div>

	<div class="panel-heading" style="background: #D5F5E3">
		<h2>Remove Iteam</h2>
	</div>	

	<div class="panel-body" style="max-width:600px; margin:0 auto">
		<form action="" method="POST">
		<div class="form-group">
			<label for=" Id">Cake_id</label>
			<input type="text" id="Id" name="Cake_id" class="form-control" required="" />
		</div>
		<button type="submit" name="delete" class="btn btn-success">remove</button>
		</form>
	</div>	
</div>
<?php include 'inc/footer.php' ?>