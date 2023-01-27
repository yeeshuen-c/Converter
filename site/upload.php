
<?php
error_reporting(0);
//Start the session to record PDF file name
session_start();
?>
<?php
//Specific the directory where the file is going to be placed
$target_dir = "D:\code\dockerTry3\upload\ ";

//Specific the path of the file to be uploaded
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//Set session variable to record PDF file name
$_SESSION["FileName"] = basename($target_file, '.xlsx');
$_SESSION["Excel"] = basename($target_file);

//flag
$successUpload = 1;

//Convert all characters to lowercase
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES['fileToUpload']['size'] > 9000000) {
    echo '<script>alert("Sorry, your file is too large.")</script>';
    $successUpload = 0;
}

// Allow certain file formats
if($fileType != "xlsx" && $fileType != "xls") {
    echo '<script>alert("Sorry, only Excel (.xlsx or .xls) file are allowed.")</script>';
    $successUpload = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($successUpload == 0) {
    include 'index.php';
// If everything is ok, try to upload file
} else {
    //Rename the file to upload.pdf
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "D:\code\dockerTry3\upload\upload.xlsx")) {
        include 'convert.php';
    } else {
        echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        include 'index.php';
    }
}
?>
