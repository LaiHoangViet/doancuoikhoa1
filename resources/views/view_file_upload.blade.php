<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('process_file_upload')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	file<input type="file" name="Anh" accept="image/*">
	<input type="submit" name="submit" value="upload">
</form>
</body>
</html>
