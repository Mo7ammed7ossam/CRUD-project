<?php

    function CreateDB()
    {
        $servername = "localhost";  
        $username = "root";
        $password = "";
        $dbname = "BookStore";

        // to Create Connection
        $con = mysqli_connect($servername, $username, $password);

        // to Check Connection
        if(!$con) :
            die("Connection Failed .. ! : " . mysqli_connect_error());
        endif;

        // Create Database
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // Check if Database Created or not
        if(mysqli_query($con, $sql)) :
            // echo "<script> alert('Database Created Successfully .... !') </script>";
            
            // Create connection with database
            $con = mysqli_connect($servername, $username, $password, $dbname);

            // Create table
            $sql = " CREATE TABLE IF NOT EXISTS books(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_naem VARCHAR(25) NOT NULL,
                book_publisher VARCHAR(25),
                book_price FLOAT )";

                // Check if Table Created or not
                if(mysqli_query($con, $sql)) :
                    // echo "<script> alert('Table Created Successfully .... !') </script>" ;
                    return $con;
                else :
                    echo "<script> alert('Table Not Created .... !') </script>" ;
                endif;

        else :
            echo "<script> alert('Error while Creating Database .... !' " . mysqli_error($con) . ") </script>" ;
        endif;

    }



?>