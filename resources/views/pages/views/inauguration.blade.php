@extends('layouts.pages')


@section('content')


<script src="{{ asset('manager/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('manager/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>    


<!-- Banner Section Start Here -->
<section class="banner">
   <div class="shape-1">
      <img src="assets/images/banner/shape/01.png" alt="banner">
   </div>
   <div class="shape-2">
      <img src="assets/images/banner/shape/02.png" alt="banner">
   </div>
   <div class="banner-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-12">
               <div class="banner-content">
                  <h2>Unique Food Network...</h2>
                  <form action="https://www.foxcoders.com/">
                     <div class="codexcoder-selectoption">
                        <select name="text">
                           <option value="1">Find A Food</option>
                           <option value="2">Find A Chef</option>
                        </select>
                     </div>
                     <input type="text" name="type" placeholder="Enter your food name">
                     <button type="submit"><i class="icofont-search-2"></i></button>
                  </form>
                  <ul>
                     <li><span>700+</span>Restaurant</li>
                     <li><span>6900+</span>People Served</li>
                     <li><span>6900+</span>Registered Users</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Contact From Section Start Here -->
<section class="contact-us food-apps">
   <div class="bg-shape-style"></div>
   <div class="container">
      
      <div class="row justify-content-center align-items-center">
         
         <div class="col-lg-6 col-12">
            <div class="apps-thumb">
               <img src="assets/images/apps/01.png" alt="food-apps">
            </div>
         </div>

         <div class="col-xl- col-lg-6 col-12">
            <div class="apps-content padding-tb">

            <div class="section-header">
                  <h3>Mezban FoodBakery In Your Mobile! Get Our App</h3>
                  <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to Food Delivery & Takeout App.</p>     
            </div>
               
            <div class="contact-from food-btn-group">
               <h5>Register Now</h5>
               
               <form id="formInscribed"  role="form" onSubmit="return false">
                  <input type="text" name="firstname" id="firstname" placeholder="Nombres*">
                  <input type="text"  name="lastname" id="lastname" placeholder="Apellidos*">
                  <input type="email"  name="email" id="email" placeholder="Correo*">
                  <input type="text"  name="cellphone" id="cellphone" placeholder="Celular*">
                  
               </form 
               <a class="btn btn-default" type="submit" id="clearQuotations"><i class="pg-close"></i> Limpiar</a>

               <a href="javascript:;" class=" contact-from food-btn-group food-btn" id="addInscribeds" >
                   Participa
                </a>
            </div>
         </div>
         
      </div>
   </div>
</section>
<!-- Contact From Section Ending Here -->



<script type="text/javascript" >

    $(document).ready(function() {

    jQuery.validator.addMethod("emailExt", function(value, element, param) {
        return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,3}$/);
    },'Porfavor ingrese email valido');
    
    
    $("#addInscribeds").click(function() {
        $("#formInscribed").submit();
    });
        
        $("#formInscribed").validate({    
        submit: false,
        ignore: ":hidden:not(#note),.note-editable.panel-body",
        rules: {
            firstname: {
                required: false,
                //minlength: 5,
                //maxlength: 50,
            },
            lastname: {
                required: false,
                //minlength: 6,
                // maxlength: 50,
            },
            cellphone: {
                required: false,
                //minlength: 10,
                //maxlength: 10,
            },
            email: {
                required: false,
                //email: true,
                //emailExt: true,
            }
        },
        messages: {
            firstname: {
                required: "El contacto es obligatorio",
                minlength: "El contacto debe contener al menos 5 caracteres",
                maxlength: "El contacto debe contener no mas de 50 caracteres"
            },
            lastname: {
                required: "El contacto es obligatorio",
                minlength: "El contacto debe contener al menos 5 caracteres",
                maxlength: "El contacto debe contener no mas de 50 caracteres"
            },
            cellphone: {
                required: "El campo usuario es obligatorio",
                minlength: "El usuario debe contener al menos 10 caracteres",
                maxlength: "El usuario debe contener no mas de 10 caracteres",
                numer: "Solo se puede ingresar numeros"
            },
            email: {
                required: "Ingresar email",
                email: "Porfavor ingrese email valido",
            },
        },
        submitHandler: function(form) {
            
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            var cellphone = $("#cellphone").val();
            var email = $("#email").val();
        
            $.ajax({
                url: "/inaugurations/inscribeds/storage",
                type: "POST",
                datatype: "json",
                data: {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    firstname: firstname,
                    lastname: lastname,
                    cellphone: cellphone,
                    email: email,
        
                },
                success: function(data) {
                    //load();
                    //total();
    /*
                    setTimeout(function(){
                        $("#divNotification").empty().html(data);
                    }, 1000);


                    setTimeout(function(){
                                var URLactual = window.location.origin;
                                window.location.replace(URLactual +"/speaker/settings");
                    }, 2000);*/

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    if (jqXHR.status == 500) {
                        alert('Internal error: ' + jqXHR.responseText);
                    } else {
                        alert('Unexpected error.');
                    }
                }
            });

        }
        });
    });
        

</script>

@endsection
