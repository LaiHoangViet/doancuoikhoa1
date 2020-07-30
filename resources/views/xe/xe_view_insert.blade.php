<!DOCTYPE html>
<html>
<head>
<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>


<div class="container">
  <form action="{{ route('xe.xe_process_insert') }}" method="post" enctype="multipart/form-data">

   
    {{csrf_field()}}

       
    
  <div class="row">
    <div class="col-25">
      <label for="fname">Tên Xe</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="Ten_xe" placeholder="Tên xe..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Ảnh</label>
    </div>
    <div class="col-75">
      <input type="file" name="Anh">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="lname">Biển Số</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="Bien_so" placeholder="29C1-XXX.XX..">
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="lname">Hãng Xe</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="Hang_xe" placeholder="SUV..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Mô Tả</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="Mo_ta" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Giá</label>
    </div>
    <div class="col-75">
      <input class="input" type="text" id="lname" name="Gia" placeholder="1000 VND..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Tình Trạng</label>
    </div>
    <div class="col-75">
      <label><input type="radio" id="lname" name="Tinh_trang" value="1" checked>Còn Xe</label>
    <label><input type="radio" id="lname" name="Tinh_trang" value="0">Hết Xe</label>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Loại Xe</label>
    </div>
    <div class="col-75">
      </label>
      <select class="form-control" name="Ma_loai_xe">
        @foreach ($array_loai_xe as $loai_xe)
          <option value="{{$loai_xe->Ma_loai_xe}}">
            {{$loai_xe->Ten_loai_xe}}
          </option>
        @endforeach
      </select>
    </div>
  </div><br>

  <center><div class="row">
    <button>Thêm Xe</button>
      <a href="{{url()->previous()}}">
        <button type="button">
          Quay lại
        </button>
      </a>
  </div></center>
  </form>
</div>

</body>
</html>