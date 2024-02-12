<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Root/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Simple CRUD HTML CSS PHP</h1>
    <div class="container-form">
        <form action="" method="POST">
            <input type="text" name="name" id="name" placeholder="enter name">
            <input type="email" name="email" id="email" placeholder="enter email">
            <input type="password" name="password" id="password" placeholder="enter password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div class="modal" id="updateModal" style="display:none;">
        <form id="updateForm" action="API/Account/updateAccount.php" method="POST">
            <input type="hidden" id="updateId" name="id" value="">
            <input type="text" id="newName" name="newName" placeholder="Enter new name">
            <input type="submit" name="updateName" value="Update Name">
        </form>
    </div>

    <br>

    <?php
        include('./Sections/Account/AccountTable.php');
    ?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include('Validations/register.php');
?>
