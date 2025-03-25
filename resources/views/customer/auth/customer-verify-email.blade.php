@extends('layouts.login-web')

@section('section')


<div class="account-user-sec">
    <div class="account-sec">
        <div class="account-top-bar">
            <div class="container">
                 <div class="logo">
                    <a href="index.html" title=""><i class="fa fa-deviantart"></i> Electric</a>
                </div>
                <ul class="account-header-link">
                    <li><a title="" href="{{route('customer.register')}}">Register</a></li>
                    <li><a title="" href="{{route('customer.login')}}">Login</a></li>
                    
                </ul>
            </div>
        </div>

        <div class="acount-sec">
            <div class="container">
                <div class="row">

                        <h1>Verify Your Email</h1>
                        <p>A verification link has been sent to your email address.</p>
                        <p>If you did not receive the email, <a href="{{ route('customer.verification.resend') }}">click here to request another</a>.</p>

                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <p>© Censoware Technologies LLP.  Made with <i class="fa fa-heart"></i></p>
            </div>
        </footer>
    </div>
</div>
@endsection