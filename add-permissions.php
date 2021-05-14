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
					<h1 class="header">Add Permissions</h1>
					<form action="add-permissions-process.php" method="post">
					<form action="add-admin.php" method="post">
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
										<strong>Name</strong> Please insert valid Name.
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
										<strong>Error</strong>Name already exits.
										</div>
										<?php
											}
										?>
										<h5 class="card-title header-text">Permission info</h5>
										<label>Permission Name</label>
										<input type="text" name="permissionName" class="form-control" value="<?php echo $_SESSION["permissionName"] ?>" required placeholder="Full Name"/> <br>
										<input type="submit" value="Submit">
									</div>
								</div> 
							</div>	

