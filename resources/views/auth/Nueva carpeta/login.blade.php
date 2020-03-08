@extends('layouts.pages')

@push('body')       
   <body class="woocommerce-account">
@endpush

@section('content')
<div class="pizzaro-breadcrumb">
               <nav class="woocommerce-breadcrumb"><a href="index-1.html">Inicio</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Login</nav>
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                     <div id="post-10" class="post-10 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="woocommerce">
                              <div class="customer-login-form">
                                 <span class="or-text">or</span>
                                 <div class="u-columns col2-set" id="customer_login">
                                    <div class="u-column1 col-1">
                                       <h2>Login</h2> 
                                       <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('login') }}">
                                          {{ csrf_field() }}   
                                          <p class="before-login-text">¡Dar una buena acogida! Iniciar sesión en su cuenta</p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="username">Usuario o email <span class="required">*</span></label>
                                             <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" value="">
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="password">Contraseña <span class="required">*</span></label>
                                             <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password">
                                          </p>
                                          <p class="form-row">
                                             
                                             <input type="submit" class="woocommerce-Button button" name="login" value="Ingresar">
                                             <label for="rememberme" class="inline">
                                             <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> Recordarme
                                             </label>
                                          </p>
                                       </form>
                                    </div>
                                    <div class="u-column2 col-2">
                                       <h2>Register</h2>
                                       <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('register') }}">
                                          {{ csrf_field() }}   
                                          <p class="before-register-text">Crea tu propia cuenta</p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_email">Email <span class="required">*</span></label>
                                             <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" value="">
                                          </p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                             <label for="reg_password">Contraseña <span class="required">*</span></label>
                                             <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="password">
                                          </p>
                                          <!-- Spam Trap -->
                                          <div style="left: -999em; position: absolute;">
                                             <label for="trap">Anti-spam</label>
                                             <input type="text" name="email_2" id="trap" tabindex="-1">
                                          </div>
                                          <p class="woocomerce-FormRow form-row">                                           
                                             <input type="submit" class="woocommerce-Button button" name="register" value="Registrarse">
                                          </p>
                                          <div class="register-benefits">
                                             <h3>Sign up today and you will be able to :</h3>
                                             <ul>
                                                <li>Speed your way through checkout</li>
                                                <li>Track your orders easily</li>
                                                <li>Keep a record of all your purchases</li>
                                             </ul>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.customer-login-form -->
                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>

@endsection


