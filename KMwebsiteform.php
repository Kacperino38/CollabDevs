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

        .space1 { margin-top: 50px; }

        .space2 { margin-top: 100px; }

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

        .th, td{
            padding: 10px;
        }
 
        .buttonstyle{
            padding: 3px 4px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: #c6541c;

        }

        /* Set all input fields to the same width */
        input[type="text"], textarea {
            width: 100%; /* Makes them stretch to the full width of the parent container */
            padding: 10px; /* Adds some padding for a nicer look */
            margin-bottom: 15px; /* Adds space below each input */
            border: 1px solid #ccc; /* Simple border around inputs */
            box-sizing: border-box; /* Ensures padding doesn't cause overflow */
        }

        /* Additional styles for the form */
        form {
            max-width: 500px; /* Max width to make the form look more compact */
            padding: 10px;
        }


    </style> 

 
    <head>  
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
        <a class="nav-link" href="KMwebsiteform.php">Character ideas</a>
        </div>
        </div>
        </div>
    </nav>
    </nav>


    <?php

    //connecting to sql
    $mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154");

    //error msg
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }

    ?>


</head>
<div class = page-padding> 
<body>
    <br>
        Hello, this is the website for Dungeons and Dragons 5e Races and Classes!
        <br>
        <br>
        This page is for users to enter their own customer character ideas!
        <br>
        This can be done in the form below!
        <div class="space1"></div>

        
        <form action="KMwebsiteform.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="CName" name="name" required value=""><br>

        <label for="race">Race:</label>
        <input type="text" id="CRace" name="race" required value=""><br>

        <label for="class">Class:</label>
        <input type="text" id="CClass" name="class" required value=""><br>


        <button type="submit" class="buttonstyle" value="submit">Submit</button>
    </form>

    <div class="space1"></div>

    <div id="response">



    <?php

    $Cname = $_REQUEST['name'];
    $Crace= $_REQUEST['race'];
    $Cclass= $_REQUEST['class'];

    if(isset($_POST['name'], $_POST['race'], $_POST['class'])) {
        $insert_sql =  "INSERT INTO 5e_Character (Char_Name, Char_Race, Char_Class)
        VALUES ('$Cname', '$Crace', '$Cclass')";

        if ($mysqli->query($insert_sql)) { 
            echo "Well Done!";
        } 
        
        else {
            echo "Error: " . $mysqli->error;
        }
    }


    $response = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize and process the inputs
            
                $name = htmlspecialchars($_POST['name']); // Sanitize user input
                $race = htmlspecialchars($_POST['race']);
                $class = htmlspecialchars($_POST['class']);

                if (!empty($_POST['name']) && !empty($_POST['race']) && !empty($_POST['class'])) {

                // You could process this data (e.g., save to a database, send an email, etc.)
                $response = "$name the $race $class has been created!";
            } else {
                $response = "Please fill in all the fields (Name, Race and Class).";
            }
        }

        // Display the response message after form submission
        if (!empty($response)) {
            echo "<p>$response</p>";

        }

        $sql = "SELECT Char_Name, Char_Race, Char_Class FROM 5e_Character";


        //retrieve data 
        $result = $mysqli -> query($sql); 
        ?>




    <table class="table table-striped">
    <tr>
      <th>Character Name</th>
      <th>Character Race</th>
      <th>Character Class</th>
    </tr>
    <?php while($row = $result->fetch_assoc()):?>
      <tr>
        <td><?=$row['Char_Name']?></td>
        <td><?=$row['Char_Race']?></td>
        <td><?=$row['Char_Class']?></td>
      </tr>
  <?php endwhile;?>
  </table>

    </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 