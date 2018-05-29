@extends('layout.front_layout')
@section('content')
<style>
    .success-icon
    {
        font-size: 170px;
        color: #1461EC;
    }
</style>
<div class="content-wrapper">
    @if($ref=='success')
    <div class="container">
            <div class="access-denied text-center">
                <i class="fa fa-check-circle-o success-icon"></i>
                <h2 class="heading-light">SUCCESS</h2>
                <div class="box-text">
                    <h4 class="heading-light">Thank you for signing up.</h4>
                    <p class="text-light">Please confirm your email by clicking the link we sent.</p>
                    <p class="text-light">Thank You</p>
                </div>
            </div>
        </div>
    </div>
    @elseif($ref=='password_incorrect')
    <div class="container">
            <div class="access-denied text-center">
                <img src="/assets/images/clock-access.png" alt="">
                <h2 class="heading-light">Access Denied</h2>
                <div class="box-text">
                    <h4 class="heading-light">Password you enter is incorrect!</h4>
                    <p class="text-light">Please Log In by clicking  “<a href="/login" class="color-theme">Log In</a>” link.</p>
                    <p class="text-light">Thank You!</p>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container">
            <div class="access-denied text-center">
                <img src="/assets/images/clock-access.png" alt="">
                <h2 class="heading-light">Access Denied</h2>
                <div class="box-text">
                    <h4 class="heading-light">You are not authorized to access this page</h4>
                    <p class="text-light">Please Log In by clicking on the “<a href="login-page.html" class="color-theme">Log In</a>” link to the right.</p>
                    <p class="text-light">Thank You</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    
    
@endsection