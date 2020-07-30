<!DOCTYPE html>
<html>
<head>
	<title>Hướng dẫn mua xe</title>
	<meta charset="utf-8">
	<!-- Custom fonts for this template -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


	<!-- Css của các trang  -->
	<link href="{{asset('css/menu1.css')}}" rel="stylesheet">
	<link href="{{asset('css/huong-dan-mua-xe.css')}}" rel="stylesheet">
	<link href="{{asset('css/content.css')}}" rel="stylesheet">
	<link href="{{asset('css/footer.css')}}" rel="stylesheet">

</head>
<body>
	@include('layer.menu')

	<div class="container">
		<div class="tieu-de">
			<h1>Hướng dẫn</h1>
		</div>
		<div class="muc-huong-dan">
			<div id="timeline">
				<div class="timeline-item">
					<div class="timeline-icon">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
						<span>1</span>
					</svg>
				</div>
				<div class="timeline-content">
					<h2>Đăng nhập</h2>
					<p>
						Đăng nhập vào Hand In Hand qua tài khoản mà bạn đã đăng ký. Chúng tôi cần bạn xác thực số điện thoại trước khi đặt xe.
					</p>
				</div>
			</div>

			<div class="timeline-item">
				<div class="timeline-icon">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
					<span>2</span>
				</svg>
			</div>
			<div class="timeline-content right">
				<h2>Tìm Xe</h2>
				<p>
					Bạn có thể tìm xe ưng ý nhanh chóng thời gian, loại xe, đặt xe nhanh.
				</p>
			</div>
		</div>


		<div class="timeline-item">
			<div class="timeline-icon">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
				<span>3</span>
			</svg>
		</div>
		<div class="timeline-content ">
			<h2>Đặt Xe</h2>
			<p>							
				Lựa chọn chiếc xe mà bạn ưng ý và đặt xe. Sau đó chúng tôi sẽ nhanh chóng phản hồi đến bạn trong thời gian nhanh nhất.
			</p>
		</div>
	</div>

	<div class="timeline-item">
		<div class="timeline-icon">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
			<span>4</span>
		</svg>

	</div>
	<div class="timeline-content right">
		<h2>Nhận xe</h2>
		<p>
			Bạn đến địa điểm nhận xe hoặc yêu cầu chúng tôi giao xe đến tận nơi .Kiểm tra tình trạng và giấy tờ xe, xuất trình bản gốc các giấy tờ, kí xác nhận biên bản giao xe, nhận chìa khóa và bắt đầu hành trình của bạn.
		</p>
	</div>
</div>

<div class="timeline-item">
	<div class="timeline-icon">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
		<span>5</span>
	</svg>
</div>
<div class="timeline-content">
	<h2>Trả xe</h2>
	<p>							
		Sau khi hết thời gian thuê, bạn hoàn trả xe giống như tình trạng và thỏa thuận ban đầu. Kí xác nhận biên bản bàn giao, nhận lại giấy tờ để hoàn thành chuyến đi tuyệt vời của bạn
	</p>
</div>
</div>
</div>
</div>
</div>

<!-- Footer -->
<div class="footer">
	<div class="footer-1">
		<div class="footer-2 logo-cong-ty">
			<img src="{{asset('Img/logo.jpg')}}">    
			<span class="name-cong-ty">HAND IN HAND</span>
			<span class="dia-chi-footer">Tầng 11, Vincom Hai Bà Trưng - Hà Nội</span>
			<span class="so-dien-thoai">(024) 3562 5939 - (024) 3562 5940</span>
			<span class="lien-ket">       
				<i class="fab fa-youtube"></i>
				<i class="fab fa-facebook-square"></i>
			</span>
		</div>
		<div class="footer-2 huong-dan-1">
			<span class="tieu-de-footer">Hướng dẫn</span>
			<span class="huong-dan"><a href="#"> Về chúng tôi</a></span>
			<span class="huong-dan"><a href="#">Câu hỏi thường gặp</a></span>
			<span class="huong-dan"><a href="#">Sitemap</a></span>
		</div>
		<div class="footer-2 lien-he-footer">
			<span class="lien-he footer-3">Liên lạc với chúng tôi</span>
			<input type="text" class="input-footer footer-3">
			<textarea class="noi-dung-footer footer-3"></textarea>
			<button type="button" class="btn btn-success send-footer footer-3">Success</button>
		</div>
	</div>
</div>            




<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="{{asset('js/cuon-trang.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>