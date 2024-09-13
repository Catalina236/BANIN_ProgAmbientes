document.addEventListener("DOMContentLoaded", function () {
    fetch('datosEducacion.php')
        .then(response => response.json())
        .then(data => {
            // Cargar los datos en la tabla de Experiencia
            document.querySelector('#exp-tecnica').innerHTML = data.experiencia[0].ponderacion;
            document.querySelector('#exp-docente').innerHTML = data.experiencia[1].ponderacion;
            document.querySelector('#exp-instructor').innerHTML = data.experiencia[2].ponderacion;
            document.querySelector('#exp-maxima').innerHTML = data.experiencia.ponderacion_maxima;
            document.querySelector('#exp-observacion').innerHTML = data.experiencia.observacion;

            // Cargar los datos de otras categorías
            document.querySelector('#pob-vulnerable').innerHTML = data.poblacion_vulnerable[0].ponderacion + "%";
            document.querySelector('#pob-maxima').innerHTML = data.poblacion_vulnerable.ponderacion_maxima;
            document.querySelector('#pob-observacion').innerHTML = data.poblacion_vulnerable.observacion;

            document.querySelector('#cert-competencias').innerHTML = data.certificacion_competencias[0].ponderacion + "%";
            document.querySelector('#cert-maxima').innerHTML = data.certificacion_competencias.ponderacion_maxima;
            document.querySelector('#cert-observacion').innerHTML = data.certificacion_competencias.observacion;

            document.querySelector('#form-laboral').innerHTML = data.formacion_laboral[0].ponderacion + "%";
            document.querySelector('#form-maxima').innerHTML = data.formacion_laboral.ponderacion_maxima;
            document.querySelector('#form-observacion').innerHTML = data.formacion_laboral.observacion;

            // Cargar los datos de Educación
            document.querySelector('#edu-tecnico').innerHTML = data.educacion[0].ponderacion + "%";
            document.querySelector('#edu-especial-tecnica').innerHTML = data.educacion[1].ponderacion + "%";
            document.querySelector('#edu-tecnologia').innerHTML = data.educacion[2].ponderacion + "%";
            document.querySelector('#edu-especial-tecnologica').innerHTML = data.educacion[3].ponderacion + "%";
            document.querySelector('#edu-profesional').innerHTML = data.educacion[4].ponderacion + "%";
            document.querySelector('#edu-especializacion').innerHTML = data.educacion[5].ponderacion + "%";
            document.querySelector('#edu-maestria').innerHTML = data.educacion[6].ponderacion + "%";
            document.querySelector('#edu-maxima').innerHTML = data.educacion.ponderacion_maxima;
            document.querySelector('#edu-observacion').innerHTML = data.educacion.observacion;
        })
        .catch(error => console.error('Error al cargar los datos:', error));
});
