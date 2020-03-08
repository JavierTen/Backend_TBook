<p class="form-row form-row-wide">
    <label>Municipio <strong>*</strong></label>
    {!! Form::select('province_id', $provinces, null , ['class' => 'chosen-select','style' => 'width:100%; height:46px;','name' => 'province_billing' ,'id' => 'province_billing']) !!}    
</p> 


 <script>  
      
      $("#province_billing").change(function(){
            var csrf = $('#csrf-token').val();  
            var province = $('select[name=province_billing]').val();

            $.post(

                        '/billing/cities',
                        {   
                            '_token': csrf,
                            'province':province, 
                        }, 
                        function(data){  
                            $("#citieBilling").empty().html(data);       
                        }
            ); 
       });                   
 </script>