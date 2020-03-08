<p class="form-row form-row-wide m-t-10">
     <label>Ciudad <strong>*</strong></label>
     {!! Form::select('citie_id', $cities, null , ['class' => 'chosen-select','style' => 'width:100%; height:46px;' ,'name' => 'citie_billing' ,'id' => 'citie_billing']) !!} 
 </p>