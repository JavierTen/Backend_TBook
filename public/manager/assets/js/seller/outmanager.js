 $(document).ready(function() {
      
		$("#categorie_id").on('change', function (e) {

		    var option = $(this).val();
		    $.ajax({           
		       url: '/manager/select/subcategories/'+option,
		       type: "GET",
		       datatype: "html",
		    }).done(function(data){     	
		        $("#divSubcategories").empty().html(data);            
		        $('#subcategorie_id').select2();         
		    })
		    .fail(function(jqXHR, ajaxOptions, thrownError){
		    });
	    
	});   	
    });
