<?php

    include './connection.php';

    if (isset($_POST['email']) && isset($_POST['password'])) {
        try {
            $email = $_POST['email'];
            $password = $_POST['password'];
                    
            $sql = "INSERT INTO User (email, password) 
                        VALUES (?,?)";
            $query = $conn->prepare($sql);
            $query->bindValue(1, $email);
            $query->bindValue(2, $password);            
            $query->execute();
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }

        echo 'Register Success !';
    }    
?>

<a href="./index.php">Go back</a>