$(document).ready(function() {			   
	$('#panel_usuario').DataTable( {	
		"bDeferRender": true,			
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "../../../modelo/model_admin/funcion_usu.php",
        	"type": "POST"
		},					
		"columns": [
			{ "data": "datos" },
			{ "data": "usuario" },
            { "data": "correos" },
            { "data": "tipo_usuario" },
            { "data": "cuenta" },
            { "data": "ciudad" },
			{ "data": "estado" }
			//{ "data": "acciones"}
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="25">25</option>'+
		        '<option value="50">50</option>'+
		        '<option value="100">100</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando (_START_ a _END_) de total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrandp del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Ultimo",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});