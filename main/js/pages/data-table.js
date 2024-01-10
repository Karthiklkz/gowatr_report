$(function () {
    "use strict";

    $('#example1').DataTable();
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
    });

    // If '#example' is the same table as 'tickets' or any other, ensure it's initialized only once
    if (!$.fn.DataTable.isDataTable('#example')) {
        $('#example').DataTable({
            dom: 'Bfrtip', // Add 'Bfrtip' to enable buttons
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
        });
    }

    $('#tickets').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
    });

});
