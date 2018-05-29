@extends('layout.front_layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('#confirm_password').on('keyup', function () 
        {
            if($('#password').val() == $('#confirm_password').val()) 
            {
                $('#message').html('');
                $('#confirm_password').css('color', 'green');
                $('#submit_button').removeAttr('disabled');
            } 
            else 
            {
                $('#message').html('Password Not Match').css('color', 'red');
                $('#confirm_password').css('color', 'red');
                $('#submit_button').attr('disabled',true);
            }
        });
    });
   
</script>
<div class="account-page login text-center">
    <div class="container">
        <div class="account-title">
            <h4 class="heading-light">CREATE ACCOUNT</h4>
        </div>
        <div class="account-content">
            <form action="/register/submit" method="POST">
                {{csrf_field()}}
                
                <div class="input-box email">
                    <input type="text" name="user_first_name" placeholder="First Name" required>
                </div>
                <div class="input-box password">
                    <input type="text" name="user_middle_name" placeholder="Middle Name" required>
                </div>
                <div class="input-box email">
                    <input type="text" name="user_last_name" placeholder="Last Name" required>
                </div>
                <div class="input-box">
                    <select name="user_gender" id="" class="input-boxs" required>
                        <option value="">Gender</option>      
                        <option >MALE</option>      
                        <option >FEMALE</option>      
                    </select>
                </div>
                <div class="input-box email">
                    <input type="email" name="user_email" placeholder="Email Address" required>
                </div>
                <div class="input-box password">
                    <input type="text" name="user_password" id="password" placeholder="Password" required>
                </div>

                <div class="input-box password">
                    <input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                </div>
                <span id='message'></span>
                <div class="input-box">
                    <select name="user_year_graduate" id="" class="input-boxs" required>
                        <option value="">Year Graduate</option>      
                        <option >2018</option>      
                    </select>
                </div>
                <div class="buttons-set">
                    <button  type="submit" id="submit_button" title="Sign Up" class="bnt bnt-theme text-regular text-uppercase">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection