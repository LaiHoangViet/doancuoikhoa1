<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('hop_dong.hop_dong_process_insert') }}" method="post">
		{{csrf_field()}}


		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Ngày</label>
		    </div>
		    <div class="col-75">
		      <input type="date" id="fname" name="Ngay">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Khách Hàng</label>
		    </div>
		    <div class="col-75">
				<select class="form-control" name="Ma_khach_hang">
					@foreach ($array_khach_hang as $khach_hang)
						<option value="{{$khach_hang->Ma_khach_hang}}">
							{{$khach_hang->Ho_ten}}
						</option>
					@endforeach
				</select>
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Xe</label>
		    </div>
		    <div class="col-75">
				<select class="form-control" name="Ma_xe">
					@foreach ($array_xe as $xe)
						<option value="{{$xe->Ma_xe}}">
							{{$xe->Ten_xe}}
						</option>
					@endforeach
				</select>
		    </div>
		  </div>



		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Hình Thức Thanh Toán</label>
		    </div>
		    <div class="col-75">
		      <select name="Hinh_thuc_thanh_toan" id="" class="fo-input">
		      	<option>-- Chọn phương thức thanh toán --</option>
		      	<option>Chuyển khoản</option>
		      	<option>Tiền mặt</option>
		      </select>
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Ngày Nhận Xe</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="date" id="lname" name="Ngay_nhan">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Ngày Trả Xe</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="date" id="lname" name="Ngay_tra">
		    </div>
		  </div>


		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tổng Tiền</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Tong_tien_thanh_toan" placeholder="2.000.000VND..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tiền Cọc</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Tien_coc" placeholder="2.000.000VND..">
		    </div>
		  </div>

		<center><div class="row">
		<button>Thêm Hợp Đồng</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
		</div></center>
	</form>
</body>
</html>