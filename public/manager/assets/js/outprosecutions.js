      
        $(".outProsecution").click(function(e){ 

            $("#noResult").css("display", "none");
            $("#contentWrapper").css("display", "");
                
            var token = $(this).find("input[name='tokenProsecutions']").val(); 
            $("#contentProsecution").find("input[name='tokenProsecutions']").val(token); 
                
            var modalities = $("#contentProsecution").find("input[name='tokenModalities']").val();     
            var municipalitie = $("#contentProsecution").find("input[name='tokenMunicipalitie']").val();        
            var proceeding = $("#contentProsecution").find("input[name='tokenProceedings']").val();     
            var denomination = $("#contentProsecution").find("input[name='tokenDenominations']").val(); 
            
            $.ajax({           
                url: '/auditors/'+modalities+'/'+municipalitie+'/'+denomination+'/'+proceeding+'/composers/header/'+token,
                type: "GET",
                datatype: "html",
                

            }).done(function(data){           
                $("#contentHeader").empty().html(data);            
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                console.log('No response from server');
            });

                        
            $.ajax({           
                url: '/auditors/'+modalities+'/'+municipalitie+'/'+denomination+'/'+proceeding+'/composers/prosecutions/'+token,
                type: "GET",
                datatype: "html",
            }).done(function(data){           
                $("#contentProsecutions").empty().html(data);            
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                console.log('No response from server');
            });
       

            $('.outProsecution').removeClass('active');
                $(this).addClass('active');

        });



        