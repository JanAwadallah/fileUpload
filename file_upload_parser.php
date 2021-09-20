 <?php

$fileName = $_FILES["file1"]["name"]; // The file name
$familyName = $_POST["family"];
$fileNameNew = $familyName."-".$fileName;
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "christmasFiles/$fileNameNew")){
    echo "$fileNameNew upload is complete";
} else {
    echo "move_uploaded_file function failed";
}



// if(isset($_POST['submit'])){
// 	$file = $_FILES['file'];
// 	$familyName = $_POST['family'];
	

// 	$fileName = $file['name'];
// 	$fileTmpName = $file['tmp_name'];
// 	$fileSize = $file['size'];
// 	$fileError = $file['error'];
// 	$fileType = $file['type'];

// 	$fileExt = explode('.', $fileName);
// 	$fileActualExt = strtolower(end($fileExt));

// 	$allowed = array('mp4', 'avi', 'mov', 'wmv', 'mpg','webm', 'jpg');
// if (!$fileTmpName) { // if file not chosen
//     echo "ERROR: Please browse for a file before clicking the upload button.";
//     exit();
// }


// 		if ($fileError === 0) {
// 			if ($fileSize < 524288000) {
// 				$fileNameNew = $fileName ."-".$familyName.".".$fileActualExt;
				
			
				
// 				$fileDestination = 'uploads/'.$fileNameNew;
// 				move_uploaded_file($fileTmpName, $fileDestination);
	

// 			}
// 			else{
// 				echo "Sorry,your file is too big! ";
// 			}
			
// 		}else{
// 			echo $fileError;
// 		}


// 	}




  ?>
