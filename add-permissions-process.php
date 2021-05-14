
<?php
//date_default_timezone_set('Asia/Kolkata');
		//echo $dateTime= date('d-m-Y H:i');
		//echo $_SERVER["REMOTE_ADDR"];
//exit;
session_start();

include "databaseConnect.php";
	$permissionName	=		trim($_REQUEST["permissionName"]);
 
	$_SESSION["permissionName"]			=		$permissionName;

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

		$sql = $conn->prepare("insert into tbl1permissions(permissionName,addedIpAddress,addedDateTime) VALUES (:permissionName,:addedIpAddress,:addedDateTime)");
		//$sql->bindParam(':permissionId',$permissionId);
		$sql->bindParam(':permissionName',$permissionName);
		$sql->bindParam(':addedIpAddress', $ipAddress);
		$sql->bindParam(':addedDateTime', $dateTime);
		$sql->execute();
		$conn = null;
		$_SESSION["permissionName"]="";		
		header("location:permissions.php?msg=3");
	?>