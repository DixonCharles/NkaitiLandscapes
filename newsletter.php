<?php
       
        $email = $_POST["email"];  
        


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "customers";



        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
                die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO quotes (name, email, phone)
        VALUES ('$name', '$email', '$phone')";

        if ($conn->query($sql) === TRUE)
        {
                echo "New record created successfully";
        }
        else
        {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        header("Location: index.html");
        exit();
        

 ?>

