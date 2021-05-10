@extends('layouts.master')
@section('content')
<div id="login">
    <h3 class="text-center text-white pt-5 text-warning">Đăng kí tài khoản</h3>
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
                        <div class="form-group">
                            <label for="address" class="text-info">Địa chỉ:</label><br>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <!--password-->
                        <div class="form-group">
                            <label for="password" class="text-info">Mật khẩu:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="text-info">Nhập lại mật khẩu:</label><br>
                            <input type="text" name="password2" id="password2" class="form-control">
                        </div>
                        <!--Gender-->
                        <div class="form-group">
                                <label for="username" class="text-info">Giới tính:</label><br>
                            <div class="form-check form-check-inline">
                                Nam<input class="form-check-input" type="radio" name="GT" id="gt1" value="Male">
                                
                            </div>
                            <div class="form-check form-check-inline">
                                Nữ<input class="form-check-input" type="radio" name="GT" id="gt2" value="Female">
                                
                            </div>
                        </div>
                        <!--Submit-->
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Đăng kí">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection