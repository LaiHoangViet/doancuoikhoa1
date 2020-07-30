@extends('layer.master')
@section('content')
<center>
	<div class="mieu-ta3">
		<img class="img-san-pahm" width="500px" src="../storage/{{$xe->Anh}}" >
		<div class="mieu-ta">
			<h1 class="ten-san-pham">
				{{$xe->Ten_xe}}
			</h1>
			<div class="mieu-ta1">
				<p class="mieu-ta2">
					<b>Biển Số:</b> 
					{{$xe->Bien_so}}
				</p>
				<p class="mieu-ta2">
					<b>Hãng Xe: </b> 
					{{$xe->Hang_xe}}
				</p>
				<p class="mieu-ta2">
					<b>Mô tả: </b>
					{{$xe->Mo_ta}}
				</p>
				<p class="mieu-ta2">
					<b>Giá:</b> 
					{{$xe->Gia}}
				</p>
				@if(Session::has('Ma_khach_hang'))
				<a href="{{ route('dat_hang', ['ma_xe' => $xe->Ma_xe]) }}" class="nut-dat-xe">
					Đặt Xe
				</a>
				@else
				@endif
			</div>
		</div>
	</div>
</center>
@endsection