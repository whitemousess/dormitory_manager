<?php 
require '../../controller/m_database.php';

    function register($username, $password , $email)
    {
        $conn = connect(); 
            $sql = "INSERT INTO `users`(`username`,`password`,`email`,`role`) 
                VALUE('$username','$password','$email','1')";
    
            if ($conn->query($sql) === true) {;
                header('location:./login.php');
            } else {
                echo '<script>alert("ERROR {$sql}" . $conn->error)</script>';
            }
        
    }
    