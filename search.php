<?php

// php code to search data in mysql database and set it in input text

    // id to search
    $name = $_POST['fname'];
    
    // connect to mysql
    $conn = mysqli_connect("localhost", "root", "","ecommerce");
    
    // mysql search query
    $query = "SELECT `name` FROM `father` ";
    
    
    
    // if id exist 
    // show data in inputs

    $result1 = $conn->query($query);
$row1= $result1->fetch_assoc();
    
      
   echo   $row1['name'];
        //$lname = $row['lname'];
        //$age = $row['age'];



?>

