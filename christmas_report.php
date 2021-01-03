<?php 
	include 'inc/header1.php';
	include 'lib/Report_christmas.php';
?>	

<div class="panel panel-default" style="border-color: #34495E  ">
	<div class="panel-heading">
		<div class="dropdown">
		  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #2ECC71 ">Select Catagory 
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu">
		    <li><a href="anniversary_report.php">Anniversary Cake</a></li>
		    <li><a href="birthday_report.php">Birthday Cake</a></li>
		    <li><a href="christmas_report.php">Christmas Cake</a></li>
		    <li><a href="regular_report.php">Regular Cake</a></li>
		  </ul>
		</div>
	</div>

	<div class="panel panel-default">
			<div class="panel-heading" style="background: #45B39D">
				<h3>Christmas Cake</h3>
			</div>	
			<div class="panel-body" style="background: #C5E1A5" >
				<table class="table table-striped">
					<th width="5%">Cake Id</th>
					<th width="5%"> Name</th>
					<th width="5%">Selling No</th>
					<th width="5%">Total Price</th>

<?php
	$reports=new Christmas_Report();
	$reportlist=$reports->view_report();
	if ($reportlist) {
		foreach ($reportlist as $reports) {			
?>
					<tr>
						<td><?php echo  $reports['Cake_Id']; ?></td>
						<td><?php echo  $reports['Cake_Name']; ?></td>
						<td><?php echo  $reports['count']; ?></td>
						<td><?php echo  $reports['price']; ?></td>
					</tr>
		<?php } }else{ ?>
			<tr><td colspan="5"><h2>No user data found..</h2></td></tr>
		<?php }?>

<?php
	$amounts=new Christmas_Report();
	$report_amount=$amounts->view_report_sum($_POST);
?>
				</table>
			<center><div class="form-group">
				<label for="Id">Total amount
					<input type="text" id="Id" name="Total amount" class="form-control" disabled value="<?php echo '                 '.$report_amount.'TK.'; ?>"/></label>
			</center></div>
			</div>
		</div>

</div>
<?php include 'inc/footer.php' ?>