
<?php
session_start();
include "databaseConnect.php";


 $subjectId			=		trim($_REQUEST["subjectId"]);
 $subjectName		=		trim($_REQUEST["subjectName"]);
 




	if(strlen($subjectName)<=1 || empty($subjectName) || $subjectName=="")
	{
		header("location:add-subject.php?err=1");
		exit;
	}
	
	
		
		
		

	$sql = $conn->prepare("update tbl1subjects set subjectName=:subjectName where subjectId=:subjectId");
		$sql->bindParam(':subjectId',$subjectId);
		$sql->bindParam(':subjectName',$subjectName);
		
		$sql->execute();
		$conn = null;
	
		header("location:subjects.php?msg=1");
	?>