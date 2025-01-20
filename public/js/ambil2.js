function showModal(id_barang) {
    const form = document.getElementById('modal-form');
    form.action = `/purchaser/ambil/${id_barang}`;
    document.getElementById('modal').classList.remove('hidden');
}

function hideModal() {
    document.getElementById('modal').classList.add('hidden');
}

window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target === modal) {
        hideModal();
    }
}
