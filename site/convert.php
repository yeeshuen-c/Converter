<?php
error_reporting(0);
//$command =  'javac -cp ".;D:\code\dockerTry3\pdfbox-app-2.0.24.jar" ReadingText.java';
//$command= 'javac -d build -cp ".;D:\code\dockerTry3\jars\*.jar" ConvertExcelToCSV.java';
$command= 'javac -cp ".;D:\code\dockerTry3\jars\*" ConvertExcelToCSV.java';

//compile java program
shell_exec($command);

//$command2 = 'java -cp ".;D:\code\dockerTry3\pdfbox-app-2.0.24.jar" ReadingText';
$command2 = 'java -cp ".;D:\code\dockerTry3\jars\*" ConvertExcelToCSV';

//run java program
shell_exec($command2);

include 'download.php';
?>