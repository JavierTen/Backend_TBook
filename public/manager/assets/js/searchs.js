
(function($) {

    'use strict';

     $(".list-view-wrapper").scrollbar();

                  $('#overlay-prosecution').keypress(function(e) {
                      if(e.which == 13) {

                          var searchString = $('#overlay-prosecution').val();
                          var modalities = $("#contentProsecution").find("input[name='tokenModalities']").val();     
                          var municipalitie = $("#contentProsecution").find("input[name='tokenMunicipalitie']").val();        
                          var proceeding = $("#contentProsecution").find("input[name='tokenProceedings']").val();     
                          var denomination = $("#contentProsecution").find("input[name='tokenDenominations']").val(); 
                         
                          if (searchString == '') {
                              searchString =null;
                          }

                              $.ajax({           
                                  url: '/auditors/'+modalities+'/'+municipalitie+'/'+denomination+'/'+proceeding+'/'+searchString,
                                  type: "GET",
                                  datatype: "html",
                              }).done(function(data){ 
                                 $("#divListing").empty().html(data);            
                              })
                              .fail(function(jqXHR, ajaxOptions, thrownError)
                              {
                              });

                      }
                  });


              $('[data-pages="search"]').search({
                  // Bind elements that are included inside search overlay
                  searchField: '#overlay-search',
                  closeButton: '.overlay-close',
                  suggestions: '#overlay-suggestions',
                  brand: '.brand',
                   // Callback that will be run when you hit ENTER button on search box
                  onSearchSubmit: function(searchString) {
                      var searchField = $('#overlay-search');
                      var searchResults = $('.search-results');

                          $.ajax({     
                              url: '/auditors/search/'+searchString,
                              type: "GET",
                              datatype: "html",

                          }).done(function(data){ 
                             searchField.val(searchString);
                             searchResults.fadeIn("fast"); 
                             $("#divSearchs").empty().html(data);   
                                     
                          })
                          .fail(function(jqXHR, ajaxOptions, thrownError)
                          {
                          });
                  },  
                  // Callback that will be run whenever you enter a key into search box. 
                  // Perform any live search here.  
                  onKeyEnter: function(searchString) {                
                      
                  }
              }); 




                  $('#overlay-prosecution').keypress(function(e) {
                      if(e.which == 13) {

                          var searchString = $('#overlay-prosecution').val();
                          var modalities = $("#contentProsecution").find("input[name='tokenModalities']").val();     
                          var municipalitie = $("#contentProsecution").find("input[name='tokenMunicipalitie']").val();        
                          var proceeding = $("#contentProsecution").find("input[name='tokenProceedings']").val();     
                          var denomination = $("#contentProsecution").find("input[name='tokenDenominations']").val(); 
                         
                          if (searchString == '') {
                              searchString =null;
                          }

                              $.ajax({           
                                  url: '/auditors/'+modalities+'/'+municipalitie+'/'+denomination+'/'+proceeding+'/'+searchString,
                                  type: "GET",
                                  datatype: "html",
                              }).done(function(data){ 
                                 $("#divListing").empty().html(data);            
                              })
                              .fail(function(jqXHR, ajaxOptions, thrownError)
                              {
                              });

                      }
                  });
              

                $('#overlay-contributors').keypress(function(e) {
                  if(e.which == 13) {

                      var modalities = $("#contentContributors").find("input[name='tokenModalities']").val();     
                      var municipalitie = $("#contentContributors").find("input[name='tokenMunicipalitie']").val();       
                      var denomination = $("#contentProsecution").find("input[name='tokenDenominations']").val(); 
                      var searchString = $('#overlay-contributors').val();
                      
                      if (searchString == '') {
                          searchString =null;
                      }
                      
                          $.ajax({     
                              url: '/auditors/'+modalities+'/'+municipalitie+'/'+denomination+'/contributors/search/'+searchString,
                              type: "GET",
                              datatype: "html",

                          }).done(function(data){ 
                             $("#divListing").empty().html(data);   
                          })
                          .fail(function(jqXHR, ajaxOptions, thrownError)
                          {
                          });

                  }
            });

          $('#searchStories').keypress(function(e) {
            if(e.which == 13) {

                var token = $('#searchStories').val();
                             
                 if (token == '') {
                       token =null;
                 }

                $.ajax({           
                    url: '/auditors/stories/finger/'+token,
                    type: "GET",
                    datatype: "html",
                }).done(function(data){ 
                    $("#divStories").empty().html(data);            
                }) .fail(function(jqXHR, ajaxOptions, thrownError){
                                      
                    });

                }
    });


          $(".list-view-wrapper").scrollbar();

        $('#searchExpedients').keypress(function(e) {
                      
            if(e.which == 13) {

                    var token = $('#searchExpedients').val();
                                 
                    if (token == '') {
                        token =null;
                    }

                    $.ajax({           
                        url: '/auditors/expedients/finger/'+token,
                        type: "GET",
                        datatype: "html",
                    }).done(function(data){ 
                         $("#divExpedients").empty().html(data);            
                    }).fail(function(jqXHR, ajaxOptions, thrownError){
                         
                    });

            }
        });


    
    
})(window.jQuery);

