<?php
    include(__DIR__ . '/../../dbconn/dbconn.php');

    if (isset($_POST['updateName'])) {
        $id = $_POST['id'];
        $newName = $_POST['newName'];

        $updateSql = "UPDATE account SET name='$newName' WHERE user_id='$id'";
        if (mysqli_query($conn, $updateSql)) {
            echo "Name updated successfully";
            header("Location: ".$_SERVER['HTTP_REFERER']);
        } else {
            echo "Error updating name: " . mysqli_error($conn);
        }
    }
?>
