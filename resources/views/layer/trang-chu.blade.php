@extends('layer.master')
@section('content')

@include('layer.header')

<div class="body">

  {{-- Mục đích --}}
  <div class="gioi-thieu-trang-web">
    <div class="tieu-de-khau-hieu">
      <h3>Mục đích</h3>
      <svg height="2" width="60"> 
        <line x1="200" y1="0" x2="0" y2="0" style="stroke:#333333;stroke-width:4px">
        </line> 
      </svg>
      <span>CUNG CẤP GIẢI PHÁP THUÊ XE TOÀN DIỆN CHO KHÁCH HÀNG</span>
    </div>
    <div class="muc-tieu">
      <div class="row">
        <div class="col muc-tieu-nho">
          <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file-chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-chart-line fa-w-12 fa-7x">
            <path fill="currentColor" d="M131.2 320h-22.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8h22.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8zm72-64h-22.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8h22.4c6.4 0 12.8-6.4 12.8-12.8V268.8c0-6.4-6.4-12.8-12.8-12.8zm49.6 160h22.4c6.4 0 12.8-6.4 12.8-12.8V300.8c0-6.4-6.4-12.8-12.8-12.8h-22.4c-6.4 0-12.8 6.4-12.8 12.8v102.4c0 6.4 6.4 12.8 12.8 12.8zM369.83 97.98L285.94 14.1c-9-9-21.2-14.1-33.89-14.1H47.99C21.5.1 0 21.6 0 48.09v415.92C0 490.5 21.5 512 47.99 512h287.94c26.5 0 48.07-21.5 48.07-47.99V131.97c0-12.69-5.17-24.99-14.17-33.99zM255.95 51.99l76.09 76.08h-76.09V51.99zM336 464.01H47.99V48.09h159.97v103.98c0 13.3 10.7 23.99 24 23.99H336v287.95z" class=""></path>
          </svg>
          <h6>SẢN PHẨM ĐA DẠNG</h6>
          <span>Khách hàng thuê xe, thụ hưởng những chính sách bán hàng mới nhất và ưu đãi nhất.</span>
        </div>
        <div class="col muc-tieu-nho">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="badge-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-badge-check fa-w-16 fa-7x"><path fill="currentColor" d="M512 256c0-37.7-23.7-69.9-57.1-82.4 14.7-32.4 8.8-71.9-17.9-98.6-26.7-26.7-66.2-32.6-98.6-17.9C325.9 23.7 293.7 0 256 0s-69.9 23.7-82.4 57.1c-32.4-14.7-72-8.8-98.6 17.9-26.7 26.7-32.6 66.2-17.9 98.6C23.7 186.1 0 218.3 0 256s23.7 69.9 57.1 82.4c-14.7 32.4-8.8 72 17.9 98.6 26.6 26.6 66.1 32.7 98.6 17.9 12.5 33.3 44.7 57.1 82.4 57.1s69.9-23.7 82.4-57.1c32.6 14.8 72 8.7 98.6-17.9 26.7-26.7 32.6-66.2 17.9-98.6 33.4-12.5 57.1-44.7 57.1-82.4zm-144.8-44.25L236.16 341.74c-4.31 4.28-11.28 4.25-15.55-.06l-75.72-76.33c-4.28-4.31-4.25-11.28.06-15.56l26.03-25.82c4.31-4.28 11.28-4.25 15.56.06l42.15 42.49 97.2-96.42c4.31-4.28 11.28-4.25 15.55.06l25.82 26.03c4.28 4.32 4.26 11.29-.06 15.56z" class=""></path></svg>
          <h6>THÔNG TIN MINH BẠCH</h6>
          <span>Khách hàng thuê xe , thụ hưởng những chính sách bán hàng mới nhất và ưu đãi nhất.</span>
        </div>
        <div class="col muc-tieu-nho">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="project-diagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-project-diagram fa-w-20 fa-7x"><path fill="currentColor" d="M384 320H256c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h128c17.67 0 32-14.33 32-32V352c0-17.67-14.33-32-32-32zM192 32c0-17.67-14.33-32-32-32H32C14.33 0 0 14.33 0 32v128c0 17.67 14.33 32 32 32h95.72l73.16 128.04C211.98 300.98 232.4 288 256 288h.28L192 175.51V128h224V64H192V32zM608 0H480c-17.67 0-32 14.33-32 32v128c0 17.67 14.33 32 32 32h128c17.67 0 32-14.33 32-32V32c0-17.67-14.33-32-32-32z" class=""></path></svg>
          <h6>QUY TRÌNH ĐƠN GIẢN</h6>
          <span>Khách hàng dễ dàng tìm được chiếc ưng ý từ Hand in Hand, thủ tục ký HĐ thuận tiện…</span>
        </div>
        <div class="col muc-tieu-nho">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trophy-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-trophy-alt fa-w-18 fa-7x"><path fill="currentColor" d="M552 64H448V24c0-13.3-10.7-24-24-24H152c-13.3 0-24 10.7-24 24v40H24C10.7 64 0 74.7 0 88v56c0 66.5 77.9 131.7 171.9 142.4C203.3 338.5 240 360 240 360v72h-48c-35.3 0-64 20.7-64 56v12c0 6.6 5.4 12 12 12h296c6.6 0 12-5.4 12-12v-12c0-35.3-28.7-56-64-56h-48v-72s36.7-21.5 68.1-73.6C498.4 275.6 576 210.3 576 144V88c0-13.3-10.7-24-24-24zM64 144v-16h64.2c1 32.6 5.8 61.2 12.8 86.2-47.5-16.4-77-49.9-77-70.2zm448 0c0 20.2-29.4 53.8-77 70.2 7-25 11.8-53.6 12.8-86.2H512v16zm-127.3 4.7l-39.6 38.6 9.4 54.6c1.7 9.8-8.7 17.2-17.4 12.6l-49-25.8-49 25.8c-8.8 4.6-19.1-2.9-17.4-12.6l9.4-54.6-39.6-38.6c-7.1-6.9-3.2-19 6.7-20.5l54.8-8 24.5-49.6c4.4-8.9 17.1-8.9 21.5 0l24.5 49.6 54.8 8c9.6 1.5 13.5 13.6 6.4 20.5z" class=""></path></svg>
          <h6>THƯƠNG HIỆU UY TÍN</h6>
          <span>Hand in Hand là đối tác tin cậy của các CĐT, ngân hàng, nhà thầu lớn như …</span>
        </div>
      </div>
    </div>
    <div class="tim-hieu-them">
      <button type="button" class="btn btn-primary">
        <a href="{{ route('gioi_thieu') }}" class="tim-hieu-them">
          Tìm hiểu thêm <i class="fas fa-chevron-right gioi-thieu-next"></i>
        </a>
      </button>
    </div>
  </div>

  <div class="huong-dan-thue-xe">
    <div class="tieu-de-khau-hieu1">
      <h3>Hướng dẫn thuê xe</h3>
      <svg height="2" width="60"> 
        <line x1="200" y1="0" x2="0" y2="0" style="stroke:#ffffff;stroke-width:4px">
        </line> 
      </svg>
    </div>
    <div class="noi-dung-thue-xe">
      <div class="row noi-dung-thue-xe1">
        <div class="col">
          <div class="img-dat-xe">
            <img src="{{asset('img/huong-dan-thue-xe1.jpg')}}" class="d-block w-100 anh-hdtx">
          </div>
          <div class="tieu-de-noi-dung">
            <span>Đặt xe với Hand In Hand</span>
          </div>
        </div>
        <div class="col">
          <div class="img-dat-xe">
           <img src="{{asset('img/huong-dan-thue-xe2.jpg')}}" class="d-block w-100 anh-hdtx">
         </div>
         <div class="tieu-de-noi-dung">
          <span>Nhận xe hoặc giao tới tận nơi</span>
        </div>
      </div>
      <div class="col">
        <div class="img-dat-xe">
          <img src="{{asset('img/huong-dan-thue-xe3.jpg')}}" class="d-block w-100 anh-hdtx">
        </div>
        <div class="tieu-de-noi-dung">
          <span>Tận hưởng chuyến đi</span>
        </div>
      </div>
      <div class="col">
        <div class="img-dat-xe">
         <img src="{{asset('img/huong-dan-thue-xe4.jpg')}}" class="d-block w-100 anh-hdtx">
       </div>
       <div class="tieu-de-noi-dung">
         <span>Kết thúc giao dịch</span>
       </div>
     </div>
   </div>
   <div class="xem-them-huong-dan-mua-xe">
     <a href="{{ route('huong-dan-mua-xe') }}" class="noi-dung-thue-xe2">
       Xem thêm
       <span class="material-icons">
        navigate_next
      </span>
    </a>
  </div>
</div>
</div>

<div class="container-fluid xe-nen-chon3">
  <center>
    <h3>Xe nên chọn</h3>
    <div>
      <svg height="2" width="60"> 
        <line x1="200" y1="0" x2="0" y2="0" style="stroke:#333333;stroke-width:4px">
        </line> 
      </svg>
    </div>
    <span class="">CHÚNG TÔI SẼ ĐỒNG HÀNH VỚI BẠN TRÊN MỖI CHUYẾN ĐI</span>
  </center>
  <div style="clear: both;" class="row xe-nen-chon">
    @foreach ($xe as $value)
    <div class="col-md-4 xe-ne-chon1">
      <a class="xe-nen-chon2" href="{{ route('chi_tiet_xe', ['id' => $value->Ma_xe]) }}">
        <img class="anh" src="storage/{{$value->Anh}}" alt="">
        <span class="ten">
          {{$value->Ten_xe}}
        </span>
        <div class="gia">
          <span class="material-icons icon-do-la">
            monetization_on
          </span>
          <span class="gia1">
            {{$value->Gia}}
          </span>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

</div>
@endsection