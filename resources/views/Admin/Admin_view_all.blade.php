@extends('layerAdmin.Admin_master')
@section('content')

<div class="container-fluid">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_admin') }}" method="post" role="Search">
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
				@foreach($details as $Admin)
				<tr>
					<td>{{$Admin->Ten_dang_nhap}}</td>
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
	<h1>Danh sách Admin</h1>
	<a href="{{ route('Admin.Admin_view_insert') }}">
		<button>
			Thêm Admin
		</button>
	</a>
	<br><br>
	
	<table class="table table-striped view-khach-hang table-responsive-lg">
		<thead>
			<tr>
				<th scope="col">Tên Đăng Nhập</th>
				<th scope="col">Mật Khẩu</th>
				<th scope="col">Giới Tính</th>
				<th scope="col">Năm Sinh</th>
				<th scope="col">Số Điện Thoại</th>
				<th scope="col">Địa Chỉ</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($array_Admin as $Admin)
			<tr>
				<td>
					{{$Admin->Ten_dang_nhap}}
				</td>
				<td>
					{{$Admin->Mat_khau}}
				</td>
				<td>
					@if ($Admin->Gioi_tinh==1)
					Nam
					@else
					Nữ
					@endif
				</td>
				<td>
					{{$Admin->Nam_sinh}}
				</td>
				<td>
					{{$Admin->Sdt}}
				</td>
				<td>
					{{$Admin->Dia_chi}}
				</td>
				<td>
					{{$Admin->Email}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</center>

@endsection