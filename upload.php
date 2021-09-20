<?php

if(isset($_POST['submit'])){
	$file = $_FILES['file'];
	$familyName = $_POST['family'];
	

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('mp4', 'avi', 'mov', 'wmv', 'mpg','webm', 'jpg');

	if (in_array($fileActualExt, $allowed)) {

		if ($fileError === 0) {
			if ($fileSize < 524288000) {
				$fileNameNew = uniqid('',true)."-".$familyName.".".$fileActualExt;
				
			
				
				$fileDestination = 'christmasFiles/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: uploadSuccess.php");

			}
			else{
				echo "Sorry,your file is too big! ";
			}
			
		}else{
			echo $fileError;
		}


	}else{
		echo "only the following file types are allowed" .$allowed;

	}

	}



  ?>