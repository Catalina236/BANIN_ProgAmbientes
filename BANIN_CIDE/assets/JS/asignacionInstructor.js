$(document).ready(function(){
    $('#num_doc_evaluador').change(function(){
        var num_doc = $(this).val();
        $.ajax({
            url: './asignacionInstructor.php',
            type: 'POST',
            data: { 
                num_doc_evaluador: num_doc, 
                ajax: 'nombre_evaluador' 
            },
            success: function(response){
                $('#nombre_completo').val(response);
            },
            error: function(xhr, status, error) {
                alert('Error al obtener el nombre del evaluador');
            }
        });
    });
});
