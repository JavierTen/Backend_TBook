
@extends('layouts.pages')

@section('content')
<!-- Contact Us Section Start Here -->
<section class="contact-information padding-tb pb-xl-0">
    <div class="container">
        <div class="section-wrapper">
            <div class="row">
                <div class="col-lg-12 col-6">
                    <h5>Send Us A Message</h5>
                  
                    <form  class="d-flex flex-wrap justify-content-between" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}   


                        <input type="email" name="email" id="email" placeholder="Your Eamil*">
                        <input type="password" name="password" id="password" placeholder="Your Password*">
                        <button type="submit" class="food-btn style-2"><span>Submit Message</span></button>
                    </form>

                    @if(setting('enable_facebook',false) || setting('enable_google',false) || setting('enable_twitter',false))
                    <div class="social-auth-links text-center mb-3">
                        <p style="text-transform: uppercase">- {{__('lang.or')}} -</p>
                        @if(setting('enable_facebook',false))
                            <a href="{{url('login/facebook')}}" class="btn btn-block btn-facebook">
                                <i class="fa fa-facebook mr-2"></i> {{__('auth.login_facebook')}}
                            </a>
                        @endif
                        @if(setting('enable_google',false))
                            <a href="{{url('login/google')}}" class="btn btn-block btn-google"> <i class="fa fa-google-plus mr-2"></i> {{__('auth.login_google')}}
                            </a>
                        @endif
                        @if(setting('enable_twitter',false))
                            <a href="{{url('login/twitter')}}" class="btn btn-block btn-twitter"> <i class="fa fa-twitter mr-2"></i> {{__('auth.login_twitter')}}
                            </a>
                        @endif
                    </div>
                    <!-- /.social-auth-links -->
                @endif

                <p class="mb-1 text-center">
                  <a href="{{ url('/password/reset') }}">{{__('auth.forgot_password')}}</a>
              </p>
              <p class="mb-0 text-center">
                  <a href="{{ url('/register') }}" class="text-center">{{__('auth.register_new_member')}}</a>
              </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section Ending Here -->


@endsection
