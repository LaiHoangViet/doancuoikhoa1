<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('khach_hang.khach_hang_process_insert') }}" method="post">
		{{csrf_field()}}

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Đăng Nhập</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ten_dang_nhap" placeholder="Tên Đăng Nhập..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Mật Khẩu</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Mat_khau" placeholder="Mật Khẩu..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Khách Hàng</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ho_ten" placeholder="Tên Khách Hàng..">
		    </div>
		  </div>

		<div>
		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Giới Tính</label>
		    </div>
		    <div class="col-75">
		    	<label><input type="radio" id="lname" name="Gioi_tinh" value="1" checked>Nam</label>
				<label><input type="radio" id="lname" name="Gioi_tinh" value="0">Nữ</label>
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Năm Sinh</label>
		    </div>
		    <div class="col-75">
		      <input type="date" id="fname" name="Nam_sinh" placeholder="Năm Sinh..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Số Điện Thoại</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Sdt" placeholder="Số Điện Thoại..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Địa Chỉ</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Dia_chi" placeholder="Địa Chỉ..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Email</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Email" placeholder="Email..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Cơ Quan</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ten_co_quan" placeholder="Tên Cơ Quan..">
		    </div>
		  </div>

		<center><div class="row">
			<button>Thêm Khách Hàng</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
	  	</div></center>
	</form>
</body>
</html>