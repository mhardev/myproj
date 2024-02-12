function openUpdateModal(id, name) {
    document.getElementById('updateId').value = id;
    document.getElementById('newName').value = name;
    document.getElementById('updateModal').style.display = 'block';
}

function closeUpdateModal() {
    document.getElementById('updateModal').style.display = 'none';
}