<?php

//Code for GET search page (NOT WORKING!!!!)

include 'KMwebsite1.php';

$searchterms = $_POST['searchterms'];

$sql = "SELECT * FROM 5e_Race WHERE Race_Name LIKE '{$searchterms}%'";
$results = mysqli_query($mysqli, $sql);

?>


