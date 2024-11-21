<?php


    // Check if the delete action is triggered
    if ($_POST['action'] == 'delete') {
        // Database connection (replace with your actual DB details)
        $host = 'localhost';
        $user = '2342154';
        $password = 'K@cperino60018';
        $dbname = 'db2342154';
        

        $conn = new mysqli($host, $user, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // SQL query to delete all records from the table
        $sql = "DELETE FROM 5e_Character";
    
        if ($conn->query($sql) === TRUE) {
            echo "All customer characters deleted successfully.";

        }
    

        // SQL query to delete all records from the table
        $sql = "DELETE FROM 5e_Character";

        $conn->close();
    }


?>