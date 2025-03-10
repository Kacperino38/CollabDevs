<!DOCTYPE html> 
<html lang="en"> 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> OpenDay1.com </title> 
    <link rel="icon" type="image/jpg" href="favicon.jpg">
     
    <style>  
 * { 
      padding: 0; 
      margin: 0;   
    }

    body { 
      background-color: rgb(230, 242, 255);
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Ensure the body takes up full height */
    } 

    .page-padding { 
      margin-left: 12%; 
      margin-right: 12%; 
      padding-bottom: 40px; 
      padding-top: 4px; 
      padding-left: 60px; 
      padding-right: 60px; 
      background-color: rgb(245, 245, 251); 
      flex-grow: 1; /* This will push the footer down */
    }

    .space {    
      margin-top: 100px; 
    }

    .spaces {    
      margin-top: 50px; 
    }

    .navbar {   
      background-color: rgb(162, 208, 254) !important;
    }

    .navbar-brand {
      color: black;
      font-weight: bold;
      font-size: 30px;
    }

    .navbar .btn-outline-success {
      color: black;
      border-color: rgb(140, 120, 90);
    }

    .navbar .btn-outline-success:hover {
      color: black;
      font-weight: bold;
      border-color: black;
      background-color: rgb(140, 120, 90);
    }

    .nav-link {
      color: black;
      font-size: 22px;
    }

    .nav-link:hover {
      color: black;
      font-size: 22px;
      font-weight: bold;
    }

    .contenth1 {
      padding: 10px;
      font-size: 46px;
    }

    .contenth2 {
      padding: 10px;
      padding-bottom: 0px;
      font-size: 20px;
    }

    .contentt {
      padding: 20px;
      font-size: 22px;
    }

    .content-wrapper {  
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .imgscroll {
      height: 10px;
      width: auto;
    }

    .scroll-container-container {
      padding-left: 240px; 
      padding-right: 240px;
    }

    .scroll-container {
      background-color: rgb(242, 241, 247); 
      overflow: auto;
      white-space: nowrap;
      padding: 10px;
    }

    .scroll-container img {
      padding: 5px;
    }

    .footer {
      background-color: rgb(230, 242, 255);
      color: white;
      padding-left: 50px; 
      padding-right: 50px;
      padding-bottom: 2px;
      width: 100%;
      background-color: rgb(230, 242, 255);
    }

    .button {
      background-color: rgb(162, 208, 254);
      border-style: solid;
      border-color: black;
      border-width: 2px;
      color: black;
      font-size: 36px;
      text-decoration: none;
      padding: 8px 8px;
    }

 
    </style> 
     
    <head> 
 
    </head> 

 
    <body>  

    <!-- This is the code of the header -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">OpenDayWLV!</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="ColDev1.php">Homepage</a>
        <a class="nav-link" href="ColDev2.php">Subject Talks</a>
        <a class="nav-link" href="ColDev3.php">Information</a>
        </div>
        </div>
        </div>

    </form>
    </nav>
    </nav>



        <div class = page-padding> 
        <br>    

        <div class="content-wrapper">

        <!---Heading content--->

        <div class="contenth2">
        WELCOME TO THE 
        </div>
        <br>
        <br>
        <div class="contenth1">
        UNIVERSITY OF WOLVERHAMPTON OPEN DAY DIGITAL INFORMATION WEBPAGE!
       </div>



        <div class="space"></div>
      
        </div>
       
        
        <!---Normal content--->
        <div class="contentt">
        Hello this is the colab dev project
            <br>
            <br>
            We are hoping to soon fill all of these pages with content! 
            <div class="spaces"></div>
        </div>
        </div>
        

        




<?php

//connecting to sql

    $mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154");

    //error msg
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }


    if(isset(($_GET['searchterms']))) {
    $sql = "SELECT Race_Name, Race_Bonus, Race_Size, Race_Speed, Race_Language 
            FROM 5e_Race
            WHERE Race_Name LIKE '%" . $_GET['searchterms']. "%'";

            setcookie("searchterms", $_GET['searchterms'], time()+3600);

    }
    else

    $sql = "SELECT  Race_Name, Race_Bonus, Race_Size, Race_Speed, Race_Language FROM 5e_Race";


    //retrieve data (display below)
    $result = $mysqli -> query($sql);?>

    <!-- Code below displays the data in a table 

    <br>
This is the template for the database part!!!!
    </br>
    <table class="table table-striped">
    <div class ="tableheading">
    <tr>
      <th  style="color:white;background-color:#A0522D">Name</th>
      <th  style="color:white;background-color:#A0522D">Something</th>
      <th  style="color:white;background-color:#A0522D">Something else</th>
      <th  style="color:white;background-color:#A0522D">A fourth thing</th>
      <th  style="color:white;background-color:#A0522D">Another thing</th>
    </tr>
  </div>
    <?php while($row = $result->fetch_assoc()):?>
      <tr>
        <td><a href="KMwebsitedetails.php?which=<?=$row['Race_Name']?>"><?=$row['Race_Name']?></td>
        <td><?=$row['Race_Bonus']?></td>
        <td><?=$row['Race_Size']?></td>
        <td><?=$row['Race_Speed']?></td>
        <td><?=$row['Race_Language']?></td>
      </tr>
  <?php endwhile;?>
  </table>
  -->

        </div>

        <div class="footer">
    <div class="scroll-container">
        <img src="IMG_4852" style="height:220px; width:auto">
        <img src="IMG_4856" style="height:220px; width:auto">
        <img src="IMG_4857" style="height:220px; width:auto">
        <img src="IMG_4851" style="height:220px; width:auto">
        <img src="IMG_4860" style="height:220px; width:auto">
        <img src="IMG_4859" style="height:220px; width:auto">
        <img src="IMG_4861" style="height:220px; width:auto">
        <img src="IMG_4863" style="height:220px; width:auto">
        <img src="IMG_4862" style="height:220px; width:auto">
        <img src="IMG_4864" style="height:220px; width:auto">
        </div>
    </div>

<?php

?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 