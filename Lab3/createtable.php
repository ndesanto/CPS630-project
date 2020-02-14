<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testnew";

    try {
        // Create connection
        $conn = new PDO('mysql:host=' + $servername + 'dbname=' + $dbname, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // sql to create table
        $sql = "CREATE TABLE StRec (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table Student Records created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();
    }
    catch (PDOException $e) {
        echo "<br><hr><strong>Error: </strong>";
        die($e->getMessage());
    }
?> 



 