<?php
include "databaseConnect.php";

 $studentId	     =	    trim($_REQUEST["studentId"]); 
 $firstName	     =		trim($_REQUEST["firstName"]);
 $date		     =		trim($_REQUEST["date"]);
 $phoneNumber    =		trim($_REQUEST["phoneNumber"]);
 $classId	     =  	trim($_REQUEST["classId"]);
 $gender	     =		trim($_REQUEST["gender"]);
 $email		     =		trim($_REQUEST["email"]);
 $password	     =		trim($_REQUEST["password"]);
 $fatherName     =		trim($_REQUEST["fatherName"]);
 $motherName     =		trim($_REQUEST["motherName"]);
 $fatherNumber   =		trim($_REQUEST["fatherNumber"]);
 $motherNumber   =		trim($_REQUEST["motherNumber"]);
 $email1	     =		trim($_REQUEST["email1"]);
 $address	     =		trim($_REQUEST["address"]);
 $classId	     =		trim($_REQUEST["classId"]);
 
	 
	if(strlen($firstName)<=1 || empty($firstName) || $firstName=="")
	{
		header("location:edit-student.php?err=1&studentId=$studentId");
		exit;
	}
	if($date=="")
	{
		header("location:edit-student.php?err=2&studentId=$studentId");
		exit;
	}

	if(!is_numeric($phoneNumber))
	{
		header("location:edit-student.php?err=3&studentId=$studentId");
		exit;
	}

	if(strlen($phoneNumber)!=10) 
	{
		header("location:edit-student.php?err=3&studentId=$studentId");
		exit;
	}
	if($classId== -1)
	{
		header("location:edit-student.php?err=4&studentId=$studentId");
		exit;
	}
	if($gender== -1)
	{
		header("location:edit-student.php?err=5&studentId=$studentId");
		exit;
	}
	if($email== "")
	{
		header("location:edit-student.php?err=6&studentId=$studentId");
		exit;
	}
	if($password== "")
	{
		header("location:edit-student.php?err=7&studentId=$studentId");
		exit;
	}
	if(strlen($fatherName)<=1 || empty($fatherName) || $fatherName=="")
	{
		header("location:edit-student.php?err=8&studentId=$studentId");
		exit;
	}
	if(strlen($motherName)<=1 || empty($motherName) || $motherName=="")
	{
		header("location:edit-student.php?err=9&studentId=$studentId");
		exit;
	}
	if(!is_numeric($fatherNumber))
	{
		header("location:edit-student.php?err=311&studentId=$studentId");
		exit;
	}
	if(strlen($fatherNumber)!=10) 
	{
		header("location:edit-student.php?err=10&studentId=$studentId");
		exit;
	}
	if(!is_numeric($motherNumber))
	{
		header("location:edit-student.php?err=311&studentId=$studentId");
		exit;
	}
	if(strlen($motherNumber)!=10) 
	{
		header("location:edit-student.php?err=11&studentId=$studentId");
		exit;
	}
	if($email1== "")
	{
		header("location:edit-student.php?err=12&studentId=$studentId");
		exit;
	}
	if($address== "")
	{
		header("location:edit-student.php?err=13&studentId=$studentId");
		exit;
	}
	
	$date= date('y-m-d H:i:s');
	$sql = $conn->prepare("update tbl1student set firstName=:firstName,studentDOB=:studentDOB,studentPhone=:studentPhone,studentGender=:studentGender,studentEmail=:studentEmail,studentPassword=:studentPassword,father=:father,mother=:mother,fNumber=:fNumber,mNumber=:mNumber,parentsEmail=:parentsEmail,houseAddress=:houseAddress,classId=:classId  where studentId=:studentId");
	
		$sql->bindParam(':studentId',$studentId);
		$sql->bindParam(':firstName',$firstName);
		$sql->bindParam(':studentDOB', $date);
		$sql->bindParam(':studentPhone', $phoneNumber);
		$sql->bindParam(':studentGender', $gender);
		$sql->bindParam(':studentEmail', $email);
		$sql->bindParam(':studentPassword', $password);
		$sql->bindParam(':father', $fatherName);
		$sql->bindParam(':mother', $motherName);
		$sql->bindParam(':fNumber', $fatherNumber);
		$sql->bindParam(':mNumber', $motherNumber);
		$sql->bindParam(':parentsEmail', $email1);
		$sql->bindParam(':houseAddress', $address);
		$sql->bindParam(':classId', $classId);
		$sql->execute();
		$conn = null;
		
		header("location:students.php?msg=3");
	?>