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
					<h1 class="header">Add Admin</h1>
					<form action="add-admin-process.php" method="post">
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
										<strong>Name</strong> Please insert valid Student Name.
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
										<strong>UserName</strong> Please insert valid UserName.
										</div>
										<?php
											}
										?>	
										<h5 class="card-title header-text">Admin info</h5>
										
										<label>Name</label>
										<input type="text" name="firstName" class="form-control" value="<?php echo $_SESSION["firstName"] ?>" required placeholder="Full Name"/>
										<label>UserName</label>
										<input type="text" name="username" class="form-control" value="<?php echo $_SESSION["username"] ?>" required placeholder="User Name"/>
										<label>Password</label>
										<input type="password" name="password" class="form-control" value="<?php echo $_SESSION["Password"] ?>" placeholder="Your Password"/>
										<label>Admin Status</label><br>
										<input type="radio" name="adminStatus" value="1"<?php if($adminStatus==1) { ?> checked <?php } ?>>Active<br>
										<input type="radio" name="adminStatus" value="0"<?php if($adminStatus==0) { ?> checked <?php } ?>>Inactive <br>
										<input type="submit" value="Add Admin">
									</div>
								</div> 
							</div>				
							<div class="col-md-5">
								<div class="card">
									<div class="card-body body1">
										<h5 class="card-title header-text">Admin's Permissions</h5>
										<script language="JavaScript">
											function selectAll(source) {
												checkboxes = document.getElementsByName('permission[]');
												for(var i in checkboxes)
													checkboxes[i].checked = source.checked;
											}
										</script>
										<input type="checkbox" id="selectall" onClick="selectAll(this)" />SelectAll		
									</div>
								</div>		
								<div class="box-body">
									<div class="form-group">
										<?php
											$stmt = $conn->prepare("select * from tbl1permissions");
											$stmt->execute();
											while ($row = $stmt->fetch()) 
											{
												 $permissionId	    =   $row["permissionId"];
												 $permissionName	=   $row["permissionName"];
												?>
												<div class="checkbox">
													<label>
														<input type="checkbox" name="permission[]" class="sgrCheck" value="<?php echo $permissionId;?>" <?php if($row["isDefaultPermission"]==2) {echo "checked";}?> &nbsp;&nbsp;  /><?php echo strtoupper($permissionName)?>
													</label>
												</div>
												<?php
											}
										$stmt=null;
										$conn=null; ?>
									</div>
							    </div>
							</div>	
						</div>
					</form>	
				</div>	
				
											
											
											