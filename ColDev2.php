<!DOCTYPE html> 
<html lang="en"> 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> ColabDev_Website2 </title> 
    <link rel="icon" type="image/jpg" href="favicon.jpg">
     
    <style>  
 
        * { 
    padding:0; 
    margin:0;   
        }       
 
        body{ 
            background-color: rgb(255, 228, 181);

        } 
 
 
        .page-padding { 
			margin-left: 12%; 
			margin-right: 12%; 
			padding-bottom: 80px; 
            padding-top: 4px; 
            padding-left: 60px; 
            padding-right: 60px; 
			background-color: rgb(255, 239, 213); 


        } 

        .space { 
          margin-top: 100px; 
        }


        .navbar {
          background-color: rgb(250, 195, 125) !important;
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
Hello this is the colab dev project
<div class="space"></div>
 
<br>

Second page of the content yipee

<img src="IMG_4859" style="height:600px">



        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 