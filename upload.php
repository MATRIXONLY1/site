<?php
if(isset($_FILES['file'])) {
 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
 $uploadOk = 1;
 $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Allow all file extensions
 if($fileType != "php" && $fileType != "html" && $fileType != "css"
 && $fileType != "js" && $fileType != "txt" && $fileType != "pdf") {
     $uploadOk = 0;
 }

 if ($uploadOk == 0) {
     echo "Sorry, your file was not uploaded.";
 } else {
     if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
         echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
     } else {
         echo "Sorry, there was an error uploading your file.";
     }
 }
}
?>