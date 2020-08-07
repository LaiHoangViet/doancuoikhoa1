<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bootstrap Template</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="{{asset('css/kh2.css')}}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">

  <link href="{{asset('css/phan_trang1.css')}}" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <script src="{{ asset('js/phan_trang.js') }}"></script>
    <script src="{{ asset('js/cuon-trang.js') }}"></script>
</head>

<body data-spy="scroll" data-target="#myScrollspy">


  <header class="header-menu">
    @include('layerAdmin.menu_Admin')
  </header>
  <div class="content">
    {{--     <nav > --}}
      @yield('content')
    </div>
    
  </body>
  <script>
    $(document).ready( function () {
      $('#myTable').dataTable({
        "autoWidth": false,
        "lengthChange": false,
        "pageLength": 10,
        "searching": false
      });
    } );
  </script>

  </html>