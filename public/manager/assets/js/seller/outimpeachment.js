    $(document).ready(function(){


      $(".outImpeachment").click(function(e){      
                      
                      var impeachment = $(this).find("input[name='impeachment']").val();
                      var modalities = $("#contentProsecution").find("input[name='tokenModalities']").val();     
                      var municipalitie = $("#contentProsecution").find("input[name='tokenMunicipalitie']").val();        
                      var proceeding = $("#contentProsecution").find("input[name='tokenProceedings']").val();     
                      var denomination = $("#contentProsecution").find("input[name='tokenDenominations']").val(); 
                     
                          $.ajax({  
                              url: '/auditors/'+modalities+'/'+municipalitie+'/'+denomination+'/'+proceeding+'/impeachment/'+impeachment,
                              type: "GET",
                              datatype: "html",
                          }).done(function(data){ 
                             $("#divListing").empty().html(data);            
                          })
                          .fail(function(jqXHR, ajaxOptions, thrownError){
                          });

    });



});