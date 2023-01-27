<html>
<head>
    <title>Excel to CSV Converter</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>

<?php
error_reporting(0);
// Retrieve session variables that were set on previous page
$csvFileName = "Converted" . $_SESSION["FileName"] . ".csv";
$ExcelFileName = $_SESSION["Excel"];

//Display the button to let user download the converted text file
//echo '<a href="download/text.txt" download= "' . $convertedFileName . '" > <button>Click here to download</button> </a>';

//Delete excel file
$path = "D:\code\dockerTry3\upload\upload.xlsx";
unlink($path);

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();
?>

<body>
    <div class="download">
        <h1 class="header layout">Excel to CSV Converter</h1>

        <!--Message to user that pdf has succesfully uploaded and converted-->
        <p class="success"><?php echo $ExcelFileName ?> has been uploaded and converted successfully. </p><br>
        <h2>--SOFT REMINDER--</h2>
        <h2>If you directly click on the downloaded file, an excel file might be displayed instead of a CSV file according to your computer setting. </h2>
        <!--Display the button to let user download the converted text file-->
        <p>Click the download button below to download.</p>
        <a href="download/download.csv" download= "<?php echo $csvFileName ?>">
            <img src="images/download.png" alt="click to download" title="click to download" width="400" height="400" />
        </a>
    </div>
</body>
</html>