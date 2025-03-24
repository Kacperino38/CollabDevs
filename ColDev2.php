<!DOCTYPE html> 
<html lang="en"> 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> OpenDay2.com </title> 
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
      margin-left: 8%; 
      margin-right: 8%; 
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
      border-color: black;
    }

    .navbar .btn-outline-success:hover {
      color: black;
      font-weight: bold;
      border-color: black;
      background-color: rgb(211, 211, 255);
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
  
        .contenth {
      padding: 10px;
      font-size: 50px;
    }

    .contentt {
      padding: 20px;
      font-size: 22px;
    }

    .tablel{
      flex: 1 1 calc(40% - 5px); /* Adjust width dynamically */
        padding: 5px;
    }

    .tabler{
      flex: 1 1 calc(40% - 25px); /* Adjust width dynamically */
        padding: 5px;
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
      font-size: 40px;
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
                <!---Code for searchbar not yet working as no data is in place--->

        <form class="d-flex" role="search" action="ColDev2.php" method="get">
      <input name="searchterms" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" 
      value="<?php echo isset($_GET['searchterms']) ? htmlspecialchars($_GET['searchterms']) : ''; ?>">

      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </nav>



        <div class = page-padding> 
        <br>
<div class = contenth>    
Subjects and Open Day Talks!
</div>
<div class="spaces"></div>

<div class = contentt>
Here you can find all the times for the talks at the University of Wolverhampton
<br>
The first table has the names of the lecturers that are representing subjects
<br>
The second table has the times and locations for all the talks taking place during our open day season!
<br>
<br>
If you wish to sign up for the talks as well as recieve more information about the Open Day, find the Book Now button below! 
</div>

<div class="spaces"></div>

<?php
include("ColDev5.php");

//connecting to sql (php my admin) 

$mysqli = dbinfo();

 //error msg
 if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//retrieve data (display below) 

    $sql = "SELECT Lecturer_ID, Lecturer_Name, Subject_Name FROM LecturersTable"; 
    $result = $mysqli -> query($sql); ?>

<div class="content-wrapper">
<div class="tablel"> 

<table class="table table-striped table-info"> 

    <tr> 

      <th>Lecturer Name</th> 
      <th>Subject</th> 


    </tr> 

    <?php while($row = $result->fetch_assoc()):?> 

      <tr> 

        <td><?=$row['Lecturer_Name']?></td> 
        <td><?=$row['Subject_Name']?></td> 

      </tr> 

  <?php endwhile;?> 

  </table> 
  </div>


<div class="tabler">

<?php
  if(isset(($_GET['searchterms']))) {
    $sql1 = "SELECT Talk_ID, Subject_Name, Subject_TalkLocation, Subject_TalkDayTime 
    FROM TalksTable
    WHERE Subject_Name LIKE '%" . $_GET['searchterms']. "%'";

  }
    else

    $sql1 = "SELECT Talk_ID, Subject_Name, Subject_TalkLocation, Subject_TalkDayTime 
    FROM TalksTable";
    
    $result = $mysqli -> query($sql1);?>


<table class="table table-striped table-info"> 

      <tr> 

        <th>Subject</th> 
        <th>Location</th> 
        <th>Date and Time</th> 


      </tr> 

      <?php while($row1 = $result->fetch_assoc()):?> 

        <tr> 

          <td><?=$row1['Subject_Name']?></td> 
          <td><?=$row1['Subject_TalkLocation']?></td> 
          <td><?=$row1['Subject_TalkDayTime']?></td> 

        </tr> 

      <?php endwhile;?> 

      </table>  
      </div>
      </div>

<div class="space"></div>

<a href="ColDev4.php" class="button">Book Now</a>

      </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 