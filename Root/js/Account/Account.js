function openUpdateModal(id, name) {
    document.getElementById('updateId').value = id;
    document.getElementById('newName').value = name;
    document.getElementById('updateModal').style.display = 'block';
}

function closeUpdateModal() {
    document.getElementById('updateModal').style.display = 'none';
}

function deleteAccount(userId) {
    if (confirm('Are you sure you want to delete this account?')) {
        fetch('API/Account/deleteAccount.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'id=' + userId + '&delete=true',
        })
        .then(response => {
            // Handle the response as needed
            console.log(response);
            // You might want to refresh the page or update the UI here
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}