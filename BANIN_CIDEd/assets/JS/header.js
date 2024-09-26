document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menuPrincipal = document.getElementById('menu-principal');
        
        if (menuPrincipal.classList.contains('show')) {
            menuPrincipal.classList.remove('show');
        } else {
            menuPrincipal.classList.add('show');
        }
    });
});
