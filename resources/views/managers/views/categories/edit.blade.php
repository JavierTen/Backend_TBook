@extends('layouts.managers')



@section('content')
    

<link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
<link href="{{ asset('manager/assets/plugins/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('manager/assets/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css">
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
                <div class="form-group form-group-default required" aria-required="true">
                  <label>Nombre</label>
                  {!! Form::text('name', $categorie->name,  ['class' => 'form-control','placeholder'=>  trans("lang.restaurant_name_placeholder")]) !!}
                </div>
              </div>
            <div class="row">           
                <div class="col-md-12">
                <!-- START card -->
                <div class="card card-default">
                  <div class="card-header ">
                    <div class="card-title">
                      Galeria restaurante
                    </div>
                    <div class="tools">
                      <a class="collapse" href="javascript:;"></a>
                      <a class="config" data-toggle="modal" href="#grid-config"></a>
                      <a class="reload" href="javascript:;"></a>
                      <a class="remove" href="javascript:;"></a>
                    </div>
                  </div>
                  <div class="card-body no-scroll no-padding">
                  <div class="col-12">
                    <div style="width: 100%" class="dropzone image" id="image" data-field="image">
                      <input type="hidden" name="image">
                    </div>
                    <a href="#loadMediaModal" data-dropzone="image" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-{{setting('theme_color','primary')}} btn-sm float-right mt-1">{{ trans('lang.media_select')}}</a>
                  </div>
                  </div>
                </div>
                <!-- END card -->
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
              <button class="btn btn-success" type="submit">Editar</button>
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
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('/manager/assets/js/managers/outrestaurants.js')}}"></script>


<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var dropzoneFields = [];
</script>

<script type="text/javascript">
  var var15671147051368295516ble = '';
  @if(isset($category) && $category->hasMedia('image'))
  var15671147051368295516ble = {
      name: "{!! $category->getFirstMedia('image')->name !!}",
      size: "{!! $category->getFirstMedia('image')->size !!}",
      type: "{!! $category->getFirstMedia('image')->mime_type !!}",
      collection_name: "{!! $category->getFirstMedia('image')->collection_name !!}"};
  @endif
  var dz_var15671147051368295516ble = $(".dropzone.image").dropzone({
      url: "{!!url('uploads/store')!!}",
      addRemoveLinks: true,
      maxFiles: 1,
      init: function () {
      @if(isset($category) && $category->hasMedia('image'))
          dzInit(this,var15671147051368295516ble,'{!! url($category->getFirstMediaUrl('image','thumb')) !!}')
      @endif
      },
      accept: function(file, done) {
          dzAccept(file,done,this.element,"{!!config('medialibrary.icons_folder')!!}");
      },
      sending: function (file, xhr, formData) {
          dzSending(this,file,formData,'{!! csrf_token() !!}');
      },
      maxfilesexceeded: function (file) {
          dz_var15671147051368295516ble[0].mockFile = '';
          dzMaxfile(this,file);
      },
      complete: function (file) {
          dzComplete(this, file, var15671147051368295516ble, dz_var15671147051368295516ble[0].mockFile);
          dz_var15671147051368295516ble[0].mockFile = file;
      },
      removedfile: function (file) {
          dzRemoveFile(
              file, var15671147051368295516ble, '{!! url("categories/remove-media") !!}',
              'image', '{!! isset($category) ? $category->id : 0 !!}', '{!! url("uplaods/clear") !!}', '{!! csrf_token() !!}'
          );
      }
  });
  dz_var15671147051368295516ble[0].mockFile = var15671147051368295516ble;
  dropzoneFields['image'] = dz_var15671147051368295516ble;
</script>




@endsection


@include('managers.partials.modals.media')


