$(document).ready(function() {
   $('#responsive').DataTable({
    lengthChange: true,
    pageLength: 5,  // numero de filas en una pagina
    lengthMenu: [ 5,10, 25, 50, 75, 100 ],  //la longitud de la paginacion
    // buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ],
        language: {
           "decimal": "",
           "emptyTable": "No hay información",
           "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
           "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
           "infoFiltered": "(Filtrado de _MAX_ total entradas)",
           "infoPostFix": "",
           "thousands": ",",
           "lengthMenu": "Mostrar _MENU_ Entradas",
           "loadingRecords": "Cargando...",
           "processing": "Procesando...",
           "search": "Buscar:",
           "zeroRecords": "Sin resultados encontrados",
           "paginate": {
               "first": "Primero",
               "last": "Ultimo",
               "next": "Siguiente",
               "previous": "Anterior"
           }
       },

    });
    // .buttons().container()
    //     .appendTo( '#responsive_wrapper .col-md-6:eq(0)' );
    
} );


var table = $('#example').DataTable( {
    lengthChange: false,
    buttons: [ 'excel', 'csv', 'pdf',  {extend: 'print', text: 'Imprimir'}, {extend: 'colvis', text: 'Columas visibles'} ],
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
} );

table.buttons().container()
    .appendTo( '#example_wrapper .col-md-6:eq(0)' );