<?php
include "includes/top-most.php"; 
include "databaseConnect.php";
?>
<title>
Split page
</title>
<?php
include "includes/side-bar.php";
?>
      
				<div class="col-md-10 col-sm-10 dynamic-part">
					<h1 class="header">Add Subject</h1>
					<form action="add-subjects-process.php" method="post">
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
										<strong>Subject Name</strong> Please insert valid Subject Name.
										</div>
										<?php
											}
										?>
										
										<h5 class="card-title header-text">Subject info</h5>
										
										
										<label>Subject Name</label><br>
										<input type="text" name="subjectName" class="form-control" value="<?php echo $_SESSION["subjectName"] ?>" placeholder="Subject name"/>
										<br>
										<input type="submit" value="Add Subject">
									</div>
								</div> 
							</div>				
		
						</div>
					</form>	
				</div>	
				
											
											
											