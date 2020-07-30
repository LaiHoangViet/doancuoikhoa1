<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>
	<div class="container">
	<form action="{{ route('loai_xe.loai_xe_process_insert') }}" method="post">
		{{csrf_field()}}

		  <div class="row">
		    <div class="col-25">
		      <label for="fname">Tên Loại Xe</label>
		    </div>
		    <div class="col-75">
		      <input type="text" id="fname" name="Ten_loai_xe" placeholder="Tên Loại Xe..">
		    </div>
		  </div>

		<center><div class="row">
		<button>Thêm Loại Xe</button>
		<a href="{{url()->previous()}}">
			<button type="button">
				Quay lại
			</button>
		</a>
	  	</div></center>
	</form>
</body>
</html>