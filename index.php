<?php
include 'header.php';
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Upload</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="signin.css" rel="stylesheet">
		<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    
<script>

function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	var family = $("#family").val();
		// alert(family);

//	alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	formdata.append("family", family);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
 
		
		
	</head>
	<body>
		<div class="login">
			<h1>Upload your video</h1>
		<!--	<form  method="POST" enctype="multipart/form-data">-->
		<!--		<label for="family">-->
		<!--			<i class="fas fa-user"></i>-->
		<!--		</label>-->
		<!--		<input type="text" name="family" placeholder="Full Name" id="fullname" required>-->
		<!--		<label for="file">-->
		<!--			<i class="fas fa-cloud-upload-alt"></i>-->
		<!--		</label>-->
		<!--		<input  type="file" name="file1" id="file1">-->
				<!--<button type="submit" name="submit" value="Upload File" onclick="uploadFile()">Upload</button>-->
		<!--		<input type="button" name="submit" value="Upload File" onclick="uploadFile()">-->
		<!--		  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>-->
  <!--<h3 id="status"></h3>-->
  <!--<p id="loaded_n_total"></p>-->

		<!--	</form>-->
			
			
			<form id="upload_form" enctype="multipart/form-data" method="post">
			    <label for="family">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="family" placeholder="Full Name" id="family" required>
  <label for="file">
					<i class="fas fa-cloud-upload-alt"></i>
				</label>
  <input type="file" name="file1" id="file1"><br>
  <!--<button type="submit" name="submit" onclick='uploadFile();'>Upload</button>-->
  <input type="button" name="submit" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>
			
			
		
		</div>

		
		
		
		
		  <!-- SCRIPTS -->
  <!-- JQuery-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips-->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript-->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity -->
	</body>
</html>