@extends('layouts.authentication.master')
@section('title', 'Sign-up-one')


@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/login-bg-2.jpg')}}"
                                       alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo" href="{{route('main')}}">
                                <img class="img-fluid for-light w-50" src="{{asset('assets/front/img/logo/b_kinotalk.png')}}"
                                     alt="looginpage">
                                <img class="img-fluid for-dark w-50" src="{{asset('assets/front/img/logo/w_kinotalk.png')}}"
                                     alt="looginpage">
                            </a>
                        </div>
                        <div class="login-main">
                            <form method="POST" action="{{ route('register') }}" class="theme-form">
                                @csrf
                                <h4>Создать аккаунт</h4>
                                <p>Введите свои личные данные, чтобы создать учетную запись</p>
                                <!-- Name -->
                                <div class="form-group">
                                    <x-input-label for="name" :value="__('Имя')"/>
                                    <div class="row g-2">
                                            <x-text-input id="name" class="form-control" type="text" name="name"
                                                          :value="old('name')" required autofocus autocomplete="name"/>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                    </div>
                                </div>
                                <!-- Email Address -->
                                <div class="form-group">
                                    <x-input-label for="email"  :value="__('Email')"/>
                                    <div class="row g-2">
                                            <x-text-input id="email" class="form-control" type="email" name="email"
                                                          :value="old('email')" required autocomplete="username"/>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                    </div>
                                </div>
                                    <!-- Password -->
                                <div class="form-group">
                                   <x-input-label for="password" :value="__('Пароль')"/>
                                     <div class="row g-2">
                                            <x-text-input id="password" class="form-control"
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="new-password"/>

                                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                    </div>
                                </div>

                                    <!-- Confirm Password -->
                                <div class="form-group">
                                    <x-input-label for="password_confirmation"
                                                   :value="__('Подтвердите пароль')"/>
                                    <div class="row g-2">
                                            <x-text-input id="password_confirmation" class="form-control"
                                                          type="password"
                                                          name="password_confirmation" required
                                                          autocomplete="new-password"/>

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-4">
                                    <button class="btn btn-primary btn-block" type="submit">Зарегистрировать</button>
                                </div>
                                <h6 class="text-muted mt-4 or">Или через</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase">
                                        <a class="btn btn-light" href="#" target="_blank">
                                            <i class="fa fa-google" data-feather="google"></i>
                                        </a>
                                        <a class="btn btn-light" href="#" target="_blank">
                                            <i class="fa fa-vk" data-feather="vk"></i>
                                        </a>
                                        <a class="btn btn-light" href="#" target="_blank">
                                            <i class="fa fa-telegram" data-feather="telegram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <p class="mt-4 mb-0">Уже есть аккаунт?<a class="ms-2" href="{{ route('login') }}">Войти</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
