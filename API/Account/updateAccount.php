<?php
    include(__DIR__ . '/../../dbconn/dbconn.php');

    if (isset($_POST['updateName'])) {
        $id = $_POST['id'];
        $newName = $_POST['newName'];

        $updateSql = "UPDATE account SET name='$newName' WHERE user_id='$id'";
        $result = mysqli_query($conn, $updateSql);

        if ($result) {
            echo "<script>
                Swal.fire({
                    title: 'Name update successfully!',
                    icon: 'success',
                    timer: 1500,
                    showConfirmButton: false
                });
              </script>";
        } else {
            // Display SweetAlert for error
            echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Error updating name: " . mysqli_error($conn) . "',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }
    }
?>
