
<?php
include "databaseConnect.php";


 $adminId		=		trim($_REQUEST["adminId"]);
 $firstName		=		trim($_REQUEST["firstName"]);
 $username	    =	    trim($_REQUEST["username"]);
 $password	    =	    trim($_REQUEST["password"]);
 $adminStatus	=	    trim($_REQUEST["adminStatus"]);




	if(strlen($firstName)<=1 || empty($firstName) || $firstName=="")
	{
		header("location:add-admin.php?err=1");
		exit;
	}
	if(strlen($username)<=1 || empty($username) || $username=="")
	{
		header("location:add-admin.php?err=2");
		exit;
	}
	
		
		date_default_timezone_set('Asia/Kolkata');
		$dateTime= date('y-m-d H:i:s');
		

	$sql = $conn->prepare("update tbl1admin set adminName=:adminName,adminUsername=:adminUsername,editDateTime=:editDateTime,adminPassword=:adminPassword,adminStatus=:adminStatus where adminId=:adminId");
		$sql->bindParam(':adminId',$adminId);
		$sql->bindParam(':adminName',$firstName);
		$sql->bindParam(':adminUsername', $username);
		$sql->bindParam(':editDateTime', $dateTime);
		$sql->bindParam(':adminPassword', $password);
		$sql->bindParam(':adminStatus', $adminStatus);
		$sql->execute();
		$conn = null;
	
		header("location:admins.php?msg=1");
	?>