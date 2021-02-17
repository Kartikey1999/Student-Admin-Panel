
<?php
session_start();

include "databaseConnect.php";
 
  $permissionName			=		trim($_REQUEST["permissionName"]);
  $permissionId				=		trim($_REQUEST["permissionId"]);

 

	$stmt = $conn->prepare("select * from tbl1permissions where permissionName=:permissionName");
	$stmt->bindParam(':permissionName',$permissionName);
	$stmt->execute();
	$count=$stmt->rowCount();
	if($count>0)
	{
		header("location:add-permissions.php?err=2");
		exit;
	}
	
	if(strlen($permissionName)<=1 || empty($permissionName) || $permissionName=="")
	{
		header("location:add-permissions.php?err=1");
		exit;
	}
	
	
	
		date_default_timezone_set('Asia/Kolkata');
		$dateTime= date('y-m-d H:i:s');
		
		$ipAddress=$_SERVER['SERVER_ADDR'];
	
		$sql = $conn->prepare("update tbl1permissions set permissionName=:permissionName,updatedIpAddress=:updatedIpAddress,updatedDateTime=:updatedDateTime where permissionId=:permissionId");
		$sql->bindParam(':permissionId',$permissionId);
		$sql->bindParam(':permissionName',$permissionName);
		$sql->bindParam(':updatedIpAddress', $ipAddress);
		$sql->bindParam(':updatedDateTime', $dateTime);
		$sql->execute();
		$conn = null;
	
		header("location:permissions.php?msg=1");
	?>