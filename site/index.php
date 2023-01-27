<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <title> EasyConvert </title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="images/icon.png" type="image/x-icon">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <div class="nav">
            <a href="#excel">what is excel</a>
            <a href="#csv">what is csv</a>
            <a href="#guide">get a guide</a>
            <a href="#convert">start convertion</a>
        </div>
        <div class="headfoot">
            <h1>A website for excel file to csv file convertion</h1>
        </div>
        <hr>
        <div class="desc">
            <h2> Website details </h2>
            <p>A web application to allow
               users to convert an Excel file to .csv file using Apache POI library.
            </p>
            <div id="excel">
                <h3> What Is <em> Excel</em>?</h3>
                <img src="images/excel.jpg" alt="replace text..." title="excel" width="400" height="400" />
                <p>Excel is a spreadsheet program from Microsoft and a component of its Office product group for business applications. Microsoft Excel enables users to format, organize and calculate data in a spreadsheet.
                    By organizing data using software like Excel, data analysts and other users can make information easier to view as data is added or changed. Excel contains a large number of boxes called cells that are ordered in rows and columns. Data is placed in these cells.  
                    Excel is a part of the Microsoft Office and Office 365 suites and is compatible with other applications in the Office suite. The spreadsheet software is available for Windows, macOS, Android and iOS platforms.
                    <br /><a href="https://www.techtarget.com/searchenterprisedesktop/definition/Excel" target="_blank">more about Excel</a></p>
            </div>
            <div id="csv">
                <h3> What Is <em>csv</em> file? </h3>
                <img src="images/csv.png" alt="replace text..." title="csv" width="400" height="400" />
                <p>CSV files may sometimes be called Character Separated Values or Comma Delimited files. They mostly use the comma character to separate (or delimit) data, but sometimes use other characters, like semicolons. The idea is that you can export complex data from one application to a CSV file, and then import the data in that CSV file into another application.
                    A CSV file has a fairly simple structure. It’s a list of data separated by commas. For example, let’s say you have a few contacts in a contact manager, and you export them as a CSV file. 
                    <br /><a href="https://www.howtogeek.com/348960/what-is-a-csv-file-and-how-do-i-open-it/" target="_blank">more about csv</a></p>
            </div>    
            <br />
            <h3>Comparison between Excel & CSV </h3>
            <!-- table to compare excel & csv -->
            <table align="center" width="500" height="300" border="1" cellspacing="0">
                <thead>
                <tr>
                    <th>Excel</th>
                    <th>csv</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> MS Excel stands for Microsoft Excel.</td>
                    <td> CSV stands for Comma separated value.</td>
                </tr>
                <tr>
                    <td> It is a binary file that holds information about all the worksheets in a workbook.</td>
                    <td> It is a plain text format with a series of values separated by commas.</td>
                </tr>
                <tr>
                    <td> Excel file can be opened with Microsoft Excel doc only.</td>
                    <td> CSV can be opened with any text editor in Windows like notepad, MS Excel, Microsoft Works 9, etc.</td>
                </tr>
                </tbody>
            </table>

            <h3> <b>Other tools</b> used for development of website </h3>
            <img src="images/docker.png" alt="replace text..." title="docker" width="400" height="400" />
            <img src="images/apache.png" alt="replace text..." title="apache" width="400" height="400" />
            <br />
        </div>
        <div id="guide">
            <h2> Step-by-step guidance </h2>
            <ol>
                <li>Choose a file to upload. （<em>File must be in <a href="#excel">Excel</a> format.</em>）</li>
                <li>Click on the button 'convert' to start convertion.</li>
                <li>You will be directed to a new page.</li>
                <li>Click on the download button to start downloading the converted file.</li>
            </ol>
        </div>
        <div id="convert">
            <h1>start convertion!</h1>
            <label>Click on the "Choose File" button to upload a file:</label><br /><br />
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="fileToUpload" name="fileToUpload" multiple>
                    <br />
                    <input type="submit" value="Upload to convert">
                    <br /><br />
                </form>
        </div>
        <!-- footer -->
        <div class="headfoot">
            <dl>
                <dt> members involved:</dt>
                <dd> Chan Yee Shuen (159377)</dd>
                <dd>Lau Yee Xuan (158203)</dd>
                <dd>Cheah Yong Ting (158388)</dd>
                <dd>Yeoh Pei Jing (158986)</dd>
            </dl>
        </div>
    </body>
</html>