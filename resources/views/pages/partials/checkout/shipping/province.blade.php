<p class="form-row form-row-wide">
        <label>Municipio <strong>*</strong></label>
        {!! Form::select('province_id', $provinces, null , ['class' => 'chosen-select','style' => 'width:100%; height:46px;','name' => 'province_shipping' ,'id' => 'province_shipping']) !!} 
</p> 

 <script>  
      
      $("#province_shipping").change(function(){
            var csrf = $('#csrf-token').val();  
            var province = $('select[name=province_shipping]').val();

            $.post(

                        '/shipping/cities',
                        {   
                            '_token': csrf,
                            'province':province, 
                        }, 
                        function(data){  
                            $("#citieShipping").empty().html(data);       
                        }
            ); 
       });              
 </script>
