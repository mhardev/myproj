<?php 
    include(__DIR__ . '/../../dbconn/dbconn.php');

    $sql = "SELECT * FROM account";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>" . $row['user_id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['number'] . "</td>
                    <td>" . $row['role'] . "</td>
                    <td>" . $row['designation'] . "</td>
                    <td>
                        <button class='btn btn-primary' onclick='openUpdateModal(" . $row['user_id'] . ", \"" . $row['name'] . "\")'>Update</button>
                        <button class='btn btn-danger' onclick='deleteAccount(" . $row['user_id'] . ")'>Delete</button>
                    </td>
                </tr>";
        }
    } else {
        echo "0 results";
    }
?>
