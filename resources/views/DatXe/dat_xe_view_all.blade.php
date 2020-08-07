@extends('layerAdmin.Admin_master')

@section('content')

<div class="container-fluid">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_dx') }}" method="post" role="Search">
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
					<th>Tên người nhận</th>
				</tr>
			</thead>
			<tbody>
				@foreach($details as $dat_xe)
				<tr>
					<td>{{$dat_xe->Ho_ten}}</td>
				</tr>
				<tr>
					<td>{{$dat_xe->Ten_xe}}</td>
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
	<h1>Danh sách đặt xe</h1>
	<a href="{{ route('dat_xe.dat_xe_view_insert') }}">
		<button>
			Thêm đặt Xe
		</button>
	</a>
	<br><br>
	
	
	<table class="table table-striped view-khach-hang table-responsive-lg" id="myTable">
		<thead>
			<tr>
				<th scope="col">Ngày Đặt</th>
				<th scope="col">Tên Khách Hàng</th>
				<th scope="col">Tên Xe</th>
				<th scope="col">Tên người nhận </th>
				<th scope="col">Số Điện Thoại</th>
				<th scope="col">Địa Chỉ</th>
				<th scope="col">Tổng tiền </th>
				<th scope="col">Ngày Lấy</th>
				<th scope="col">Ngày Trả</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($array_dat_xe as $dat_xe)
			<tr>
				<td>
					{{$dat_xe->Ngay}}
				</td>

				<td>
					{{$dat_xe->Ho_ten}}
				</td>

				<td>
					{{$dat_xe->Ten_xe}}
				</td>

				<td>
					{{$dat_xe->Ten_Nguoi_nhan}}
				</td>

				<td>
					{{$dat_xe->Sdt_Nguoi_nhan}}
				</td>

				<td>
					{{$dat_xe->Dc_Nguoi_nhan}}
				</td>

				<td>
					{{$dat_xe->Tong_tien}}
				</td>

				<td>
					{{$dat_xe->Ngay_lay}}
				</td>

				<td>
					{{$dat_xe->Ngay_tra}}
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>

</center>
</div>
@endsection
