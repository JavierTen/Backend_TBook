@extends('pages/layouts/views')


@section('content')
       
   <section class="jumbotron demo-custom-height xs-full-height bg-black" data-pages-bg-image="assets/pages/images/hero_4.jpg">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-left">
          <div class="container">
            <div class="col-sm-6">
              <h1 class="light text-white">The new websites <br>on its way!</h1>
              <h4 class="text-white">Sign up for our spam free newsletter</h4>
              <form class="m-t-25 m-b-20">
                <div class="form-group form-group-default input-group no-border input-group-attached col-md-12  col-sm-12 col-xs-12">
                  <label class="control-label">Email Address</label>
                  <input type="email" class="form-control" placeholder="johnsmith@abc.com">
                  <span class="input-group-btn">
                     <button class="btn btn-black  btn-cons" type="button">Subscribe!</button>
                  </span>
                </div>
              </form>
              <p class="text-white fs-12">Be first to find out when we Launch our product.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection


