<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      box-sizing: border-box;
    }
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }
    input[type=submit]:hover {
      background-color: #45a049;
    }
    .container {
      border-radius: 5px;
      background-color: powderblue;
      padding: 20px;
    }
    .col-25 {
      float: left;
      width: 10%;
      margin-top: 6px;
    }
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="{{ route('xe.xe_process_update', ['id' => $xe->Ma_xe]) }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="row">
        <div class="col-25">
          <label for="fname">Tên Xe</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="Ten_xe" value="{{$xe->Ten_xe}}">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Ảnh</label>
        </div>
        <div class="col-75">
          <input type="file" id="fname" name="Anh" required="">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Biển Số</label>
        </div>
        <div class="col-75">
          <input type="text" name="Bien_so" id="fname" value="{{$xe->Bien_so}}">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Hãng Xe</label>
        </div>
        <div class="col-75">
          <input type="text" name="Hang_xe" id="fname" value="{{$xe->Hang_xe}}">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="subject">Mô Tả</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="Mo_ta" style="height:200px">{{$xe->Hang_xe}}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="lname">Giá</label>
        </div>
        <div class="col-75">
          <input class="input" type="text" id="lname" name="Gia" value="{{$xe->Gia}}">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="lname">Tình Trạng</label>
        </div>
        <div class="col-75">
          <label class="radio-inline"><input type="radio" name="Tinh_trang" value="1"
            @if ($xe->Tinh_trang==1)
            checked 
            @endif
            >Còn Xe</label>
            <label class="radio-inline"><input type="radio" name="Tinh_trang" value="0"
              @if ($xe->Tinh_trang==0)
              checked 
              @endif
              >Hết Xe</label>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Loại Xe</label>
            </div>
            <div class="col-75">
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
            <button>Sửa </button>
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