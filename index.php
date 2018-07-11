<?php 
include 'config.php';
?>
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


	<header>
		<nav class="rad-navigation">
			<div class="rad-logo-container rad-nav-min">
				<!--<a href="#" class="rad-logo"><i class=" fa fa-recycle"></i> Placement Drive Attendance</a>-->
				<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
			</div>
			<a href="#" class="rad-logo-hidden">Placement Drive Attendance</a>

		</nav>
	</header>
</section>
<main>
	<section>
		
		<div class="rad-body-wrapper rad-nav-min">
			<div class="row">
				<div class="container-fluid">
					<header class="rad-page-title">
						<span>Dashboard</span>
					</header>

					<div class="row rad-info-box" style="margin: 0;padding: 0"><br>
						<?php
						//date_default_timezone_set('Asia/kolkata');
						//date_default_timezone_get();
						$d=date("Y-m-d");
						
						$query="SELECT * FROM `company_list` where date>='$d'"; 
						$result=mysqli_query($con,$query);
						while($fetch=mysqli_fetch_array($result)){
							$sql="select * from student where cmpny_id='".$fetch['id']."'";
							$res=mysqli_query($con,$sql);
							$count= mysqli_num_rows($res);   
							?>
							<a href="Attendance.php?id=<?php echo ($fetch['id']) ?>">

								<div class="col-md-4 col-xs-12"><br>
									<div class="col-md-12">
										<h3 class="text-center rad-txt-primary"><?php echo $fetch['name'] ?></h3><br>
										<div class="col-md-4" style="box-shadow: none !important;">
											<h4 class="text-center">
												<a href="elgble_stu_list.php?id=<?php echo $fetch['id'];?>"><span  style="font-size:25px;color:red" title="Eligible Students"> <?php echo $count ?></span>
												</a>
											</h4>
										</div>
									</div>
								</div>
							</a>
						<?php }?>
					</div>
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
