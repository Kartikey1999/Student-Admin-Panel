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
					<h1 class="header">All Permission</h1>
					<button type="button" class="btn btn-primary"><a class="Anchor" href="add-permissions.php">+Add Permissions</a></button><br><br>
					
					<div class="row row1 main-body">
						<?php
							if($_REQUEST["msg"]==2)
							{
						?>
						<div class="alert alert-secondary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Deleted!</strong> Permission has been Deleted successfully.
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
						<strong>Added!</strong> Permission has been Added successfully.
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
						<strong>Updated!</strong> Permission has been Updated successfully.
						</div>
						<?php
							}
						?>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Permission Id</th>
										<th scope="col">Permission Name</th>
										<th scope="col">Edit/Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$stmt = $conn->prepare("select * from tbl1permissions order by permissionId desc");
										$stmt->execute();
										while ($row = $stmt->fetch()) 
										{
									?>
											<tr>
												<th scope="row"><?php  echo $row['permissionId']; ?></th>
												<td><?php  echo htmlspecialchars ($row['permissionName']); ?></td>
												<td><a href="delete-permissions.php?permissionId=<?php  echo $row['permissionId']; ?>">Delete </a>/<a href="edit-permissions.php?permissionId=<?php  echo $row['permissionId']; ?>">Edit </a></td>
											</tr>
									<?php
										}
										
									?>
								</tbody>
							</table>
						</div>
						<?php
							//echo $row = $stmt->rowCount();
						?>
					</div>
				</div>	
			
		<?php
		include "includes/footer.php";
		?>	
			