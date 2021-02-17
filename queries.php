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
					<h1 class="header">All Queries</h1>
					<button type="button" class="btn btn-primary"><a class="Anchor" href="add-queries.php">+Add Query</a></button>
					<div class="row row1 main-body">
						<?php
							if($_REQUEST["msg"]==2)
							{
						?>
						<div class="alert alert-secondary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Deleted!</strong> Query has been Deleted successfully.
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
						<strong>Added!</strong> Query has been Added successfully.
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
						<strong>Updated!</strong> Query has been Updated successfully.
						</div>
						<?php
							}
						?>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">QueryId</th>
										<th scope="col">Student Name</th>
										<th scope="col">Enroll Date</th>
										<th scope="col">Courses</th>	
										<th scope="col">Edit/Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$stmt = $conn->prepare("select * from tbl1queries order by queryId desc");
										$stmt->execute();
										while ($row = $stmt->fetch()) 
										{
									?>
											<tr>
												<th scope="row"><?php  echo $row['queryId']; ?></th>
												<td><?php  echo htmlspecialchars ($row['firstName']); ?></td>
												<td><?php  echo $row['enrollDate']; ?></td>	
												<td><?php  echo $row['course']; ?></td>		
												<td><a href="delete-query.php?queryId=<?php  echo $row['queryId']; ?>">Delete </a>/<a href="edit-queries.php?queryId=<?php  echo $row['queryId']; ?>">Edit </a></td>
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
			