function mostrarModal() {
    document.getElementById("modalEliminar").style.display = "flex";
}

document.getElementById("cancelar").addEventListener("click", function() {
    document.getElementById("modalEliminar").style.display = "none";
});

document.getElementById("confirmar").addEventListener("click", function() {
    window.location.href = 'eliminarUsuario.php';
});