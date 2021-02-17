<?php
include "databaseConnect.php";

$id=$_REQUEST["id"]; 
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$tempFile=$_FILES["fileToUpload"]["tmp_name"];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
echo $imgName=$id.".".$imageFileType;
$target_file=$target_dir .$imgName;

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
	exit;
   
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	exit;
}
move_uploaded_file($tempFile,$target_file);


$sql = $conn->prepare("update tbl1student set imagePath=:imagePath where studentId=:studentId");
$sql->bindParam(':imagePath',$imgName);
$sql->bindParam(':studentId',$id);
header("location:students.php");
$sql->execute();

?>