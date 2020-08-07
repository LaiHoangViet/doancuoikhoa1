@extends('layerAdmin.Admin_master')

@section('content')

<div class="container">

         <form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_hd') }}" method="post" role="Search">
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
                <th>Tên khách hàng </th>
                <th>Tên xe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $hop_dong)
            <tr>
                <td>{{$hop_dong->Ho_ten}}</td>
                <td>{{$hop_dong->Ten_xe}}</td>
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
	<h1>Danh sách Hợp Đồng</h1>
	<a href="{{ route('hop_dong.hop_dong_view_insert') }}">
		<button>
			Thêm Hợp Đồng
		</button>
	</a><br><br>
	
	<table border="1" width="100%" id="myTable"> 
		<tr>
			<th>Ngày</th>
			<th>Khách Hàng</th>
			<th>Xe</th>
			<th>Ngày Nhận Xe</th>
			<th>Ngày Trả Xe</th>
			<th>Hình Thức Thanh Toán</th>
			<th>Tổng Tiền</th>
			<th>Tiền Cọc</th>
			<th></th>
		</tr>
		@foreach ($array_hop_dong as $hop_dong)
			<tr>
				<td>
					{{$hop_dong->Ngay}}
				</td>
				<td>
					{{$hop_dong->Ho_ten}}
				</td>
				<td>
					{{$hop_dong->Ten_xe}}
				</td>
				<td>
					{{$hop_dong->Ngay_nhan}}
				</td>
				<td>
					{{$hop_dong->Ngay_tra}}
				</td> 
				<td>
					{{$hop_dong->Hinh_thuc_thanh_toan}}
				</td>
				<td>
					{{$hop_dong->Tong_tien_thanh_toan}}
				</td>
				<td>
					{{$hop_dong->Tien_coc}}
				</td>
				<td>
				<a href="{{ route('hop_dong.hop_dong_view_update', ['id' => $hop_dong->Ma_hop_dong]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a>
				
				<a href="{{ route('hop_dong.hop_dong_delete', ['id' => $hop_dong->Ma_hop_dong]) }}" class="btn btn-simple btn-danger btn-icon remove">
					<i class="fa fa-times"></i>
				</a>
				</td>
			</tr>
		@endforeach
	</table></center>
</div>
@endsection
