<!DOCTYPE html>
<html>
<head>
<link href="{{asset('css/file.css')}}" rel="stylesheet" />
</head>
<body>


<div class="container">
  <form action="{{ route('dat_xe.dat_xe_process_insert') }}" method="post">
    {{csrf_field()}}
    
  <div class="row">
    <div class="col-25">
      <label for="fname">Ngày Đặt</label>
    </div>
    <div class="col-75">
      <input type="date" id="fname" name="Ngay">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Tên Khách Hàng</label>
    </div>
    <div class="col-75">
      </label>
      <select class="form-control" name="Ma_khach_hang">
        @foreach ($array_khach_hang as $khach_hang)
          <option value="{{$khach_hang->Ma_khach_hang}}">
            {{$khach_hang->Ho_ten}}
          </option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Tên Xe</label>
    </div>
    <div class="col-75">
      </label>
      <select class="form-control" name="Ma_xe">
        @foreach ($array_xe as $xe)
          <option value="{{$xe->Ma_xe}}">
            {{$xe->Ten_xe}}
          </option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Tên người nhận</label>
    </div>
    <div class="col-75">
      <input class="input" type="text" id="lname" name="Ten_Nguoi_nhan" placeholder="1000..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Số Điện Thoại</label>
    </div>
    <div class="col-75">
      <input class="input" type="text" id="lname" name="Sdt_Nguoi_nhan" placeholder="10214..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Địa Chỉ</label>
    </div>
    <div class="col-75">
      <input class="input" type="text" id="lname" name="Dc_Nguoi_nhan" placeholder="Địa Chỉ..">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="lname">Tổng tiền</label>
    </div>
    <div class="col-75">
      <input class="input" type="text" id="lname" name="Tong_tien" placeholder="012..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Ngày Lấy</label>
    </div>
    <div class="col-75">
      <input class="input" type="date" id="lname" name="Ngay_lay">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Ngày Trả</label>
    </div>
    <div class="col-75">
      <input class="input" type="date" id="lname" name="Ngay_tra">
    </div>
  </div>


  <center><div class="row">
    <button>Thêm đặt Xe</button>
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