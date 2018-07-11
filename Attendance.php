<?php
include 'config.php';
$cmpny_id=mysqli_real_escape_string($con,($_GET['id']));

if(isset($_POST['Submit'])){
	date_default_timezone_set('Asia/India');
	
	$sql="SELECT * from student where cmpny_id='".$cmpny_id."' and rollno='".$_POST['roll']."' ";
	$result=mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	$fetch=mysqli_fetch_array($result);
	if ($count==1) {
		$date = date("d-m-Y H:m:s");
		$query = "UPDATE student set attended_status='1' , attended_on='".$date."' where cmpny_id='$cmpny_id' and rollno='".$_POST['roll']."' ";
		$res=mysqli_query($con,$query);
		

		

	}
	 //print_r($fetch);



}

	 $que="SELECT * FROM `student` WHERE `cmpny_id`='".$cmpny_id."'";
	 $res=mysqli_query($con,$que);
	 $count1 = mysqli_num_rows($res);

	 $que2="SELECT * FROM `student` WHERE `cmpny_id`='".$cmpny_id."' and attended_status='1'";
	 $res2=mysqli_query($con,$que2);
	 $count2 = mysqli_num_rows($res2);

	  $que3="SELECT * FROM `student` WHERE `cmpny_id`='".$cmpny_id."' and attended_status='0'";
	 $res3=mysqli_query($con,$que3);
	 $count3 = mysqli_num_rows($res3);


?>]
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css'>

      <link rel="stylesheet" href="css/styles.css">

  
</head>

<body>

  <section>
	<header>
		<nav class="rad-navigation">
			<div class="rad-logo-container rad-nav-min">
				<!--<a href="#" class="rad-logo"><i class=" fa fa-recycle"></i> Radar</a>
				<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>-->
			</div>
			<a href="#" class="rad-logo-hidden">Placement Drive Attendance</a>

		</nav>
	</header>
</section>
<main>
	<br><br>
	<section>
		<!-- <header style="background: #345"><br>
		<h1 style="color: #fff" class="text-center">Placement Drive Attendance</h1><br>
	</header><br> -->
	<div class="container-fluid">
		<br>
		<div class="col-md-6 table-bordered  well" style="background: #f5f5f5">
			<div class="col-md-12"><br><br><br>
				<center>
					<i class="fa fa-user text-primary" style="font-size: 100px;border: 1px solid #aaa;padding: 30px;margin: 10px;border-radius: 50%"></i>
				</center><br>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>Name</th>
							<td>:</td>
							<td><?php if(@$count==1) { echo @$fetch['name']; } else{ echo "No Data Found"; } ?></td>
						</tr>

						<tr>
							<th>Roll Number</th>
							<td>:</td>
							<td><?php if(@$count==1) { echo @$fetch['rollno']; } else{ echo "No Data Found"; } ?></td>
						</tr>
						<tr>
							<th>College</th>
							<td>:</td>
							<td><?php if(@$count==1) { echo @$fetch['college']; } else{ echo "No Data Found"; } ?></td>
						</tr>
						<tr>
							<th>Branch</th>
							<td>:</td>
							<td><?php if(@$count==1) { echo @$fetch['branch']; } else{ echo "No Data Found"; } ?></td>
						</tr>

					</table>
				</div>
				<br><br><br>
			</div>
		</div>
		<div class="col-md-6" ><br>
			<form method="post" style="background: #f5f5f5;border: 1px solid #aaa;padding: 20px"> 
				<h3 class="text-primary text-center">Scan Your Id </h3>
				<br>
				<table class="table">
					<tr>
						<th>Roll Number</th>
						<td>:</td>
						<td>
							<input type="text" name="roll" class="form-control" autofocus>
						</td>
					</tr>
					<tr>
						<th colspan="3">
							<center><button class="btn btn-warning" name="Submit">Submit</button></center>
						</th>
					</tr>
				</table>
			</form>
			<br>
			<div class="col-md-12 well" style="background: #f5f5f5;border: 1px solid #aaa;padding: 20px">
				<div class="col-md-4 ">
					<h4>Total Students</h4>
					<p><?php echo $count1 ?></p>
				</div>
				<div class="col-md-4 ">
					<h4>Attended Students</h4>
					<p><?php echo $count2 ?></p>
				</div>
				<div class="col-md-4 ">
					<h4>Absented Students</h4>
					<p><?php echo $count3 ?></p>
				</div>
				<br><br><br>

			</div>
		</div>
	</div>
	</section>
</main>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
<script src='http://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.3/jquery.slimscroll.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.8.0/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.3/jquery-jvectormap.js'></script>
<script src='http://jvectormap.com/js/jquery-jvectormap-1.2.2.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
