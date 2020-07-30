
<div class="container-fluid menu-khang-hang">
  <div class="navbar-header">
    <a class="navbar-brand logo" href="{{ route('layerAdmin') }}">
      <img src="{{asset('./img/logo.jpg')}}" class="logo">
    </a>
  </div>
  <div class="collapse navbar-collapse menu-khach-hang2" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ route('Admin.Admin_view_all') }}" class="menu-khach-hang1">Quản lí admin </a></li>
      <li><a href="{{ route('khach_hang.khach_hang_view_all') }}" class="menu-khach-hang1">Quản lí khách hàng </a></li>
      <li><a href="{{ route('loai_xe.loai_xe_view_all') }}" class="menu-khach-hang1">Quản lí loại xe </a></li>
      <li><a href="{{ route('xe.xe_view_all') }}" class="menu-khach-hang1">Quản lí xe </a></li>
      <li><a href="{{ route('dat_xe.dat_xe_view_all') }}" class="menu-khach-hang1">Quản lí đặt xe </a></li>
      <li><a href="{{ route('sua_chua.sua_chua_view_all') }}" class="menu-khach-hang1">Quản lí sửa chữa </a></li>
      <li><a href="{{ route('hop_dong.hop_dong_view_all') }}" class="menu-khach-hang1">Quản lí hợp đồng </a></li>
      <li><a href="{{ route('Admin_logout') }}" class="menu-khach-hang1">Logout</a></li>
    </ul>
  </div>
</div>