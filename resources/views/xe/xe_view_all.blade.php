@extends('layerAdmin.Admin_master')

@section('content')

{{-- <link href="{{asset('css/phan_trang.css')}}" rel="stylesheet" /> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}

{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

{{-- <script src="{{ asset('js/phan_trang.js') }}"></script> --}}
{{-- <script type="text/javascript" src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> --}}



<div class="container-fluid">
	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_xe') }}" method="post" role="Search">
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
					<th>Tên xe</th>
				</tr>
			</thead>
			<tbody>
				@foreach($details as $xe)
				<tr>
					<td>{{$xe->Ten_xe}}</td>
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
	<h1>Danh sách xe</h1>
	<a href="{{ route('xe.xe_view_insert') }}">
		<button>
			Thêm Xe
		</button>
	</a>
	<br><br>
	
	<table class="table table-striped view-khach-hang table-responsive-lg" id="myTable">
		<thead>
			<tr>
				<th scope="col">Tên Xe</th>
				<th scope="col">Ảnh</th>
				<th scope="col">Biển Số</th>
				<th scope="col">Hãng Xe</th>
				<th scope="col">Mô Tả</th>
				<th scope="col">Giá</th>
				<th scope="col">Tình Trạng</th>
				<th scope="col">Loại Xe</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($array_xe as $xe)
			<tr>
				<td>
					{{$xe->Ten_xe}}
				</td>
				<td>
					<img width="100px" src="../storage/{{$xe->Anh}}" >
				</td>
				<td>
					{{$xe->Bien_so}}
				</td>
				<td>
					{{$xe->Hang_xe}}
				</td>
				<td>
					{{$xe->Mo_ta}}
				</td>
				<td>
					{{$xe->Gia}}
				</td>
				<td>
					@if ($xe->Tinh_trang==1)
					Còn Xe
					@else
					Hết Xe
					@endif
				</td>
				<td>
					{{$xe->Ten_loai_xe}}
				</td>
				<td>
					<a href="{{ route('xe.xe_view_update', ['id' => $xe->Ma_xe]) }}" class="btn btn-simple btn-warning btn-icon edit">
						<span class="material-icons">
							system_update_alt
						</span>
					</a>
				</td>
				<td>
					<a href="{{ route('xe.xe_delete', ['id' => $xe->Ma_xe]) }}" class="btn btn-simple btn-danger btn-icon remove">
						<span class="material-icons">
							delete_forever
						</span>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

{{-- <script>
	$(document).ready( function () {
	    $('#myTable').dataTable({
            "autoWidth": false,
            "lengthChange": false,
            "pageLength": 10,
            "searching": false
        });
        } );
</script> --}}
</center>

@endsection