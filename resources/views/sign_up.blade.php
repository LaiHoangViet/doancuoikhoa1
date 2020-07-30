<!DOCTYPE html>
<html>
<head>
  <link href="{{asset('css/dang-ky.css')}}" rel="stylesheet" />
  <link href="{{asset('css/login.js')}}" rel="stylesheet" />
</head>
<body>
  <center>
    <form method="post" action="{{route('process_sign_up')}}" class="dang-ky">
      {{csrf_field()}}
      <div class="dang-ky2">
        <h2>Đăng ký</h2>
      </div>
      <div class="info" v-bind:class="good">
        <p v-show="login.login && login.password"></p>
      </div>
      <div>
        <input type="text" name="Ten_dang_nhap" v-model="login.login" placeholder="Tài khoản" class="dang-ky1"/>
      </div>
      <div>
        <input type="text" name="Email" v-model="login.login" placeholder="Email" class="dang-ky1" />
      </div>
      <div>
        <input type="password" name="Mat_khau" v-model="login.password" placeholder="Mật khẩu" class="dang-ky1"/>
      </div>
      <div>
        <input type="text" name="Ho_ten" v-model="login.login" placeholder="Họ và tên" class="dang-ky1"/>
      </div>
      <div class="dang-ky3">
        <input type="radio" name="Gioi_tinh" v-model="login.login" value="1" checked>Nam
        <input type="radio" name="Gioi_tinh" v-model="login.login" value="0">Nữ
      </div>
      <div>
        <input type="text" name="Dia_chi" v-model="login.login" placeholder="Địa chỉ"  class="dang-ky1"/>
      </div>
      <div>
        <input type="text" name="Sdt" v-model="login.login" placeholder="Số điện thoại" class="dang-ky1"/>
      </div>
      <div>
        <input type="date" name="Nam_sinh" v-model="login.login" placeholder="Ngày sinh"  class="dang-ky1"/>
      </div>
      <div>
        <input type="text" name="Ten_co_quan" v-model="login.login" placeholder="Nơi làm việc"  class="dang-ky1"/>
      </div>
      <div>
        <button v-on:click="onSubmit" class="nut-dang-ky">Đăng ký</button>
      </div>
    </form>
  </center>
</body>
</html>