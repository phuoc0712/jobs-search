<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>◄Jobs 247►</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
	@stack('css')
</head>

<body>
{{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="main_menu">
    <div class="container-fluid">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tạo hồ sơ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Việc làm mới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/advices')}}">Tư vấn Nghề nghiệp</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a id="logojob" class="navbar-brand mx-auto" href="{{url('/')}}"><span>J</span>obs247</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 d-flex flex-row-reverse">
		        <div id="nav_top">
		        	<div id="emp_navbar">
		        		<div><div></div></div>
		        		<div class="right"><div></div></div>			
		        		<a href="#"><b>Nhà tuyển dụng:</b> Đăng tuyển hoặc tìm hồ sơ</a>			
		        	</div>
		        </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav-2" href="{{url('/sign-up')}}">Đăng kí</a>
                </li>
                <li class="nav-item">
				    <a class="nav-link nav-2" href="{{url('/sign-in')}}">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- navbar--}}
<!-- -----------------------------------content------------------------------- -->
	<div>
        @yield('content')
	</div>
<!-- -----------------------------------content------------------------------- -->
{{-- footer --}}
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3>Jobs247</h3>
				<ul>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#" rel="nofollow">Sitemap</a></li>
					<li><a href="#">Quy Định</a></li>
					<li><a href="#">Điều kiện sử dụng</a></li>
					<li><a href="#" rel="nofollow">Liện hệ</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Ứng viên</h3>
				<ul>
					<li><a href="#" rel="nofollow">Việc làm của tôi</a></li>
					<li><a href="#" rel="nofollow">Thông báo làm việc</a></li>
					<li><a href="#" rel="nofollow">Hồ sơ của tôi</a></li>
					<li><a href="#" rel="nofollow">Việc đã ứng tuyển</a></li>
					
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Nhà tuyển dụng</h3>
				<ul>
					<li><a href="#">Jobs247.Vn ☺</a></li>
					<li><a href="#">Đăng tuyển dụng</a></li>
					<li><a href="#">Tìm hồ sơ</a></li>
					<li><a href="#">Sự kiện nghề nghiệp</a></li>
					
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Mạng xã hội</h3>
				<ul>
					<li><a href="#" target="_blank" rel="nofollow">Facebook</a></li>
					<li><a href="#" target="_blank" rel="nofollow">Google+</a></li>
					<li><a href="#" target="_blank" rel="nofollow">Linkedin</a></li>
					<li><a href="#" target="_blank" rel="nofollow">Youtube</a></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			©2021 Jobs247 by Hiếu, Nam, Phước, Trung. 
		</div>
	</div>
</footer>
{{-- footer --}}
    <script src="{{ asset('vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
{{-- <script type="text/javascript" src="https://www.findjobs.vn/htdocs/js/jquery-1.10.2.min.js"></script> --}}
{{-- <script type="text/javascript" src="https://www.findjobs.vn/htdocs/js/bootstrap-lib.js"></script> --}}
{{-- <script type="text/javascript" src="https://www.findjobs.vn/htdocs/themes/jobseekers/js/common.js?t=1"></script> --}}
@stack('js')

</body>

</html>