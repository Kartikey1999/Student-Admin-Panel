<?php
include "includes/top-most.php"; 
include "databaseConnect.php";
?>
<title>
Split page
</title>
<?php
include "includes/side-bar.php";
$subjectId		=trim($_REQUEST["subjectId"]);
$stmt = $conn->prepare("select * from tbl1subjects where subjectId=:subjectId");
$stmt->bindParam(':subjectId', $subjectId);
$stmt->execute();
$row = $stmt->fetch();

$subjectName			=	    $row["subjectName"];

$stmt = null;
$conn = null;
?>          
				<div class="col-md-10 col-sm-10 dynamic-part">
					<h1 class="header">Add Subject</h1>
					<form action="edit-subject-process.php" method="post">
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
										<input type="hidden" name="subjectId" class="form-control" value="<?php echo $subjectId; ?>" required placeholder="Subject Name"/>
										<br>
										<input type="submit" value="Update Subject">
									</div>
								</div> 
							</div>				
		
						</div>
					</form>	
				</div>	
						
						