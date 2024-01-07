<?php
date_default_timezone_set('Asia/jakarta');

$severname = "Localhost";
$username = "root";
$password = "";
$db = "webdailyjournal";

//create connection
$conn = new mysqli($severname,$username,$password,$db);

//check connection
if($conn->connect_error){
    die("connection failed : ".$conn->connect_error);
}


?>