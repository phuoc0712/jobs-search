@extends('layouts.master')
@section('content')
<div id="login">
    <h3 class="text-center text-white pt-5 text-warning">Đăng nhập</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <!--Email-->
                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <!--password-->
                        <div class="form-group">
                            <label for="password" class="text-info">Mật khẩu:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Ghi nhớ đăng nhập</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng nhập">
                        </div>
                        <div id="register-link" class="text-right">
                            <p>Chưa có tài khoản, đăng kí tại đây ↓</p>
                            <a href="{{url('/sign-up')}}" class="text-info">Đăng kí</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection