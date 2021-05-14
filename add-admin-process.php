
<?php
//date_default_timezone_set('Asia/Kolkata');
		//echo $dateTime= date('d-m-Y H:i');
		//echo $_SERVER["REMOTE_ADDR"];
		
session_start();

include "databaseConnect.php";
 $adminId		=		trim($_REQUEST["adminId"]);
 $firstName		=		trim($_REQUEST["firstName"]);
 $username	    =	    trim($_REQUEST["username"]);
 $password	    =	    trim($_REQUEST["password"]);
 $adminStatus	=	    trim($_REQUEST["adminStatus"]);
 $permission	=		($_REQUEST["permission"]); 
 //echo print_r($permission); exit;
 
 

 
$_SESSION["adminId"]		=		$adminId;
$_SESSION["firstName"]		=		$firstName;
$_SESSION["username"]		=		$username;
$_SESSION["adminStatus"]	=		$adminStatus;

//$_SESSION["adminPassword"]	=	    $adminPassword;



	
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

		$sql = $conn->prepare("insert into tbl1admin(adminName,adminUsername,editDateTime,adminPassword,adminStatus) VALUES (:adminName,:adminUsername,:editDateTime,:adminPassword,:adminStatus)");
	
		//$sql->bindParam(':adminId',$adminId);
		$sql->bindParam(':adminName',$firstName);
		$sql->bindParam(':adminUsername', $username);
		$sql->bindParam(':editDateTime', $dateTime);
		$sql->bindParam(':adminPassword', $password);
		$sql->bindParam(':adminStatus', $adminStatus);
		$sql->execute();
		
		$adminId=$conn->lastInsertId();
		$sql = $conn->prepare("insert into tbl1adminpermission(adminId,permissionId) VALUES (:adminId,:permissionId)");
		$sql->bindParam(":adminId",$adminId);
		foreach($permissionId as $perId)
		{
			$sql->bindParam(":permissionId",$perId);
			$sql->execute();
		}
		
		$stmt = null;
		$conn = null;
		
		//unset($_SESSION["adminId"]);
		//$_SESSION["adminPassword"]="";		
		header("location:admins.php?msg=3");
		exit;
	?>