<!DOCTYPE html> 
<html lang="en"> 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> ColabDev_Website2 </title> 
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
      font-size: 18px;
    }

    .nav-link:hover {
      color: black;
      font-size: 20px;
      font-weight: bold;
    }
  
        .contenth {
      padding: 10px;
      font-size: 50px;
    }

    .contentt {
      padding: 20px;
      font-size: 24px;
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
    <a class="navbar-brand" href="#">Colab Dev project PAGE 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="ColDev1.php">Homepage</a>
        <a class="nav-link" href="ColDev2.php">Second Page</a>
        <a class="nav-link" href="ColDev3.php">Third Page</a>
        </div>
        </div>
        </div>
                <!---Code for searchbar not yet working as no data is in place--->

        <form class="d-flex" role="search" action="ColDev1.php" method="get">
      <input name="searchterms" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" 
      value="<?php echo isset($_COOKIE['searchterms']) ? $_COOKIE['searchterms'] : ''; ?>">

      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </nav>
    </nav>



        <div class = page-padding> 
        <br>
<div class = contenth>    
Hello this is the colab dev project
</div>
<div class="spaces"></div>

<div class = contentt>
Second page of content yuh, this will contain a database filled with information about the open day, teachers and subjects!
</div>

<div class="spaces"></div>

<?php
//connecting to sql (php my admin) 

    $mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154"); 

 //error msg
 if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//retrieve data (display below) 

    $sql = "SELECT Lecturer_ID, Lecturer_Name, Subject_Name FROM LecturersTable"; 
    $result = $mysqli -> query($sql); ?>
    
    

<table class="table table-striped table-info"> 

    <tr> 

      <th>Lecturer ID</th> 
      <th>Lecturer Name</th> 
      <th>Subject</th> 


    </tr> 

    <?php while($row = $result->fetch_assoc()):?> 

      <tr> 

        <td><?=$row['Lecturer_ID']?></td> 
        <td><?=$row['Lecturer_Name']?></td> 
        <td><?=$row['Subject_Name']?></td> 

      </tr> 

  <?php endwhile;?> 

  </table> 


<div class="space"></div>

<img src="IMG_4859" style="height:220px; width:auto">



        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 