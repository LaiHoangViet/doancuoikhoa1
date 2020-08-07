
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HAND IN HAND</title>

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Css của các trang  -->
  <link href="{{asset('css/grayscale.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/menu1.css')}}" rel="stylesheet">
  <link href="{{asset('css/content.css')}}" rel="stylesheet">
  <link href="{{asset('css/footer.css')}}" rel="stylesheet">
  <link href="{{asset('css/ta_ca_xe.css')}}" rel="stylesheet">
  <link href="{{asset('css/gioi-thieu.css')}}" rel="stylesheet">
  <link href="{{asset('css/chi-tiet-xe.css')}}" rel="stylesheet">
  <link href="{{asset('css/phan_trang.css')}}" rel="stylesheet">

</head>

<body id="page-top">

{{--   <header class="masthead">
   <div class="banner slide-header">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('Img/demo-image-01.jpg')}}" class="d-block w-100 anh-header">
        </div>
        <div class="carousel-item">
          <img src="{{asset('Img/demo-image-02.jpg')}}" class="d-block w-100 anh-header">
        </div>
        <div class="carousel-item">
          <img src="{{asset('Img/demo-image-01.jpg')}}" class="d-block w-100 anh-header">
        </div>
      </div>
    </div>
  </div>
</header> --}}


@include('layer.menu')



<div class="body">
  {{-- Nội dung của nhưng trang khác --}}
  @yield('content')
</div>

<!-- Footer -->
<div class="footer">
  <div class="footer-1">
    <div class="footer-2 logo-cong-ty">
      <img src="{{asset('Img/logo.jpg')}}">    
      <span class="name-cong-ty">HAND IN HAND</span>
      <span class="dia-chi-footer">Tầng 11, Vincom Hai Bà Trưng - Hà Nội</span>
      <span class="so-dien-thoai">(024) 3562 5939 - (024) 3562 5940</span>
      <span class="lien-ket">       
        <i class="fab fa-youtube"></i>
        <i class="fab fa-facebook-square"></i>
      </span>
    </div>
    <div class="footer-2 huong-dan-1">
      <span class="tieu-de-footer">Hướng dẫn</span>
      <span class="huong-dan"><a href="#"> Về chúng tôi</a></span>
      <span class="huong-dan"><a href="#">Câu hỏi thường gặp</a></span>
      <span class="huong-dan"><a href="#">Sitemap</a></span>
    </div>
    <div class="footer-2 lien-he-footer">
      <span class="lien-he footer-3">Liên lạc với chúng tôi</span>
      <input type="text" class="input-footer footer-3">
      <textarea class="noi-dung-footer footer-3"></textarea>
      <button type="button" class="btn btn-success send-footer footer-3">Success</button>
    </div>
  </div>
</div>            

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="{{asset('js/cuon-trang.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

{{-- Js cua google map --}}
{{--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.691726865478!2d105.80187431476284!3d21.004990886011246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9e4385a815%3A0x1e653ca5d98a35df!2zTMOqIFbEg24gTMawxqFuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1592451641830!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
--}}
</body>

</html>
