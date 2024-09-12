document.addEventListener("DOMContentLoaded", function() {
    // Fetch para obtener los datos desde datos.php
    fetch('datos.php')
        .then(response => response.json())
        .then(data => {
            // Asignamos los datos a las celdas correspondientes
            document.getElementById('ponderacion-experiencia').textContent = data.experiencia;
            document.getElementById('ponderacion-tecnica').textContent = data.tecnica;
            document.getElementById('ponderacion-docente').textContent = data.docente;
            document.getElementById('ponderacion-instructor').textContent = data.instructor;
            document.getElementById('ponderacion-poblacion').textContent = data.poblacion;
            document.getElementById('ponderacion-certificacion').textContent = data.certificacion;
            document.getElementById('ponderacion-formacion').textContent = data.formacion;
            document.getElementById('ponderacion-educacion').textContent = data.educacion;

            // Subcategorías
            document.getElementById('ponderacion-poblacion-subcategoria').textContent = data.poblacion_subcategoria;
            document.getElementById('ponderacion-certificacion-subcategoria').textContent = data.certificacion_subcategoria;
            document.getElementById('ponderacion-formacion-subcategoria').textContent = data.formacion_subcategoria;

            // Educación y porcentajes
            document.getElementById('ponderacion-tecnico-profesional').textContent = data.tecnico_profesional;
            document.getElementById('ponderacion-especializacion-tecnica').textContent = data.especializacion_tecnica;
            document.getElementById('ponderacion-tecnologia').textContent = data.tecnologia;
            document.getElementById('ponderacion-especializacion-tecnologica').textContent = data.especializacion_tecnologica;
            document.getElementById('ponderacion-profesional-universitario').textContent = data.profesional_universitario;
            document.getElementById('ponderacion-especializacion').textContent = data.especializacion;
            document.getElementById('ponderacion-maestria').textContent = data.maestria;
            document.getElementById('ponderacion-doctorado').textContent = data.doctorado;
        })
        .catch(error => console.error('Error al cargar los datos:', error));
});
