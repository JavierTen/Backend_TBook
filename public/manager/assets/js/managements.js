  
  $('#denomination').on('change', function (e) {
      
      var option = $(this).val();

       $.ajax({           
         url: '/select/proceedings/'+option,
         type: "GET",
         datatype: "html",
      }).done(function(data){       
          $("#divProceeding").empty().html(data);            
          $('#proceeding').select2();         
      })
      .fail(function(jqXHR, ajaxOptions, thrownError){
      });

    });

  $('#modalitie').on('change', function (e) {

      var option = $(this).val();

      $.ajax({           
         url: '/select/denominations/'+option,
         type: "GET",
         datatype: "html",
      }).done(function(data){       
          $("#divDenomination").empty().html(data);            
          $('#denomination').select2();         
      })
      .fail(function(jqXHR, ajaxOptions, thrownError){
      });

    
      var options = null;

      $.ajax({           
         url: '/select/proceedings/'+options,
         type: "GET",
         datatype: "html",
      }).done(function(data){       
          $("#divProceeding").empty().html(data);            
          $('#proceeding').select2();         
      })
      .fail(function(jqXHR, ajaxOptions, thrownError){
      });
  });

 
$('.inputfile').each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.next( 'label' ),
			labelVal = $label.html();

		$input.on( 'change', function( e )
		{
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				$label.find( 'span' ).html( fileName );
			else
				$label.html( labelVal );
		});

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});


$('#proceeding').on('change', function (e) {

    var option = $(this).val()

    /*
 	$.ajax({           
       url: '/select/proceedings/'+option,
       type: "GET",
       datatype: "html",
    }).done(function(data){ 
        $("#divProceeding").empty().html(data);            
    })
    .fail(function(jqXHR, ajaxOptions, thrownError){
        alert('No response from server');
    });
	*/

});

$('#municipalitie').on('change', function (e) {
	
});


$('#wysiwyg5').wysihtml5({
                html: true,
                stylesheets: ["pages/css/editor.css"]
            });



 