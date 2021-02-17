
<?php
//date_default_timezone_set('Asia/Kolkata');
		//echo $dateTime= date('d-m-Y H:i');
		//echo $_SERVER["REMOTE_ADDR"];
		
session_start();

include "databaseConnect.php";
 $subjectId		=		trim($_REQUEST["subjectId"]);
 $subjectName		=		trim($_REQUEST["subjectName"]);
 
 //echo print_r($permission); exit;
 
 

 
$_SESSION["subjectId"]		=		$subjectId;
$_SESSION["subjectName"]		=		$subjectName;


//$_SESSION["adminPassword"]	=	    $adminPassword;



	
	if(strlen($subjectName)<=1 || empty($subjectName) || $subjectName=="")
	{
		header("location:add-subject.php?err=1");
		exit;
	}
		

		$sql = $conn->prepare("insert into tbl1subjects(subjectName) VALUES (:subjectName)");
	
		//$sql->bindParam(':adminId',$adminId);
		$sql->bindParam(':subjectName',$subjectName);
		
		$sql->execute();
		
		
		$conn = null;
		
		//unset($_SESSION["adminId"]);
		//$_SESSION["adminPassword"]="";		
		header("location:subjects.php?msg=3");
		exit;
	?>