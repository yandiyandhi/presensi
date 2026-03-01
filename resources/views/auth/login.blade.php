@extends('layouts.appLogin')
@section('title', 'Login')
@section('content')
    <div id="preloader">
        <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Back Button -->
    <div class="login-back-button"><a href="element-hero-blocks.html">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                </path>
            </svg></a></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center px-4"><img class="login-intro-img" src="img/bg-img/36.png" alt=""></div>
            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center">Log in to continue.</h6>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group position-relative">
                        <input class="form-control" id="psw-input" type="password" name="password"
                            placeholder="Enter Password">
                        <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i
                                class="bi bi-eye-slash"></i></div>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
@endsection
