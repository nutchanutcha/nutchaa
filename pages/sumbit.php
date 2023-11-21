<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $web = $_POST['web'];
    $role = $_POST['role'];


    $servername = 'localhost :8080';
    $username = 'root';
    $cpassword = "123456";
    $dbname = "db_employee";

    $conn = new mysqil($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_erorr);
    }

    $sql = "INSERT INTRO employee (username, password, city, website, role)
            VALUES ($email,$password,$city,$role)";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    }   else{
         echo"error".$sql"<br>".$conn->error;
    }
    $conn->close();
    ?>



