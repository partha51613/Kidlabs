<?php
if(isset($_POST['submit'])){
$target_dir ="audio/";
$filename=$_FILES['fileToUpload']['name'];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$ext =  strtolower(pathinfo($target_file,PATHINFO_EXTENSION));;
echo $ext."  ";

// Allow certain file formats
if($ext != "mp3" && $ext != "wav" && $ext != "aac") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	// Check if file already exists and rename
	if (file_exists($target_dir."t.".$ext)) {
		for ($i=0; $i < 10; $i++) {
			if(!file_exists($target_dir."t.old".$i.".".$ext)) {
			rename($target_dir."t.".$ext, $target_dir."t.old".$i.".".$ext);
			echo 'ok';
			}
			
		}
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir."t.".$ext)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		}
		else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
}

?>