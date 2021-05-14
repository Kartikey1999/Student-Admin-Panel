<?php
include "includes/top-most.php"; 
?>
<title>
Split page
</title>
<?php
include "includes/side-bar.php";
?>
       
				<div class="col-md-10 col-sm-10 dynamic-part">
					<h1 class="header">Add Query</h1>
					<form action="add-queries-process.php" method="post">
						<div class="row row1 main-body">
							<div class="col-md-10">
								<div class="card">
									<div class="card-body body1">
										<?php
											if($_REQUEST["err"]==1)
											{
										?>		
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Student Name</strong> Please insert valid Student Name.
										</div>
										<?php
											}
										?>
										<?php	
											if($_REQUEST["err"]==2)
											{
										?>		
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Date</strong> Please insert valid Date.
										</div>
										<?php
											}
										?>	
											
										<h5 class="card-title header-text">Query info</h5>
										<label>Select Query</label>
										<select type="queryId" name="queryId" class="form-control" value="<?php echo $_SESSION["queryId"] ?>">
											<option value="-1">--Select Query--</option>
											<option <?php if($_SESSION["queryId"]==1) { ?> selected <?php } ?> value="1">Btech</option>
											<option <?php if($_SESSION["queryId"]==2) { ?> selected <?php } ?> value="2">Mca</option>
											<option <?php if($_SESSION["queryId"]==3) { ?> selected <?php } ?> value="3">10th</option>
											<option <?php if($_SESSION["queryId"]==4) { ?> selected <?php } ?> value="4">9th</option>
											<option <?php if($_SESSION["queryId"]==5) { ?> selected <?php } ?> value="5">8th</option>
										</select>
										<label>Student Name</label>
										<input type="text" name="firstName" class="form-control" value="<?php echo $_SESSION["firstName"] ?>" required placeholder="Full Name"/>
										<label>Enroll Date</label>
										<input type="date" name="enrollDate" class="form-control" value="<?php echo $_SESSION["enrollDate"] ?>" placeholder="Enter Enroll Date"/>
										<label>Courses</label>
										<input type="text" name="course" class="form-control" value="<?php echo $_SESSION["course"] ?>" placeholder="write your Course"/>
										<input type="submit" value="Submit">
									</div>
								</div> 
							</div>	
		
			