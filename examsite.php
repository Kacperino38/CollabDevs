<!DOCTYPE html> 

 

 

 

//connecting to sql (php my admin) 

    $mysqli = new 

    mysqli("localhost","2342154","K@cperino60018","db2342154"); 

 

 

 

//retrieve data (display below) 

    $sql = "SELECT name, rating, year FROM Movieslist"; 

    $result = $mysqli -> query($sql); ?> 

 

 

//display data from table 

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