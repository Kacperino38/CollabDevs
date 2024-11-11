<?php

include("KMwebsite1.php")
$mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154");

    $result = $mysqli -> query($sql);

    
$Race_Name = $_GET['which'];
$sql = "SELECT * FROM 5e_Race WHERE Race_Name = '" . $Race_Name . "'";
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();

?>