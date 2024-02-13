<table class="account-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Role</th>
        <th>Designation</th>
        <th>Action</th>
    </tr>
    <?php 
        include('API/Account/getAccount.php');
        include('API/Account/deleteAccount.php');
    ?>
</table>

<style>
    .account-table th{
        text-align: center;
    }
</style>