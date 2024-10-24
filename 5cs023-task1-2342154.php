<!DOCTYPE html> 

 
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

    $sql = "SELECT Movie_id, Movie_name, Genre, Price, Date_of_release FROM movies"; 
    $result = $mysqli -> query($sql); ?>
    
    

<table class="table table-striped table-info"> 

    <tr> 

      <th>Movie ID</th> 
      <th>Movie name</th> 
      <th>Genre</th> 
      <th>Price</th> 
      <th>Date</th> 

    </tr> 

    <?php while($row = $result->fetch_assoc()):?> 

      <tr> 

        <td><?=$row['Movie_id']?></td> 
        <td><?=$row['Movie_name']?></td> 
        <td><?=$row['Genre']?></td> 
        <td><?=$row['Price']?></td> 
        <td><?=$row['Date_of_release']?></td> 

      </tr> 

  <?php endwhile;?> 

  </table> 