<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body onload="startTime()">

<script id="replace_with_navbar" src="nav.js"></script>


<?php echo date('m/d/Y g:i:sa') . '<br>'; ?>


<div id="myform">
    <b>Simple form with name and Timezone ...</b>
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" id="name"></td>
        </tr>
        <tr>
            <td>Timezone:</td>
            <td><input type="text" id="timezone">
            <input type="button" id="add" value="Add" onclick="Javascript:addRow()"></td>
            
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    </div>
    <div id="mydata">
    <b>Current data in the system ...</b>
    <table id="myTableData"  border="1" cellpadding="2">
        <tr>
            <td>&nbsp;</td>
            <td><b>Name</b></td>
            <td><b>Timezone</b></td>
            <td><b>Time</b></td>
        </tr>
        <tr>
            <td>[you]</td>
            <td><?php echo htmlspecialchars($_SESSION["username"]); ?></td>
            <td>[Timezone]</td>
            <td><div id="txt"></td>
        </tr>
    </table>
    &nbsp;
    <input type="button" id="save-table" value="Save" onclick=""></td>
     
    </div>
<!--    <div id="myDynamicTable">
    <input type="button" id="create" value="Click here" onclick="Javascript:addTable()">
    to create a Table and add some data using JavaScript
</div> -->



<div id="map"></div>

    <!--Spør om:

lage tabell hvor rader laget av brukere er bevart mellom sessions med dropdown for å velge timezone

når timezone blir valgt, sync til den endra tiden.


-->



    <script src="timezone-map.js"></script>
    <script src="friend-table.js"></script>
    <link href="../node_modules/select2/dist/css/select2.min.css" rel="stylesheet"> <!-- Optional -->
    <link href="../node_modules/timezone-picker/dist/styles/timezone-picker.css" rel="stylesheet"> -->
    <script type="text/javascript" src="../node_modules/moment-timezone/moment-timezone.js"></script>
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../node_modules/select2/dist/js/select2.min.js"></script> <!-- Optional -->
    <script type="text/javascript" src="../node_modules/timezone-picker/dist/timezone-picker.min.js"></script>
    <script src="live-time-update.js"></script>
    
</body>



</html>