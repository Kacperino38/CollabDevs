<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.6">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Home - WLV Treasure Hunt</title>
  <style>
    body {
      background-color: #fdf5e6;
    }

    .page-padding {
      margin-left: 12%;
      margin-right: 12%;
      padding: 40px 60px;
      background-color: #fffaf0;
      border-radius: 10px;
    }

    .navbar {
      background-color: #8B4513 !important;
    }

    .navbar-brand, .nav-link {
      color: gold !important;
      font-family: 'Pirata One', cursive;
      font-size: 24px;
    }

    h1 {
      font-family: 'Pirata One', cursive;
      color: #8B4513;
      margin-top: 20px;
      font-size: 42px;
    }

    h2 {
      font-family: 'Pirata One', cursive;
      color: #8B4513;
      margin-top: 20px;
      font-size: 28px;
    }

    p, ul {
      font-size: 1.2rem;
      line-height: 1.6;
      color: #4B3621;
    }

    .nav-link {
      font-size: 36px;
      margin-left: 5px;
      margin-right: 5px
    }

    .button {
      background-color: rgb(253, 245, 230);
      border-style: solid;
      border-color: black;
      border-width: 1px;
      color: rgb(139, 69, 19) ;
      font-size: 32px;
      text-decoration: none;
      padding: 8px 8px;
      font-family: 'Pirata One', cursive;
    }

  </style>
  <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">☠️Treasure Hunt</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <a class="nav-link" href="ColDevT1.php">Home</a>
          <a class="nav-link" href="ColDevT2.php">Clues</a>
          <a class="nav-link" href="ColDevT3.php">Map</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="page-padding">
    <h1>Welcome Aboard To The Univercity Of Wolverhampton Treasure Hunt !</h1>
  <p>Ahoy, adventurers! Our epic treasure hunt will set sail across the City Campus, taking you 
    through 4 mysterious locations. Each stop hides 2 to 3 crafty clues — but beware! We can't
     reveal which buildings hold the secrets. Instead, head to the Clues section of our website to begin your quest.</p>
  <p>This isn't just a hunt for gold ,it's a journey to sharpen your teamwork and communication skills. You'll be working alongside fellow students, 
    learning to collaborate like a true crew. And don't worry — our trusty members of staff will be scattered along the way to guide and challenge you!
  </p>

  <h2>How to Join the Adventure</h2>
  <p>Ready to join the hunt? To enter, simply register for the Open Day event, and we'll send you an exclusive email invite to join the treasure hunt 
    adventure! But that's not all ,keep your eyes peeled as you explore the campus, because we'll have secret QR codes hidden all around. Scan them to
     unlock a map of the university, revealing where the elusive clues might be waiting. It's like a digital treasure map,your quest just got even more thrilling!</p>

    <ul>
      <h2>Rules</h2>
<ul>
  <li>Stick with your team. No lone pirates allowed!</li>
  <li>No skipping clues. Each one is a piece of the treasure map!</li>
  <li>Work together like a true crew. Respect each other's ideas!</li>
  <li>No outside help, don't even think about cheating, or you'll walk the plank!</li>
  <li>Respect the staff and your fellow adventurers, we're all in this together!</li>
  <li>Play fair, have fun, and remember: safety first on this treasure-filled journey!</li>
 </ul>

 <br>

 <button type="button" class="button" onclick="confirmSubmission()">BACK TO OPEN DAY SITE</button>

  <script>
  function confirmSubmission() {
      if (confirm('Have you made sure to read all the clues before leaving? ')) {
          // User clicked "YES"
          alert('See you soon Matey!');
          window.location.href = 'https://mi-linux.wlv.ac.uk/~2342154/ColDev1.php';
      } else {
          // User clicked "NO"
          ;
      }
  }
  </script>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>