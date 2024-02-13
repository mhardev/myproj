<?php
    include(__DIR__ . '/../dbconn/dbconn.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO account (name, email, password) VALUES ('$name', '$email', '$encrypted_password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>
                Swal.fire({
                    title: 'Account created successfully!',
                    icon: 'success',
                    timer: 1500,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
                });
              </script>";
        } else {
            // Display SweetAlert for error
                echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Error adding an account: " . mysqli_error($conn) . "',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
                });
            </script>";
        }
    }
?>
