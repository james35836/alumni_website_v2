@extends('layout.front_layout')
@section('content')
<div class="account-page login text-center">
    <div class="container">
        <div class="account-title">
            <h4 class="heading-light">LOG IN INTO ALUMNI DASHBOARD</h4>
        </div>
        <div class="account-content">
            <form action="/login/submit" method="POST">
                {{csrf_field()}}
                <div class="input-box email">
                    <input type="text" name="user_email" placeholder="Email Address">
                </div>
                <div class="input-box password">
                    <input type="text" name="user_password" placeholder="Password">
                </div>
                <div class="buttons-set">
                    <button type="submit" class="bnt bnt-theme text-regular text-uppercase">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection