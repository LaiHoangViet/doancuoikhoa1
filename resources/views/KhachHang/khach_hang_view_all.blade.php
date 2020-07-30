@extends('layerAdmin.Admin_master')

@section('content')

<div class="container-fluid">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_kh') }}" method="post" role="Search">
		{{csrf_field()}}
		<input type="text" class="form-control" placeholder="Search" name="key">
		<button type="submit">
			tìm kiếm 
		</button>
	</form>
	<div class="container">
		@if(isset($details))
		<p> The Search results for your query <b> {{ $query }} </b> are :</p>
		<h2>Sample User details</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Tên đăng nhập</th>
				</tr>
			</thead>
			<tbody>
				@foreach($details as $khach_hang)
				<tr>
					<td>{{$khach_hang->Ten_dang_nhap}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@elseif(isset($Message))
	<p>{{$message}}</p>
	@endif
</div>

<center>
	<h1>Danh sách khách hàng</h1>
{{-- 	<a href="{{ route('khach_hang.khach_hang_view_insert') }}">
		<button>
			Thêm Khách Hàng
		</button>
	</a>
	<br><br>
	--}}
	
	<table class="table table-striped view-khach-hang table-responsive-lg">
		<thead>
			<tr>
				<th scope="col">Tên Đăng Nhập</th>
				<th scope="col">Mật Khẩu</th>
				<th scope="col">Tên Khách Hàng</th>
				<th scope="col">Giới Tính</th>
				<th scope="col">Năm Sinh</th>
				<th scope="col">Số Điện Thoại</th>
				<th scope="col">Địa Chỉ</th>
				<th scope="col">Email</th>
				<th scope="col">Tên Cơ Quan</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($array_khach_hang as $khach_hang)
			<tr>
				<td>
					{{$khach_hang->Ten_dang_nhap}}
				</td>
				<td>
					{{$khach_hang->Mat_khau}}
				</td>
				<td>
					{{$khach_hang->Ho_ten}}
				</td>
				<td>
					@if ($khach_hang->Gioi_tinh==1)
					Nam
					@else
					Nữ
					@endif
				</td>
				<td>
					{{$khach_hang->Nam_sinh}}
				</td>
				<td>
					{{$khach_hang->Sdt}}
				</td>
				<td>
					{{$khach_hang->Dia_chi}}
				</td>
				<td>
					{{$khach_hang->Email}}
				</td>
				<td>
					{{$khach_hang->Ten_co_quan}}
				</td>
				<td>
					<a href="{{ route('khach_hang.khach_hang_view_update', ['id' => $khach_hang->Ma_khach_hang]) }}" class="btn btn-simple btn-warning btn-icon edit">
						<span class="material-icons">
							system_update_alt
						</span>
					</a>
				</td>
				<td>
					<a href="{{ route('khach_hang.khach_hang_delete', ['id' => $khach_hang->Ma_khach_hang]) }}" class="btn btn-simple btn-danger btn-icon remove">
						<span class="material-icons">
							delete_forever
						</span>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</center>
</div>
@endsection