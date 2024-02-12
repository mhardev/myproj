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
                    <td>
                        <button onclick='openUpdateModal(" . $row['user_id'] . ", \"" . $row['name'] . "\")'>Update</button>
                        <form action='API/Account/deleteAccount.php' method='POST'>
                            <input type='hidden' name='id' value='" . $row['user_id'] . "'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                </tr>";
        }
    } else {
        echo "0 results";
    }
?>
