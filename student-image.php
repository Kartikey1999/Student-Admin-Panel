
<!DOCTYPE html>
<html>
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="text" value="<?php echo $_REQUEST["id"];?>"  name="id">
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	</body>
</html>
