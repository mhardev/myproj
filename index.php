<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="Root/css/style.css">
    <link rel="stylesheet" href="Root/css/table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Simple CRUD HTML CSS PHP</h1>
    <div class="container-form">
        <h2>Add Employee</h2>
        <form action="" method="POST">
            <input type="text" name="name" id="name" placeholder="enter name" required>
            <input type="email" name="email" id="email" placeholder="enter email" required>
            <input type="number" name="number" id="number" min="0" max="99999999999" pattern="^\d{4}-\d{3}-\d{4}$" placeholder="enter number" required>
            <input type="text" name="role" id="role" placeholder="enter role" required>
            <input type="text" name="designation" id="designation" placeholder="enter designation" required>
            <input type="password" name="password" id="password" placeholder="enter password" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div class="modal" id="updateModal" style="display:none;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form action="" method="POST">
            <input type="hidden" id="updateId" name="id" value="">
            <input type="text" id="newName" name="newName" placeholder="Enter new name">
            <input type="submit" name="updateName" value="Update Name">
            <?php
                include ('./API/Account/updateAccount.php');
            ?>
        </form>
    </div>

    <br>

    <?php
        include "./Sections/Account/AccountTable.php";
    ?>
    <script src="./Root/js/Account/Account.js"></script>
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include('./Validations/register.php');
?>
