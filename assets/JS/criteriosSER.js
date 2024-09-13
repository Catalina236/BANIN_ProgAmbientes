document.addEventListener('DOMContentLoaded', function() {
    fetch('datosSER.php')
        .then(response => response.json())
        .then(data => {
            // Actualizar los elementos HTML con los datos
            for (let key in data) {
                let element = document.getElementById(key);
                if (element) {
                    if (typeof data[key] === 'number' && data[key] > 1) {
                        element.textContent = data[key];
                    } else {
                        element.textContent = data[key] + '%';
                    }
                }
            }
        })
        .catch(error => console.error('Error:', error));
});