<?php
    include(__DIR__ . '/../dbconn/dbconn.php');
    session_start();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO account (name, email, password) VALUES ('$name', '$email', '$encrypted_password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Account created successfully";
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
