<?php
include "databaseConnect.php";
include "includes/top-most.php"; 
?>
<title>
Split page
</title>
<?php
include "includes/side-bar.php";
?>

				<div class="col-md-10 col-sm-10 dynamic-part">
					<h1 class="header">All Admins</h1>
					<button type="button" class="btn btn-primary"><a class="Anchor" href="add-admin.php">+Add Admin</a></button>
					<div class="row row1 main-body">
						<?php
							if($_REQUEST["msg"]==2)
							{
						?>
						<div class="alert alert-secondary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Deleted!</strong> Admin has been Deleted successfully.
						</div>
						<?php
							}
						?>
						<?php
							if($_REQUEST["msg"]==3)
							{
						?>
						<div class="alert alert-dark alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Added!</strong> Admin has been Added successfully.
						</div>
						<?php
							}
						?>
						<?php
							if($_REQUEST["msg"]==1)
							{
						?>
						<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Updated!</strong> Admin has been Updated successfully.
						</div>
						<?php
							}
						?>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">AdminId</th>
										<th scope="col">Admin Name</th>
										<th scope="col">Admin UserName</th>
										<th scope="col">Admin Password</th>
										<th scope="col">Admin Status</th>								
										<th scope="col">Edit/Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$stmt = $conn->prepare("select * from tbl1admin order by adminId desc");
										$stmt->execute();
										while ($row = $stmt->fetch()) 
										{
									?>
											<tr>
												<th scope="row"><?php  echo $row['adminId']; ?></th>
												<td><?php  echo htmlspecialchars ($row['adminName']); ?></td>
												<td><?php  echo htmlspecialchars ($row['adminUsername']); ?></td>
												<td><?php  echo $row['adminPassword']; ?></td>	
												<td>
													<?php   
														if($row['adminStatus']==1)
														{
															echo Active;
															
														}
														else
														{
															//$adminStatus="<span style=\"colour:red\"><b>Inactive</b></span>";
															echo Inactive;
														}
													?>
												</td>
												<td><a href="delete-admin.php?adminId=<?php  echo $row['adminId']; ?>">Delete </a>/<a href="edit-admin.php?adminId=<?php  echo $row['adminId']; ?>">Edit </a></td>
											</tr>
									<?php
										}
										
									?>
								</tbody>
							</table>
						</div>
						<?php
						//echo $row = $stmt->rowCount();
						//?>
					</div>
				</div>	
			
		<?php
		include "includes/footer.php";
		?>	
			