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
					<h1 class="header">All Students</h1>
					<button type="button" class="btn btn-primary"><a class="Anchor" href="add-student.php">+Add student</a></button>
					
					<div class="row row1 main-body">
						<?php
							if($_REQUEST["msg"]==2)
							{
						?>
						<div class="alert alert-secondary alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Deleted!</strong> Student has been Deleted successfully.
						</div>
						<?php
							}
						?>
						<?php
							if($_REQUEST["msg"]==1)
							{
						?>
						<div class="alert alert-dark alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Added!</strong> Student has been Added successfully.
						</div>
						<?php
							}
						?>
						<?php
							if($_REQUEST["msg"]==3)
							{
						?>
						<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Updated!</strong> Student has been Updated successfully.
						</div>
						<?php
							}
						?>
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">StudentId</th>
										<th scope="col">Image</th>
										<th scope="col">First Name</th>
										<th scope="col">DOB</th>
										<th scope="col">Student No.</th>
										<th scope="col">Gender</th>
										<th scope="col">Email</th>
										<th scope="col">Password</th>
										<th scope="col">Father Name</th>
										<th scope="col">Mother Name</th>
										<th scope="col">Father No.</th>
										<th scope="col">Mother No.</th>
										<th scope="col">Email-ID</th>
										<th scope="col">Address</th>
										<th scope="col">Class</th>
									
										<th scope="col">Edit/Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$stmt = $conn->prepare("select * from tbl1student order by studentId desc");
										$stmt->execute();
										while ($row = $stmt->fetch()) 
										{
									?>
											<tr>
												<th scope="row"><?php  echo $row['studentId']; ?></th>
												<td>
													
													<?php 
													if ($row['imagePath']==NULL)
													{
														
														if ($row['studentGender']==0)
														{
															?>
															<img style="width:100%" src="upload/male.png" />
															<?php
														}
														else
														{
															?>
															<img style="width:100%" src="upload/female.png" />
															<?php
														}												
													}
													else
													{
														?>
														<img style="width:100%" src="upload/<?php echo $row['imagePath']; ?>" />
														<?php
													}
													?>
												</td>
												<td><?php  echo htmlspecialchars ($row['firstName']); ?></td>
												<td><?php  echo $row['studentDOB']; ?></td>
												<td><?php  echo $row['studentPhone']; ?></td>	
												
												<td>
													<?php   
														if($row['studentGender']==0)
														{
															echo "Male";
														}
														else
														{
															echo "Female";
														}
													?>
												</td>
												<td><?php  echo $row['studentEmail']; ?></td>
												<td><?php  echo $row['studentPassword']; ?></td>
												<td><?php  echo htmlspecialchars ($row['father']); ?></td>
												<td><?php  echo htmlspecialchars($row['mother']); ?></td>
												<td><?php  echo $row['fNumber']; ?></td>
												<td><?php  echo $row['mNumber']; ?></td>
												<td><?php  echo $row['parentsEmail']; ?></td>
												<td><?php  echo $row['houseAddress']; ?></td>
												<td><?php  echo $row['classId']; ?></td>
												
												<td><a href="delete.php?studentId=<?php  echo $row['studentId']; ?>">Delete </a>/<a href="edit-student.php?studentId=<?php  echo $row['studentId']; ?>">Edit </a></td>
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
			