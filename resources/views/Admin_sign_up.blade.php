<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" />
    <link href="{{asset('css/login.js')}}" rel="stylesheet" />
</head>
<body>


<section id="login" v-bind:class="isShake">
 <form method="post" action="{{route('Admin_process_sign_up')}}">
    {{csrf_field()}}
  <h2>Sign Up</h2>
  <div class="info" v-bind:class="good">
   
   <p v-show="login.login && login.password"></p>
  </div>
  <input type="text" name="Ten_dang_nhap" v-model="login.login" placeholder="username" />
  <input type="text" name="Email" v-model="login.login" placeholder="Email" />
  <input type="password" name="Mat_khau" v-model="login.password" placeholder="Password" />
  <input type="text" name="Dia_chi" v-model="login.login" placeholder="Address" />
  <input type="text" name="Sdt" v-model="login.login" placeholder="Phone" />
  <div >
        <input type="radio" name="Gioi_tinh" v-model="login.login" value="1" checked>Nam
        <input type="radio" name="Gioi_tinh" v-model="login.login" value="0">Nữ
  </div>
  <input type="date" name="Nam_sinh" v-model="login.login" placeholder="birtday" />
  <button v-on:click="onSubmit">Sign Up</button>
 </form>
</section>
</body>
</html>