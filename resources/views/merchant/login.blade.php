@extends('layouts.session')
@section('title', 'Login')
@section('content')
    <div class="content-wrapper">
        <div class="content-inner">
            {{-- <div class="content d-flex justify-content-center align-items-center">
                <form id="admin-login-form" class="login-form" action="{{ route('login') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="card mb-0 login_box">
                        <div class="card-body" >
                            <div class="text-center mb-3">
                                <img src="{{ asset('/admin/logo/logo_1.png') }}" width="100" style="border-radius:0%" />
                                <h5 class="mb-0 sp-des">Login</h5>
                            </div>
                            @include('success-error')
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    autocomplete="off">
                            </div>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Password">
                            </div>
                            
                            <div class="form-group mt-45">
                                <button type="submit" class="btn btn-primary btn-block session-btn">Sign in</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> --}}

            <section class="h-100 gradient-form" >
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                      <div class="card rounded-3 text-black">
                        <div class="row g-0">
                          <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                              @include('success-error')
                              <div class="text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                  style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                              </div>
              
                              <form id="admin-login-form"  method="post"  action={{url('login') }} autocomplete="on">
                                @csrf
                                <p>Please login to your account</p>
              
                                <div class="form-outline mb-4">
                                  <input type="email" name="email" id="form2Example11" class="form-control"
                                    placeholder="Phone number or email address" />
                                  
                                </div>
              
                                <div class="form-outline mb-4">
                                  <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Password" />
                                  
                                </div>
              
                                <div class="text-center pt-1 mb-5 pb-1">
                                  <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                                    in</button>
                                  <a class="text-muted" href="#!">Forgot password?</a>
                                </div>
              
                                <div class="d-flex align-items-center justify-content-center pb-4">
                                  <p class="mb-0 me-2">Don't have an account? &nbsp;</p>
                                  <a href={{url('register')}} class="btn btn-outline-danger">Create new</a>
                                </div>
              
                              </form>
              
                            </div>
                          </div>
                          <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                              <h4 class="mb-4">We are more than just a company</h4>
                              <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
@endsection
@section('page_script')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#email").val("");
                $("#password").val("");
            }, 500)
            $("#admin-login-form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },
                },
                message: {
                    email: 'Email field is required',
                    password: 'Password field is required',
                },
                errorElement: 'span',
                errorClass: 'error text-danger',
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
@section('page_style')
    <style>
    </style>
@endsection
