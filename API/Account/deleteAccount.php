<?php
    include(__DIR__ . '/../../dbconn/dbconn.php');

    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM account WHERE user_id = '$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Account deleted successfully";
            header("Location: ".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
