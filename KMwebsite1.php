<!DOCTYPE html> 
<html lang="en"> 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> KMwebsite </title> 
     
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
            background-color: rgb(210, 170, 125) !important;
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
    <a class="navbar-brand" href="#">D&D 5e Mini-Wiki</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="KMwebsitehomepage.php">Homepage</a>
        <a class="nav-link" href="KMwebsite1.php">Race</a>
        <a class="nav-link" href="KMwebsite2.php">Class</a>
        </div>
        </div>
        </div>
        <form class="d-flex" role="search" action="KMwebsite1.php" method="get">
      <input name="searchterms" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" 
      value="<?php echo isset($_COOKIE['searchterms']) ? $_COOKIE['searchterms'] : ''; ?>">





      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </nav>
    </nav>



        <div class = page-padding> 
        <br>    
Hello, this is the pages for Dungeons and Dragons 5e Races!
<div class="space"></div>
 
<?php

//connecting to sql
    $mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154");

    //error msg
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }


//CODE FOR DATA, COOKIE NOT WORKING!!!! (COOKIE ALSO IN)

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

    <!-- Code below displays the data in a table -->


    <table class="table table-striped">
    <div class ="tableheading">
    <tr>
      <th  style="color:white;background-color:#A0522D">Name</th>
      <th  style="color:white;background-color:#A0522D">Race Bonuses</th>
      <th  style="color:white;background-color:#A0522D">Size</th>
      <th  style="color:white;background-color:#A0522D">Speed</th>
      <th  style="color:white;background-color:#A0522D">Languages</th>
    </tr>
  </div>
    <?php while($row = $result->fetch_assoc()):?>
      <tr>
        <td><a href="KMwebsitedetails.php?which=<?$row['Race_Name']?>"><?=$row['Race_Name']?></td>
        <td><?=$row['Race_Bonus']?></td>
        <td><?=$row['Race_Size']?></td>
        <td><?=$row['Race_Speed']?></td>
        <td><?=$row['Race_Language']?></td>
      </tr>
  <?php endwhile;?>
  </table>



        </div>

<?php

?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 