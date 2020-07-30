@extends('layerAdmin.Admin_master')

@section('content')

<div class="container-fluid">

	<form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem_lx') }}" method="post" role="Search">
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
				@foreach($details as $loai_xe)
				<tr>
					<td>{{$loai_xe->Ten_loai_xe}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@elseif(isset($Message))
	<p>{{$message}}</p>
	@endif
</div>

<center><h1>Danh sách Loại Xe</h1>
	<a href="{{ route('loai_xe.loai_xe_view_insert') }}">
		<button>
			Thêm Loại Xe
		</button>
	</a><br><br>

	<table class="table table-striped view-khach-hang table-responsive-lg view-khach-hang1">
		<thead>
			<tr>
				<th scope="col">Tên Loại Xe</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($array_loai_xe as $loai_xe)
			<tr>
				<td>
					{{$loai_xe->Ten_loai_xe}}
				</td>
				<td>
					<a href="{{ route('loai_xe.loai_xe_view_update', ['id' => $loai_xe->Ma_loai_xe]) }}" class="btn btn-simple btn-warning btn-icon edit">
						<span class="material-icons">
							system_update_alt
						</span>
					</a>
						&nbsp;	&nbsp;	&nbsp;
					<a href="{{ route('loai_xe.loai_xe_delete', ['id' => $loai_xe->Ma_loai_xe]) }}" class="btn btn-simple btn-danger btn-icon remove">
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
@endsection