    $(document).ready(function() {

        $('#quotations_datatable').DataTable({
            lengthChange: false,
            processing: false,
            serverSide: false,
            iDisplayLength: 20,
            language : { 
                "search": "Buscar :",
                "lengthMenu": "Visualizar  _MENU_",
                "zeroRecords": "Nada Encontrado - ",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles.",
                "infoFiltered": "(filtrado de _MAX_ registros totales)"
            },
            ajax: {
              url: "/advisers/quotations/get",
              type: 'GET',
            },
            columns: [
              { data: 'number', name: 'number', orderable: true,searchable: true },
              { data: 'customer', name: 'customer' , orderable: true,searchable: true},
              { data: 'condition', name: 'condition' , orderable: true,searchable: true},
              { data: 'assortment', name: 'assortment', orderable: true,searchable: true },
              {data: 'action', name: 'action', orderable: true},
           ],
            order: [[0, 'desc']]
      });

      $('#question, #answer').summernote({
            height: 200,
            onfocus: function(e) {
                $('body').addClass('overlay-disabled');
            },
            onblur: function(e) {
                $('body').removeClass('overlay-disabled');
            },
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic']],
                ['para', ['ul', 'ol']]
            ]
        });    
        
    });
