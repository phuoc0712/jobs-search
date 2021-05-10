@extends('layouts.master')
<!-- -----------------------------------content------------------------------- -->
@section('content')
	{{-- slideshow --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/banner/bn.jpg" height="610" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./img/banner/bn1.jpg" height="610" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./img/banner/bn2.jpg" height="610" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./img/banner/bn3.png" height="610" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <!-- SEARCH FROM -->
	<div id="quick_search_home">
		<div class="formSearch">
			<form method="post" action="" class="multiselect">
				@csrf
			    <div class="d-flex justify-content-center">
                    <div class="a">
						<input  size="27" type="text" name="keywords" class="form-control b" placeholder="Nhập chức danh hoặc công ty...">
					</div>
					<div style="font-size: 32px">|</div>
					<div class="a">
						<select class="custom-select custom-select mb-3" title="Khu Vực...">
							<option value="0">Tất cả Khu Vực</option>
							<option value="1">Hà Nội</option>
							<option value="2">Hồ Chí Minh</option>
							<option value="3">An Giang</option>
							<option value="4">Bắc Giang</option>
							<option value="5">Bạc Liêu</option>
							<option value="6">Bắc Ninh</option>
							<option value="7">Bình Định</option>
							<option value="8">Bình Dương</option>
							<option value="9">Bình Phước</option>
							<option value="10">Cà Mau</option>
							<option value="11">Cần Thơ</option>
							<option value="12">Đà Nẵng</option>
							<option value="13">Điện Biên</option>
							<option value="14">Đồng Nai</option>
							<option value="15">Gia Lai</option>
							<option value="16">Hà Giang</option>
							<option value="17">Hà Tĩnh</option>
							<option value="18">Hải Dương</option>
							<option value="19">Hải Phòng</option>
							<option value="20">Hòa Bình</option>
							<option value="21">Hưng Yên</option>
							<option value="22">Khánh Hòa</option>
							<option value="23">Lai Châu</option>
							<option value="24">Lạng Sơn</option>
							<option value="25">Lào Cai</option>
							<option value="26">Long An</option>
							<option value="27">Nam Định</option>
							<option value="28">Nghệ An</option>
							<option value="29">Quảng Bình</option>
							<option value="30">Quảng Nam</option>
							<option value="31">Quảng Ninh</option>
							<option value="32">Quảng Tri</option>
							<option value="33">Sơn La</option>
							<option value="34">T.Thiên Huế</option>
							<option value="35">Thái Bình</option>
							<option value="36">Thái Nguyên</option>
							<option value="37">Thanh Hóa</option>
							<option value="38">Tuyên Quang</option>
						</select>
					</div>
					<a href="#" title="Search Now"><button class="btn btn-link a" type="submit"><i class="fas fa-search fa-2x"></i></button></a>
				</div>
			</form>
		</div>
	</div>
{{-- </div> --}}
    <!-- END SEARCH FROM -->
    <hr>
    {{-- NEWS --}}
    <div class="container">
        <div class="row">
		    <div class="col-md-3">
			    {{-- <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2> --}}
				<div class="">
					<div class="image"><a href="" title="DESIGNERS"><img src="https://www.findjobs.vn/htdocs/thumbs/hotimages/294x166x0-graphic.png" alt="DESIGNERS" width="250" height="130"></a></div>
					<div class="text">
						<a href="" target="_blank"><h3>DESIGNERS</h3></a>
						<a href=""><h4>CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ LSM</h4></a>
						<p>Công việc cụ thể là:
				- Vẽ minh họa theo các concept và ý tưởng được giao
				- Tìm hiểu, nghiên cứu, cập nhật các xu hướng thiết kế trên thế giới
				- Bảo...</p>
						<div class="nav">
							<div class="left"><i class="view"></i> 123 viewed</div>
							<a class="more" href="">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>

		    <div class="col-md-3">
			    {{-- <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2> --}}
				<div class="">
					<div class="image"><a href="" title="PHÓ PHÒNG KẾ TOÁN"><img src="https://www.findjobs.vn/htdocs/thumbs/hotimages/294x166x0-13.png" alt="PHÓ PHÒNG KẾ TOÁN" width="250" height="130"></a></div>
					<div class="text">
						<a href="" target="_blank"><h3>PHÓ PHÒNG KẾ TOÁN</h3></a>
						<a href=""><h4>Công ty Cổ phần DKRA Việt Nam</h4></a>
						<p>• Quản lý, chịu trách nhiệm tất cả công việc của phòng kế toán trong thời gian KTT vắng mặt;
				           • Đề xuất xây dựng chính sách kế toán và hệ thống sổ...</p>
						<div class="nav">
							<div class="left"><i class="view"></i> 103 viewed</div>
							<a class="more" href="">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>

		    <div class="col-md-3">
			    {{-- <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2> --}}
				<div class="">
					<div class="image"><a href="" title="NHÂN VIÊN KINH DOANH (QUẢNG NINH)"><img src="https://www.findjobs.vn/htdocs/thumbs/hotimages/296x166x0-5jobs_13.png" alt="NHÂN VIÊN KINH DOANH (QUẢNG NINH)" width="250" height="130"></a></div>
					<div class="text">
						<a href="" target="_blank"><h3>NHÂN VIÊN KINH DOANH (QUẢNG NINH)</h3></a>
						<a href=""><h4>Công ty Ajinomoto Việt Nam</h4></a>
						<p> Tìm hiểu nhu cầu và tư vấn về sản phẩm cho khách hàng;
				- Chăm sóc và duy trì mối quan hệ với các khách hàng hiện tại, tìm kiếm khách hàng mới;
				-...</p>
						<div class="nav">
							<div class="left"><i class="view"></i> 9 viewed</div>
							<a class="more" href="">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>

		    <div class="col-md-3">
			    {{-- <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2>
                <h2>News goes here</h2> --}}
				<div class="">
					<div class="image"><a href="" title="TRỢ LÝ KINH DOANH (SALE ADMIN)"><img src="https://www.findjobs.vn/htdocs/thumbs/hotimages/294x166x0-3.png" alt="TRỢ LÝ KINH DOANH (SALE ADMIN)" width="250" height="130"></a></div>
					<div class="text">
						<a href="" target="_blank"><h3>TRỢ LÝ KINH DOANH (SALE ADMIN)</h3></a>
						<a href=""><h4>Công ty Cổ phần DKRA Việt Nam</h4></a>
						<p>Quản lý và cập nhật giỏ hàng dự án (tất cả sản phẩm thuộc dự án trong phạm vi phụ trách do công ty phân phối )
				Chuẩn bị và quản lý hồ sơ dự án: hồ...</p>
						<div class="nav">
							<div class="left"><i class="view"></i> 180 viewed</div>
							<a class="more" href="">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<p align="center">
		<a href="#" class="btn_all" onclick=" ">Xem thêm</a>
	</p>
	{{-- END--NEWS --}}
	
	{{-- logo companies --}}
	<hr class="think">
	<div class="container">
	    <h1 class="title title_h2">Công ty Hàng đầu</h1>
	<div class="d-flex justify-content-center">
        <div class="logo2">
			<a href="/banners/click/782" title="CircleK_LogoHP" target="_blank">
				<img src="./img/logo-companies/circle-K.png" alt="CircleK_LogoHP" width="222" height="157">
				<hr/>
				<div class="info">5 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/174" title="CJ Group" target="_blank">
				<img src="./img/logo-companies/cjgroup.png" alt="CJ Group" width="222" height="157">
				<hr/>
				<div class="info">7 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/775" title="Ajinomoto_Logo Homepage" target="_blank">
				<img src="./img/logo-companies/ajinomoto.png" alt="Ajinomoto_Logo Homepage" width="222" height="157">
				<hr/>
				<div class="info">13 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/774" title="Rita Võ_LOGO HP" target="_blank">
				<img src="./img/logo-companies/ritavo.png" alt="Rita Võ_LOGO HP" width="222" height="157">
				<hr/>
				<div class="info">17 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/773" title="Di Động Việt Logo HP" target="_blank">
				<img src="./img/logo-companies/didongviet.png" alt="Di Động Việt Logo HP" width="222" height="157">
				<hr/>
				<div class="info">7 việc làm</div>
			</a>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<div class="logo2">
			<a href="/banners/click/693" title="Công ty Tài chính Đất Xanh - Một thành viên trong hệ sinh thái của Tập đoàn Đất Xanh" target="_blank">
				<img src="./img/logo-companies/fina.png" alt="Công ty Tài chính Đất Xanh - Một thành viên trong hệ sinh thái của Tập đoàn Đất Xanh" width="222" height="157">
				<hr/>
				<div class="info">9 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/532" title="DHL" target="_parent">
				<img src="./img/logo-companies/dhl.jpg" alt="DHL" width="222" height="157">
				<hr/>
				<div class="info">2 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/705" title="CÔNG TY TNHH NESTLÉ VIỆT NAM" target="_blank">
				<img src="./img/logo-companies/nestle.png" alt="CÔNG TY TNHH NESTLÉ VIỆT NAM" width="222" height="157">
				<hr/>
				<div class="info">9 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/744" title="TuLap_LogoHP" target="_blank">
				<img src="./img/logo-companies/tulap.png" alt="TuLap_LogoHP" width="222" height="157">
				<hr/>
				<div class="info">10 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/746" title="ABBANK_LogoHP" target="_blank">
				<img src="./img/logo-companies/abbbank.png" alt="ABBANK_LogoHP" width="222" height="157">
				<hr/>
				<div class="info">22 việc làm</div>
			</a>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<div class="logo2">
			<a href="/banners/click/729" title="JACCS_Logo" target="_blank">
				<img src="./img/logo-companies/jaccs.png" alt="JACCS_Logo" width="222" height="157"><hr/>
				<div class="info">11 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/720" title="CGV Logo Homepage" target="_blank">
				<img src="./img/logo-companies/cgv.png" alt="CGV Logo Homepage" width="222" height="157"><hr/>
				<div class="info">4 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/719" title="Digiworld Logo HomePage" target="_blank">
				<img src="./img/logo-companies/digiworld.jpg" alt="Digiworld Logo HomePage" width="222" height="157"><hr/>
				<div class="info">23 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/718" title="Greenfeed Logo Homepage" target="_blank">
				<img src="./img/logo-companies/greenfeed.png" alt="Greenfeed Logo Homepage" width="222" height="157"><hr/>
				<div class="info">17 việc làm</div>
			</a>
		</div>
		<div class="logo2">
			<a href="/banners/click/717" title="Amore Pacific Logo HomePage" target="_blank">
				<img src="./img/logo-companies/amore.png" alt="Amore Pacific Logo HomePage" width="222" height="157"><hr/>
				<div class="info">6 việc làm</div>
			</a>
		</div>
	</div>
	</div>
    {{-- advices content --}}
	<hr class="think">
	<h2 class="title">Tư vấn nghề nghiệp</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="advice_list stylelist1">
					<div class="item">
						<div class="image"><a href="{{url('/advices/article-number-1')}}" title="Làm Thế Nào Để Tạo Ấn Tượng Lúc Phỏng Vấn"><img src="https://www.findjobs.vn/htdocs/thumbs/news/202105/296x167x1-60937912dd633_content01_5_6.jpg" alt="Làm Thế Nào Để Tạo Ấn Tượng Lúc Phỏng Vấn" width="296" height="167" class="img-responsive"></a></div>
						<div class="text">
							<a href="{{url('/advices/article-number-1')}}" target="_blank"><h3>Làm Thế Nào Để Tạo Ấn Tượng Lúc Phỏng Vấn</h3></a>
							<p>Một vài trong các bạn có lẽ đã được tốt nghiệp sớm và bận rộn trong việc tìm cho mình một công việc đầu tiên. Làm thế nào để một ai đó có...</p>
							<div class="nav">
								<div class="left"><i class="view"></i> 13 viewed</div>
								<a class="more" href="{{url('/advices/article-number-1')}}">Xem thêm</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="col-md-3">
                <div class="advice_list stylelist1">
					<div class="item">
						<div class="image"><a href="{{url('/advices/article-number-2')}}" title="Bạn Đang Tìm Kiếm Một Công Việc Mới? Những Thói Quen Xấu Này Có Thể Kìm Hãm Bạn"><img src="https://www.findjobs.vn/htdocs/thumbs/news/202105/296x167x1-habit_jobsearch_01.jpg" alt="Bạn Đang Tìm Kiếm Một Công Việc Mới? Những Thói Quen Xấu Này Có Thể Kìm Hãm Bạn" width="296" height="167" class="img-responsive"></a></div>
						<div class="text">
							<a href="{{url('/advices/article-number-2')}}" target="_blank"><h3>Bạn Đang Tìm Kiếm Một Công Việc Mới? Những Thói Quen Xấu Này Có Thể Kìm Hãm Bạn</h3></a>
							<p>“Tôi cảm thấy mình đang làm đúng mọi thứ, nhưng dường như không đem lại hiệu quả.” Đó là một điều mà rất nhiều người tìm việc đang mắc...</p>
							<div class="nav">
								<div class="left"><i class="view"></i> 18 viewed</div>
								<a class="more" href="{{url('/advices/article-number-2')}}">Xem thêm</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
                <div class="advice_list stylelist1">
                    <div class="item">
						<div class="image"><a href="{{url('/advices/article-number-3')}}" title="Những Dấu Hiệu Cho Thấy Bạn Nên Nghỉ Việc Ngay Ngày Đầu Tiên Đi Làm"><img src="https://www.findjobs.vn/htdocs/thumbs/news/202104/296x167x1-first_week_job_mesa_de_trabajo_1.jpg" alt="Những Dấu Hiệu Cho Thấy Bạn Nên Nghỉ Việc Ngay Ngày Đầu Tiên Đi Làm" width="296" height="167" class="img-responsive"></a></div>
						<div class="text">
							<a href="{{url('/advices/article-number-3')}}" target="_blank"><h3>Những Dấu Hiệu Cho Thấy Bạn Nên Nghỉ Việc Ngay Ngày Đầu Tiên Đi Làm</h3></a>
							<p>Đối với những nhân viên mới, ngày đầu tiên đi làm luôn đầy sự bất ngờ. Bạn sẽ không thể biết được những gì mong đợi từ một vai trò và nhà...</p>
							<div class="nav">
								<div class="left"><i class="view"></i> 11 viewed</div>
								<a class="more" href="{{url('/advices/article-number-3')}}">Xem thêm</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
                <div class="advice_list stylelist1">
					<div class="item">
						<div class="image"><a href="{{url('/advices/article-number-4')}}" title="Mẹo Cần Biết Cho 3 Mẫu Sơ Yếu Lý Lịch Cho 3 Trình Độ Khác Nhau"><img src="https://www.findjobs.vn/htdocs/thumbs/news/202104/296x167x1-resume_template_01.jpg" alt="Mẹo Cần Biết Cho 3 Mẫu Sơ Yếu Lý Lịch Cho 3 Trình Độ Khác Nhau" width="296" height="167" class="img-responsive"></a></div>
						<div class="text">
							<a href="{{url('/advices/article-number-4')}}" target="_blank"><h3>Mẹo Cần Biết Cho 3 Mẫu Sơ Yếu Lý Lịch Cho 3 Trình Độ Khác Nhau</h3></a>
							<p>Không có một mẫu sơ yếu lý lịch nào phù hợp với tất cả mọi người. Và cũng không có một mẫu nào đảm bảo bạn sẽ vượt qua vòng sơ tuyển....</p>
							<div class="nav">
								<div class="left"><i class="view"></i> 15 viewed</div>
								<a class="more" href="{{url('/advices/article-number-4')}}">Xem thêm</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p style="text-align: center;"><a href="#" class="btn_all">Xem thêm</a></p>
	<div class="lets_start"></div>
	<p align="center"><a href="#" class="btn_join">Tham gia ngay</a></p> 
</div>
@endsection

