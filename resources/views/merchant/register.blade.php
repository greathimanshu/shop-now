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

            <section class="h-100 gradient-form">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="card-body p-md-5 mx-md-4">

                                            <div class="text-center">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                    style="width: 185px;" alt="logo">
                                                <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                            </div>

                                            <form id="admin-login-form" action="{{ route('register-user') }}" method="POST"
                                                autocomplete="off">
                                                @csrf
                                                {{-- <p>Please login to your account</p> --}}

                                                <div class="form-outline mb-4">
                                                    <input type="text" id="form2Example11" name="fullname"
                                                        class="form-control" placeholder="Full name" />
                                                    @if ($errors->has('fullname'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('fullname') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="email" id="form2Example11" name="email"
                                                        class="form-control" placeholder="Email" />
                                                    @if ($errors->has('email'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('email') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" id="form2Example11" name="password"
                                                        class="form-control" placeholder="Password" />
                                                    @if ($errors->has('password'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('password') }}
                                                        </p>
                                                    @endif

                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" id="form2Example22" name="confirm_password"
                                                        class="form-control" placeholder=" Confirme Password" />
                                                    @if ($errors->has('confirm_password'))
                                                        <p class="text-danger">
                                                            {{ $errors->first('confirm_password') }}
                                                        </p>
                                                    @endif
                                                </div>

                                                <div class="text-center pt-1 pb-1">
                                                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                        type="submit">Sign Up</button>
                                                    {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                                                </div>


                                                <div class="pb-1 mb-2">
                                                    <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline-primary"
                                                        href={{ route('auth.google') }}><img
                                                            src="https://img.icons8.com/color/16/000000/google-logo.png">
                                                        Signup Using Google</a>

                                                </div>


                                                <div class="d-flex align-items-center justify-content-center pb-4">
                                                    <p class="mb-0 me-2">Already have an account? &nbsp;</p>
                                                    <a href={{ url('login') }} class="btn btn-outline-danger">Login</a>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">We are more than just a company</h4>
                                            <p class="small mb-0">Shop-now Marketplace is India’s leading platform for
                                                selling online. Be it a manufacturer, vendor or supplier, simply sell your
                                                products online on Flipkart and become a top e-commerce player with minimum
                                                investment. Selling on shopNow.com is easy and absolutely free. All you need
                                                is to register, list your catalog and start selling your products.</p>
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
    {{-- <script>
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
    </script> --}}
@endsection
@section('page_style')
    <style>
    </style>
@endsection
