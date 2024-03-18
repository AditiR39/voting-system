<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}
$userdata=$_SESSION['userdata'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online voting system -Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <style>
        #backbtn {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background: color #3498db;
            color: rgb(9, 9, 9);
            float: left;
        }

        #logoutbtn {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background: color #3498db;
            color: rgb(9, 9, 9);
            float: right;
        }
    </style>

<div id="mainsection">
    <div id="headersection">
        <button id="backbtn">Back</button>
        <button id="logoutbtn">Logout</button>
        <H1>ONLINE VOTING SYSTEM</H1>
    </div>

    <hr>
    <div id="Profile">
        <img src="../uploads" alt="">
    </div>
    <div id="Group"></div>
</div>
    

</body>

</html>