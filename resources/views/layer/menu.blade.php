<div class="container">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top menu-logo" id="header">
    <!-- Logo -->
    <a class="navbar-brand logo" href="{{ route('layer') }}">
      <img src="{{asset('./img/logo.jpg')}}" class="logo">
    </a>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="dropbtn" href="{{ route('ta_ca_xe') }}">Xe</a>
        </li>
        <li class="nav-item dropdown">
          <a class="dropbtn" href="{{ route('gioi_thieu') }}">Giới thiệu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="dropbtn" href="{{ route('huong-dan-mua-xe') }}">Hỗ trợ</a>
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="{{ URL::to('tim_kiem') }}" method="post" role="Search">
        {{csrf_field()}}
        <div class="search-input">
         <span class="material-icons">
          search
        </span>
        <input type="text" placeholder="Tìm kiếm" class="search" name='key'>
      </div>
    </form>
@if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Ten_loai_xe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $xe)
            <tr>
                <td>{{$xe->Ten_xe}}</td>
                <td>{{$xe->Ten_loai_xe}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  @elseif(isset($Message))
  <p>{{$message}}</p>
    @endif
    @if(Session::has('Ma_khach_hang'))
    @else
    <a href="{{ route('khach_hang_view_login') }}" class="login-logout1"><span class="login-logout">Login</span></a>

    @endif

    @if(Session::has('Ma_khach_hang'))
    <a href="{{ route('khach_hang_logout') }}" class="login-logout1"><span class="login-logout">Logout</span> </a>
    @else
    @endif
  </div>
</nav>

</div>
