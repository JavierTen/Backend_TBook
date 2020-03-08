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
  <div class=" container-fluid   container-fixed-lg">
    <div id="rootwizard" class="m-t-50">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
        <li class="nav-item">
          <a class="active" data-toggle="tab" href="#tab1" data-target="#tab1" role="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Tu Orden</span></a>
        </li>
        <li class="nav-item">
          <a class="" data-toggle="tab" href="#tab2" data-target="#tab2" role="tab"><i class="fa fa-truck tab-icon"></i> <span>Detalle Orden</span></a>
        </li>
        <li class="nav-item">
          <a class="" data-toggle="tab" href="#tab3" data-target="#tab3" role="tab"><i class="fa fa-check tab-icon"></i> <span>Notificar</span></a>
        </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
          <div class="row row-same-height">
            <div class="col-md-12">

              
              <div class="padding-30 sm-padding-5">
                
              <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                 
                    <h2>Your Bags are ready to check out!</h2>
                    <p>Discover goods youll love from brands that inspire. The easiest way to open your own online store. Discover amazing stuff or open your own store for free!</p>
                    <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>

                </div>
              </div>
              

                <table class="table table-condensed">
                  @foreach($order->foodOrders as $key)
                    <tr>
                      <td class="col-lg-12 col-md-12 col-sm-12 ">                        
                        <span class=" no-margin font-montserrat all-caps p-b-5 row">{{ $key->food->name }}</span>
                        @if($key->extras->count() >= 1)                        
                        <a class="h4 font-montserrat fs-11 all-caps no-margin">Extras</a>
                        <a class="text-primary  font-montserrat fs-11 all-caps no-margin">
                          (
                          @foreach($key->extras as $extra)
                            {{ $extra->name }},
                          @endforeach
                          )
                        </a>  
                        @endif
                                           
                      </td>
                      <td class=" col-lg-2 col-md-2 col-sm-2 text-right">
                        <span>{{ $key->quantity }}</span>
                      </td>
                      <td class=" col-lg-2 col-md-2 col-sm-2 text-right">
                        <h4 class="text-primary no-margin font-montserrat">${{ $key->price }}</h4>
                      </td>
                      <td class=" col-lg-2 col-md-2 col-sm-2 text-right">
                        <h4 class="text-primary no-margin font-montserrat">${{ $key->price*$key->quantity }}</h4>
                      </td>
                  </tr>
                  @endforeach
                </table>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <p class="no-margin">Donate now and give clean, safe water to those in need. </p>
                    <p class="small hint-text">
                      100% of your donation goes to the field, and you can track the progress of every dollar spent. <a href="#">Click Here</a>
                    </p>
                  </div>
                </div>
                <br>
                <div class="row b-a b-grey no-margin">
                  <div class="col-md-4 p-l-10 sm-padding-15 align-items-center d-flex">
                    <div>
                      <h5 class="font-montserrat all-caps small no-margin hint-text bold">Subtotal</h5>
                      <h4 class="no-margin">{!! getPrice($subtotal) !!}</h4>
                    </div>
                  </div>
                  <div class="col-md-4 col-middle sm-padding-15 align-items-center d-flex">
                    <div>
                      <h5 class="font-montserrat all-caps small no-margin hint-text bold">Inpuesto ({{ $order->tax }})</h5>
                      <h4 class="no-margin">{!! getPrice($subtotal * $order->tax/100)!!}</h4>
                    </div>
                  </div>
                  <div class="col-md-4 text-right bg-primary padding-10">
                    <h5 class="font-montserrat all-caps small no-margin hint-text text-white bold">Total</h5>
                    <h4 class="no-margin text-white">{!!getPrice($total)!!}</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
          <div class="row row-same-height">
            <div class="col-md-5 b-r b-dashed b-grey ">
              <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                <h2>We Secured Your Line</h2>
                <p>Below is a sample page for your cart , Created using pages design UI Elementes</p>
                <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
                
                <table class="table table-condensed">
                  @foreach($order->foodOrders as $key)
                    <tr>
                      <td class="col-lg-8 col-md-6 col-sm-7 ">
                        <span class="m-l-10 font-montserrat fs-11 all-caps">{{ $key->food->name }}</span>
                      </td>
                      <td class=" col-lg-2 col-md-3 col-sm-2 text-right">
                        <h4 class="text-primary no-margin font-montserrat">${{ $key->price*$key->quantity }}</h4>
                      </td>
                  </tr>
                  @endforeach
                  
                  <tr>
                    <td colspan="2" class=" col-md-3 text-right">
                      <h4 class="text-primary no-margin font-montserrat">{!!getPrice($total)!!}</h4>
                    </td>
                  </tr>

                </table>
                
                <p class="small">Invoice are issued on the date of despatch. Payment terms: Pre-orders: within 10 days of invoice date with 4% discount, from the 11th to the 30th day net. Re-orders: non-reduced stock items are payable net after 20 days. </p>
                <p class="small">By pressing Pay Now You will Agree to the Payment <a href="#">Terms &amp; Conditions</a></p>
              </div>
            </div>
            <div class="col-md-7">
              <div class="padding-30 sm-padding-5">
                <form role="form">
                  <div class="form-group-attached">
                    
                    <div class="form-group form-group-default required">
                      <label>Orden #</label>
                      {!! Form::text('name', $order->id,  ['class' => 'form-control disabled' ,'disabled','placeholder'=>  trans("lang.restaurant_name_placeholder")]) !!}
                    </div>

                    <div class="form-group form-group-default required">
                      <label>Cliente</label>
                      {!! Form::text('name', $order->user->name,  ['class' => 'form-control disabled' ,'disabled','placeholder'=>  trans("lang.restaurant_name_placeholder")]) !!}
                    </div>
                    
                    <div class="form-group form-group-default required">
                      <label>Dirección</label>
                      {!! Form::text('address', $order->deliveryAddress->address,  ['class' => 'form-control disabled' ,'disabled','placeholder'=>  trans("lang.restaurant_name_placeholder")]) !!}
                    </div>

                    <div class="row clearfix">
                      
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Fecha</label>
                          {!! Form::text('created', $order->created_at,  ['class' => 'form-control disabled' ,'disabled','placeholder'=>  trans("lang.restaurant_name_placeholder")]) !!}
                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group form-group-default  m-t-25">
                      <label>Estado Orden</label>
                      <input type="text" class="form-control" value="{{$order->orderStatus->status}}"  disabled>
                    </div>
                    <div class="form-group form-group-default  ">
                      <label>Metodo Pago</label>
                      <input type="text" class="form-control" value="{{$order->payment->method}}"  disabled>
                    </div>
                    <div class="form-group form-group-default ">
                      <label>Estado Pago</label>
                      <input type="text" class="form-control" value="{{$order->payment->status}}"   disabled>
                    </div>


                      
                  <div class="card card-default">
                    <div class="card-header ">
                      <div class="card-title">Descripción
                      </div>
                    </div>
                    <div class="card-body no-scroll card-toolbar disable">
                      <div class="summernote-wrapper ">
                                <textarea name="description" id="description" class="summernote">{!! $order->deliveryAddress->description !!}</textarea>
                      </div>
                    </div>
                </div>
                  </div>
                  <br>
                </form>
              </div>
            </div>
          </div>
        </div>      
        <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
          <h1>Thank you.</h1>
        </div>
        <div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
          <ul class="pager wizard no-style">
            <li class="next">
              <button class="btn btn-primary btn-cons btn-animated from-left fa fa-truck pull-right" type="button">
                <span>Next</span>
              </button>
            </li>
            <li class="next finish hidden">
              <button class="btn btn-primary btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                <span>Finish</span>
              </button>
            </li>
            <li class="previous first hidden">
              <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                <span>First</span>
              </button>
            </li>
            <li class="previous">
              <button class="btn btn-default btn-cons pull-right" type="button">
                <span>Previous</span>
              </button>
            </li>
          </ul>
        </div>
        <div class="wizard-footer padding-20 bg-master-light">
          <p class="small hint-text pull-left no-margin">
            The Top Content Is Soley Created using pages UI Elements such as Invoice, Tabs, Form Layouts etc. and are prior for representation Purpose Only.
          </p>
          <div class="pull-right">
            <img src="/assets/img/logo.png" alt="logo" data-src="/assets/img/logo.png" data-src-retina="/assets/img/logo_2x.png" width="78" height="22">
          </div>
          <div class="clearfix"></div>
        </div>
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
<script src="{{asset('/manager/assets/js/managers/outorders.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function() {
      $(".note-editable").attr("contenteditable","false"); 
    });
    
</script>



@endsection


@include('managers.partials.modals.media')

