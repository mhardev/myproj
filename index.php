<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" id="name" placeholder="enter name">
        <input type="email" name="email" id="email" placeholder="enter email">
        <input type="password" name="password" id="password" placeholder="enter password">
        <input type="submit" name="submit" value="Submit">
    </form>
    <div id="updateModal" style="display:none;">
        <form id="updateForm" action="API/Account/updateAccount.php" method="POST">
            <input type="hidden" id="updateId" name="id" value="">
            <input type="text" id="newName" name="newName" placeholder="Enter new name">
            <input type="submit" name="updateName" value="Update Name">
        </form>
    </div>

    <br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php 
            include('API/Account/getAccount.php');
            include('API/Account/deleteAccount.php');
        ?>
    </table>

    <script>
        function openUpdateModal(id, name) {
            document.getElementById('updateId').value = id;
            document.getElementById('newName').value = name;
            document.getElementById('updateModal').style.display = 'block';
        }

        function closeUpdateModal() {
            document.getElementById('updateModal').style.display = 'none';
        }
    </script>
</body>
</html>
<?php
    include('Validations/register.php');
?>
