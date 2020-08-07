<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('sua_chua.sua_chua_process_insert') }}" method="post">
		{{csrf_field()}}


		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Ngày Sửa</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="date" id="lname" name="Ngay_sua">
		    </div>
		  </div>


		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Xe</label>
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
		      <label for="fname">Tình Trạng</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Tinh_trang" placeholder="Tình Trạng..">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Ngày Sửa Xong</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="date" id="lname" name="Ngay_sua_xong">
		    </div>
		  </div>

		  <div class="row">
		    <div class="col-25">
		      <label for="lname">Chi Phí</label>
		    </div>
		    <div class="col-75">
		      <input class="input" type="text" id="lname" name="Chi_phi">
		    </div>
		  </div>

  		<center><div class="row nut-them">
			<button>Thêm Sửa</button>
			<a href="{{url()->previous()}}">
				<button type="button">
					Quay lại
				</button>
			</a>
  		</div></center>
	</form>
</body>
</html>