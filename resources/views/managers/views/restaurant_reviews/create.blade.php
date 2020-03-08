@extends('layouts.managers')



@section('content')
    

<link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
<link href="{{ asset('manager/assets/plugins/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('plugins/dropzone/bootstrap.min.css')}}">


<div class="content ">
  <!-- START CONTAINER FLUID -->
  <div class=" container-fluid   container-fixed-lg">
    <!-- START BREADCRUMB -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Form layouts</li>
    </ol>
    <!-- END BREADCRUMB -->
    
  </div>
  <!-- END CONTAINER FLUID -->
  <!-- START CONTAINER FLUID -->
  <div class=" container-fluid   container-fixed-lg bg-white">
    <div class="row">
      <div class="col-md-5">
        <!-- START card -->
        <div class="card card-transparent">
          <div class="card-header ">
            <div class="card-title">Attached form layouts
            </div>
          </div>
          <div class="card-body">
            <h3>Attach your Forms to Organize
          &amp; Create Contemporary feels</h3>
            <p>Despite the UI, We thought of the User experience, With attached From Layouts you can simply categories Important fields and prioritize them.</p>
            <br>
            <div>
              <div class="profile-img-wrapper m-t-5 inline">
                <img width="35" height="35" src="assets/img/profiles/avatar_small2x.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                <div class="chat-status available">
                </div>
              </div>
              <div class="inline m-l-10">
                <p class="small hint-text">VIA senior product manage
                  <br> for UI/UX at REVOX</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END card -->
      </div>
      <div class="col-md-7">
        <!-- START card -->
        <div class="card card-transparent">
          <div class="card-body">
            <form id="form-project" role="form" autocomplete="off" novalidate="novalidate">

              <div class="form-group-attached p-b-20">
                
            
                
               <div class="row">
                  <div class="col-md-12">
                    <div class="form-group form-group-default form-group-default-select2 required">
                    <label>Usuario</label>
                    {!! Form::select('users', $users, null , ['class' => 'full-width' ,'name' => 'users' , 'data-init-plugin' => 'select2', 'id' => 'usersSelect' , 'required']) !!}
                    </div>
                  </div>
              </div>   

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-group-default form-group-default-select2 required">
                  <label>Usuario</label>
                  {!! Form::select('restaurants', $restaurants, null , ['class' => 'full-width' ,'name' => 'restaurants' , 'data-init-plugin' => 'select2', 'id' => 'restaurantsSelect' , 'required']) !!}
                  </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-group-default required" aria-required="true">
                    <label>Calificacion</label>
                    {!! Form::text('rate', null,  ['class' => 'form-control','placeholder'=>  trans("lang.restaurant_name_placeholder")]) !!}
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group form-group-default input-group">
                    <div class="form-input-group">
                      <label class="inline">Estado</label>
                    </div>
                    <div class="input-group-append h-c-50">
                      <span class="input-group-text transparent">  
                        <input type="checkbox" data-init-plugin="switchery" data-size="small" data-color="primary" checked="checked" name="authorization" id="authorization"  data-switchery="true" style="display: none;"/>
                                          
                      </span>
                    </div>
                  </div>
                </div>
             </div>

              <div class="card card-default">
                  <div class="card-header ">
                    <div class="card-title">Comentario
                    </div>
                  </div>
                  <div class="card-body no-scroll card-toolbar">
                    <div class="summernote-wrapper">
                              <textarea name="hint" id="hint" class="summernote"></textarea>
                    </div>
                  </div>
              </div>

              <br>
              <div class="pull-left">
                <div class="checkbox check-success  ">
                  <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                  <label for="checkbox-agree">Por la presente certifico que la información anterior es verdadera y precisa
                  </label>
                </div>
              </div>
              <br>
              <button class="btn btn-success" type="submit">Crear</button>
              <button class="btn btn-default"><i class="pg-close"></i> Limpiar</button>
            </form>
          </div>
        </div>
        <!-- END card -->
      </div>
    </div>
  </div>
  <!-- END CONTAINER FLUID -->
  <!-- START CONTAINER FLUID -->
  
  <!-- END CONTAINER FLUID -->
</div>



<script src="{{ asset('manager/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('/manager/assets/js/managers/outrestaurants.js')}}"></script>



@endsection
