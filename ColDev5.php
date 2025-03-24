<?php

function dbinfo()

{
$host = "localhost";
$name = "2342154";
$pass = "K@cperino60018";
$db = "db2342154";

$mysqli = new mysqli($host, $name, $pass, $db);

return $mysqli;
}

?>