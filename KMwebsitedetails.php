
<style>

.table {
    style=width:40%;
    text-align: center;
}


</style>   



<?php

//Code is meant to be second page for details on each field 


$mysqli = new
    mysqli("localhost","2342154","K@cperino60018","db2342154");

    
$Race_Name = $_GET['which'];
$sql = "SELECT * FROM 5e_Race WHERE Race_Name = '" . $Race_Name . "'";
$result = $mysqli -> query($sql);
$row = $result -> fetch_assoc();


?>

<table style="width:40%" class="table table-striped">
    <div class ="tableheading">
    <tr>
      <th  style="color:white;background-color:#A0522D">Name</th>
      <th  style="color:white;background-color:#A0522D">Race Bonuses</th>
      <th  style="color:white;background-color:#A0522D">Size</th>
      <th  style="color:white;background-color:#A0522D">Speed</th>
      <th  style="color:white;background-color:#A0522D">Languages</th>
    </tr>
  </div>
      <tr>
        <td font-weight="bold"><?=$row['Race_Name']?></td>
        <td><?=$row['Race_Bonus']?></td>
        <td><?=$row['Race_Size']?></td>
        <td><?=$row['Race_Speed']?></td>
        <td><?=$row['Race_Language']?></td>
      </tr>
  </table>
<br>
<br>

<a href="KMwebsite1.php">Back to main page!</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
