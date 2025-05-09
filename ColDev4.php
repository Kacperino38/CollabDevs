<!DOCTYPE html> 
<html lang="en"> 
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> OpenDayForm.com </title> 
    <link rel="icon" type="image/jpg" href="favicon.jpg">
     
    <style>  
 
        * { 
    padding:0; 
    margin:0;   
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
			padding-bottom: 80px; 
            padding-top: 4px; 
            padding-left: 60px; 
            padding-right: 60px; 
			background-color: rgb(245, 245, 251); 


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
            font-size: 20px;
        }

        .nav-link:hover {
            color: black;
            font-size: 20px;
            font-weight: bold;
        }
 
        input[type="text"], input[type="number"], input[type="tel"], input[type="date"] textarea {
            width: 100%; /* Makes them stretch to the full width of the parent container */
            padding: 12px; /* Adds some padding for a nicer look */
            margin-bottom: 18px; /* Adds space below each input */
            border: 2px solid #ccc; /* Simple border around inputs */
            box-sizing: border-box; /* Ensures padding doesn't cause overflow */
        }

        form {
            max-width: 500px; /* Max width to make the form look more compact */
            padding: 10px;
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
        <a class="nav-link" href="ColDev6.php">Travel</a>
        </div>
        </div>
        </div>
                <!---Code for searchbar not yet working as no data is in place--->

      
    </nav>
    </nav>



        <div class = page-padding> 
        <br>    
        Sign up now and recieve an email about our open day!
      <!-- UOMAN KHANS CODE -->
		<form action="ColDev4.php" method="post" novalidate>

      <!-- CSRF Token --> 

      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '') ?>"> 

  <div class= formstyle>

  <label for="first name "> First name :</label>
  <input type="text"  id="first name " required placeholder="e.g uoman "><br>
  <label for="last name "> Last Name:</label>
  <input type="text" name="last name " id="last name"   required placeholder="e.g khan"><br>
  <label for="email"> Email Address:</label>
  <input type="text" name="email " id="email " placeholder="EmailName@gmail.com"><br>
  <label for="phone"> Mobile Number:   </label>
  <input type="tel" name="tel"  id="phone" placeholder="07485 123456"><br>
  <label for="bday"> Date Of Birth:  </label>
  <input type="date" id="bday"><br>
  <label for="country"> Country of Origin  </label>
  <input type="text" name="country" id="country" placeholder="United Kingdom "><br>
  <label for="guest"> Number of Guests </label>
  <input type="number" id="guest" min="0" max="2"><br>
  <label for="sub"> Subjects </label>
  <input type="text" name="sub" id="sub"  placeholder="Computer Science etc.. "><br>
 <label for="level"> Level of Study </label>
 <input type="text" name="level" id="level" placeholder="Undergraduate etc.."><br>
Please write around 100 words, tell us about what you want to do in 
University in terms of your study, as well as your hobbies and interests <br>
<textarea name="comment" id="comment "></textarea>

<!-- Button element -->
<br>
<br>
<button type="button" class="button" onclick="alert('Thank you, Form Submitted!'); redirect()">SUBMIT!</button>
	  <!--
<button type="button" class="button" onclick="alert('Thank you, Form Submitted!'); window.location.href='https://mi-linux.wlv.ac.uk/~2342154/ColDevT1.php';">SUBMIT!</button>
-->


      </div>

      <script>
      
      function redirect(){
        window.location.replace("ColDev4.php");
    }

      </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body> 
