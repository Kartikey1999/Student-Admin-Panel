<?php
include "includes/top-most.php"; 
include "databaseConnect.php";
?>
<title>
Split page
</title>
<?php
include "includes/side-bar.php";
$adminId		=trim($_REQUEST["adminId"]);
$stmt = $conn->prepare("select * from tbl1admin where adminId=:adminId");
$stmt->bindParam(':adminId', $adminId);
$stmt->execute();
$row = $stmt->fetch();

$firstName			=	    $row["adminName"];
$username           =	    $row["adminUsername"];
$password			=		$row["adminPassword"];
$adminStatus		=		$row["adminStatus"];
$stmt = null;
$conn = null;
?>          
<div class="col-md-10 col-sm-10 dynamic-part">
	<h1 class="header">Add Admin</h1>
	<form action="edit-admin-process.php" method="post">
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
						<input type="text" name="firstName" class="form-control" value="<?php echo $adminName; ?>" required placeholder="Full Name"/>
						<input type="hidden" name="adminId" class="form-control" value="<?php echo $adminId; ?>" required placeholder="Full Name"/>
						<label>UserName</label>
						<input type="text" name="username" class="form-control" value="<?php echo $adminUsername;  ?>" required placeholder="User Name"/>
						<label>Password</label>
						<input type="password" name="password" class="form-control" value="<?php echo $adminPassword ?>"  placeholder="Your Password"/>
						<label>Admin Status</label><br>
						<input type="radio" name="adminStatus" value="1"<?php if($adminStatus==1) { ?> checked <?php } ?> >Active <br>
						<input type="radio" name="adminStatus" value="0"<?php if($adminStatus==0) { ?> checked <?php } ?> >Inactive <br>
						<input type="submit" value="Update Admin">
					</div>
				</div> 
			</div>	

