<?php
include "includes/top-most.php"; 
//include('includes/header.php'); 
//include('includes/navbar.php'); 
?>
<title>
Split page
</title>
<?php
include "includes/side-bar.php";
?>
           
				<div class="col-md-10 col-sm-10 dynamic-part">
					<h1 class="header">Student/Parents Registration</h1>
					<form action="add-student-process.php" method="post">
						<div class="row row1 main-body">
							<div class="col-md-5">
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
										<?php
											if($_REQUEST["err"]==3)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Student Phone No.</strong> Please insert valid Student Phone No..
										</div>
										<?php
											}
										?>	
										<?php
											if($_REQUEST["err"]==4)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Student Class</strong> Please insert valid Student Class.
										</div>
										<?php
											}
										?>		
										<?php	
											if($_REQUEST["err"]==5)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Student Gender</strong> Please insert valid Student Gender.
										</div>
										<?php
											}
										?>		
										<?php	
											if($_REQUEST["err"]==6)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Student Email</strong> Please insert valid Student Email-Id.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==7)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Password</strong> Please insert valid Password.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==8)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Father's Name</strong> Please insert valid Father's Name.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==9)
											{
										?>		
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Mother's Name</strong> Please insert valid Mother's Name.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==10)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Father Phone No.</strong> Please insert valid Father Phone No.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==11)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Mother Phone No.</strong> Please insert valid Mother Phone No.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==12)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Parents Email</strong> Please insert valid Parents Email.
										</div>
										<?php
											}
										?>	
										<?php	
											if($_REQUEST["err"]==13)
											{
										?>
										<div class="alert alert-secondary alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>House Address</strong> Please insert valid House Address.
										</div>
										<?php
											}
										?>	
										
										<h5 class="card-title header-text">Student info</h5>
										<label>Student Full Name</label>
										<input type="text" name="firstName" class="form-control" value="<?php echo $_SESSION["firstName"] ?>" required placeholder="Full Name"/>
										<label>Select date</label>
										<input  name="date" id="date" class="form-control" placeholder="Click to Selct date" value="<?php echo $_SESSION["date"] ?>">
										<label>Phone Number</label>
										<input type="number" name="phoneNumber" class="form-control" value="<?php echo $_SESSION["phoneNumber"] ?>" placeholder="10 Digit Number"/>
										<label>Select Class</label>
										<select type="classId" name="classId" class="form-control" value="<?php echo $_SESSION["classId"] ?>">
											<option value="-1">--Select Class--</option>
											<option <?php if($_SESSION["classId"]==0) { ?> selected <?php } ?> value="0">12th</option>
											<option <?php if($_SESSION["classId"]==1) { ?> selected <?php } ?> value="1">11th</option>
											<option <?php if($_SESSION["classId"]==2) { ?> selected <?php } ?> value="2">10th</option>
											<option <?php if($_SESSION["classId"]==3) { ?> selected <?php } ?> value="3">9th</option>
											<option <?php if($_SESSION["classId"]==4) { ?> selected <?php } ?> value="4">8th</option>
										</select>
										<label>Select Session</label>
										<select type="gender" name="gender" class="form-control" value="<?php echo $studentGender?>" placeholder="Select Gender">
											<option value="-1">--Select Gender--</option>
											<option <?php if($_SESSION["gender"]==0){ ?> selected <?php } ?> value="0"> Male </option>
											<option <?php if($_SESSION["gender"]==1){ ?> selected <?php } ?> value="1"> Female </option>
										</select>
										<label>Email-Id</label>
										<input type="email" name="email" class="form-control" value="<?php echo $_SESSION["email"] ?>"placeholder="Student E-mail Id"/>
										<label>Password</label>
										<input type="password" name="password" class="form-control" value="<?php echo $_SESSION["password"] ?>" placeholder="Your Password"/>
									</div>
								</div> 
							</div>	
							<div class="col-md-5">
								<div class="card">
									<div class="card-body body1">
										<h5 class="card-title header-text">Parents Details</h5>
										<label>Father's Name</label>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="inputGroup-sizing-default">Mr.</span>
											</div>
											<input type="text" name="fatherName" class="form-control" value="<?php echo $_SESSION["fatherName"] ?>"  placeholder="Father's Name" aria-label="Default" aria-describedby="inputGroup-sizing-default">
										</div>
										<label>Mother's Name</label>
										<div class="input-group mb-3">
										  <div class="input-group-prepend">
											<span class="input-group-text" id="inputGroup-sizing-default">Mrs.</span>
										  </div>
										  <input type="text" name="motherName" class="form-control" value="<?php echo $_SESSION["motherName"] ?>"  placeholder="Mother's Name " aria-label="Default" aria-describedby="inputGroup-sizing-default">
										</div>
										<label>Father's Phone Number</label>
										<input type="number" name="fatherNumber" class="form-control" value="<?php echo $_SESSION["fatherNumber"] ?>" placeholder="10 Digit Number"/>
										<label>Mother's Phone Number</label>
										<input type="number" name="motherNumber" class="form-control" value="<?php echo $_SESSION["motherNumber"] ?>" placeholder="10 Digit Number"/>
										<label>Email-Id</label>
										<input type="email" name="email1" class="form-control" value="<?php echo $_SESSION["email1"] ?>" placeholder="Parents E-mail Id"/>
										<label>Address</label>
										<input type="Address" name="address" class="form-control" value="<?php echo $_SESSION["address"] ?>" placeholder="Your Address" style="height:115px"/><br>
										<input type="submit" value="Submit">
									</div>
								</div>
							</div>
						</div>
					</form>	
				</div>	
		
		<?php
		include "includes/footer.php";
		?>	
			