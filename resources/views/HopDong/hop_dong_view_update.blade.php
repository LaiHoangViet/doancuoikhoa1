<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('hop_dong.hop_dong_process_update', ['id' => $hop_dong->Ma_hop_dong]) }}" method="post">
		{{csrf_field()}}



		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Ngày</label>
		    </div>
		    <div class="col-75">
		      <input type="date" id="fname" name="Ngay" value="{{$hop_dong->Ngay}}">
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
		      <label for="fname">Hình Thức Thanh Toán</label>
		    </div>
		    <div class="col-75">
		      <select name="Hinh_thuc_thanh_toan" id="" class="fo-input" value="{{$hop_dong->Hinh_thuc_thanh_toan}}">
		      	<option>-- Chọn phương thức thanh toán --</option>
		      	<option>Chuyển khoản</option>
		      	<option>Tiền mặt</option>
		      </select>
		    </div>
		  </div>



		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tổng Tiền</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Tong_tien_thanh_toan" value="{{$hop_dong->Tong_tien_thanh_toan}}" placeholder="2.000.000VND..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tiền Cọc</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Tien_coc" value="{{$hop_dong->Tien_coc}}" placeholder="2.000.000VND..">
		    </div>
		  </div>

		<center><div class="row">
		<button class="btn btn-success">
		Sửa
	</button>
	<a href="{{url()->previous()}}">
		<button type="button" class="btn btn-danger">
			Quay lại
		</button>
	</a>
	</div></center>
	</form>

</body>
</html>