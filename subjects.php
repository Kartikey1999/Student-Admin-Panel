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
					<button type="button" class="btn btn-primary"><a class="Anchor" href="add-subject.php">+Add Subjects</a></button>
					<div class="row row1 main-body">
						<?php
							if($_REQUEST["msg"]==2)
							{
						?>
						<div class="alert alert-secondary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Deleted!</strong> Subject has been Deleted successfully.
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
						<strong>Added!</strong> Subject has been Added successfully.
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
						<strong>Updated!</strong> Subject has been Updated successfully.
						</div>
						<?php
							}
						?>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Subject Id</th>								
										<th scope="col">Subject Name</th>								
										<th scope="col">Edit/Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$stmt = $conn->prepare("select * from tbl1subjects order by subjectId desc");
										$stmt->execute();
										while ($row = $stmt->fetch()) 
										{
									?>
											<tr>
												<th scope="row"><?php  echo $row['subjectId']; ?></th>
												
													<td><?php  echo $row['subjectName']; ?></td>
												
												<td><a href="delete-subject.php?subjectId=<?php  echo $row['subjectId']; ?>">Delete </a>/<a href="edit-subject.php?subjectId=<?php  echo $row['subjectId']; ?>">Edit </a></td>
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
			