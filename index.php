<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Tracking Cert</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
    <style>
        body{
            background-color: darkslategray;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div id="dvMain">
            
            <input type="text" value = "1" id="txtNoOfRec" placeholder="Enter no. of rows">
            <input type="button" value="Rows" id="btnCreate">
            <input type="button" value="Add Row" id="btnAdd">
            <input type="button" value="Clear" id="btnClear">
            
        </div>
        <br>
        <form action="insert.php" method="post">
            <div id="AddControl">

            </div>
        </form>
    </div>   

    <script src="jquery.js"></script>
    <script src="dynamo.js"></script>
</body>
</html>

