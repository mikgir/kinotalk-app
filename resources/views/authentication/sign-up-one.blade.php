@extends('layouts.authentication.master')
@section('title', 'Sign-up-one')


@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/3.jpg')}}"
                                       alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo" href="#">
                                <img class="img-fluid for-light" src="{{asset('assets/images/logo/login.png')}}"
                                     alt="looginpage">
                                <img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}"
                                     alt="looginpage">
                            </a>
                        </div>
                        <div class="login-main">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h4>Create your account</h4>
                                <p>Enter your personal details to create account</p>
                                <!-- Name -->
                                <div class="form-group">
                                    <x-input-label for="name" :value="__('Name')"/>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <x-text-input id="name" class="form-control" type="text" name="name"
                                                          :value="old('name')" required autofocus autocomplete="name"/>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                <!-- Email Address -->
                                <div class="form-group">
                                    <x-input-label for="email" class="col-form-label pt-0" :value="__('Email')"/>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <x-text-input id="email" class="form-control" type="email" name="email"
                                                          :value="old('email')" required autocomplete="username"/>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Password -->
                                <div class="form-group">
                                   <x-input-label for="password" class="col-form-label pt-0"
                                                   :value="__('Password')"/>
                                     <div class="row g-2">
                                        <div class="col-6">
                                            <x-text-input id="password" class="form-control"
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="new-password"/>

                                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>

                                    <!-- Confirm Password -->
                                <div class="form-group">
                                    <x-input-label for="password_confirmation" class="col-form-label pt-0"
                                                   :value="__('Confirm Password')"/>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <x-text-input id="password_confirmation" class="form-control"
                                                          type="password"
                                                          name="password_confirmation" required
                                                          autocomplete="new-password"/>

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted mt-4 or">Or signup with</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <a class="link-dark"
                                           href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                    </a>

                                    <x-primary-button class="btn btn-primary btn-block">
                                            {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </form>
                            {{--                  <form class="theme-form">--}}
                            {{--                      @csrf--}}

                            {{--                              <input class="form-control" type="text" required="" placeholder="First name">--}}
                            {{--                           </div>--}}
                            {{--                           <div class="col-6">--}}
                            {{--                              <input class="form-control" type="text" required="" placeholder="Last name">--}}
                            {{--                           </div>--}}
                            {{--                        </div>--}}
                            {{--                     </div>--}}
                            {{--                     <div class="form-group">--}}
                            {{--                        <label class="col-form-label">Email Address</label>--}}
                            {{--                        <input class="form-control" type="email" required="" placeholder="Test@gmail.com">--}}
                            {{--                     </div>--}}
                            {{--                     <div class="form-group">--}}
                            {{--                        <label class="col-form-label">Password</label>--}}
                            {{--                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">--}}
                            {{--                        <div class="show-hide"><span class="show"></span></div>--}}
                            {{--                     </div>--}}
                            {{--                     <div class="form-group mb-0">--}}
                            {{--                        <div class="checkbox p-0">--}}
                            {{--                           <input id="checkbox1" type="checkbox">--}}
                            {{--                           <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>--}}
                            {{--                        </div>--}}
                            {{--                        <button class="btn btn-primary btn-block" type="submit">Create Account</button>--}}
                            {{--                     </div>--}}

                            {{--                     <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="{{ route('login') }}">Sign in</a></p>--}}
                            {{--                  </form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
