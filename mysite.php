<!DOCTYPE html>
 <html lang="en">
	<head>
		<title> HTML and PHP </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<style>
        .responsive-width {
            width: 20vw;
            background-color: lightgreen;
			margin-top: 20px;
        }
		
		.responsive-height {
            height: 10vh;
            background-color: lightblue;
			margin-left: 120px;
			margin-right: 120px;
		}

		.page-margin {
			margin-left: 10px;
			margin-right: 10px;
			margin-top: 5px;
			margin-bottom: 10px;
		}

		.wrap { 
			font-size: 20px; 
			padding: 2px; 
		} 

		.navbar-brand {
			font-size: 32px;
			color: brown;
			background-color: yellow;
			padding: 4px;
			font-weight: bold;
		}

		.nav-link {
			font-size: 22px;
			color: forestgreen;

		}
	
		.page-padding {
			margin-left: 100px;
			margin-right: 100px;
			padding-bottom: 80px;
			background-color: cornsilk;
		}

    .datestyle{
    font-size: 20px;
    font-weight: bold;

    }

		body {
			background-color: darkcyan;
		}
		
    </style>
	

	</head>
	<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="mysite.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mysite2.php">Second Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Third Paeg</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="page-padding">

<div class="page-margin">
	<span class="wrap">
	<h1>This is a Heading </h1>
	</span>
	<p>


	<?php
		echo "Hello world";
		echo "<br>";
		
		$myname = "KACPER";
		$mysurname = "MACHNICKI";
		
		echo "<br>";
		echo "My name is " .$myname. " " .$mysurname;
		
		echo "<br>";
		echo "<br>";

    //connecting to sql
    $mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154");

    //error msg
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }

    //retrieve data (display below)
    $sql = "SELECT name, rating, year FROM Movieslist";
    $result = $mysqli -> query($sql); ?>


    <table class="table table-striped table-info">
    <tr>
      <th>Title</th>
      <th>Rating</th>
      <th>Year</th>
    </tr>
    <?php while($row = $result->fetch_assoc()):?>
      <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['rating']?></td>
        <td><?=$row['year']?></td>
      </tr>
  <?php endwhile;?>
  </table>


<div class="datestyle">

  <?php
    include("myfunctions.php");

    $today = todaysDate();
    print "$today";

    ?>

  </div>

<br></br>

<div class="container text-center">
  <div class="row align-items-center">

    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

    </div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

    </div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

	</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

</div>
    <div class="col">
	<div class="card" style="width: 300px;">
  <img src="simage.jpg" class="card-img-top" alt="Stock Image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<br></br>

    </div>
  </div>
</div>

</p>
	</div>
	</div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</div>
	</body>
</html>