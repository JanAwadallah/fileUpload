
<?php

$dir_path = "christmasFiles/";

$files_array=array();
if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               // select option with files names
            //   $options = $options."<option>$file_name</option>";   
               
               // display the file names
            //   echo $file_name."<br>";
               array_push($files_array, $file_name);
              }
          }
        }
}
}
// print_r($files_array);
?>

<html>
<head>
	<title>Download Files</title>
</head>
<body>

<h2>Uploaded files </h2>
<?php
if(count($files_array) === 0){
    echo "No file uploaded yet";
}
else{
for ($i=0; $i < count($files_array) ; $i++) { 
    $x='<a href="download.php?file='.$files_array[$i].'">Download</a><br><br>';
    
    echo '
    <video width="320" height="240" controls>
  <source src="christmasFiles/'.$files_array[$i].'" type="video/mp4">
  Your browser does not support the video tag.
</video>
    
    ';
echo $files_array[$i].'-'.$x ;
}
}?>
<!--<a href="download.php?file=image.jpg">click HERE</a>-->



</body>
</html>

<?php 
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'christmasFiles/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}

 ?>