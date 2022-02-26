<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') - Dashboard</title>
    <meta name="twitter:description" content="description ">
    <meta name="twitter:image" content="{{asset('backend/assets/img/avatars/avatar2.jpeg')}}">
    <meta property="og:image" content="{{asset('backend/assets/img/avatars/avatar4.jpeg')}}">
    <meta name="description" content="admin panel is for admi">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="twitter title">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="icon" type="image/jpeg" sizes="60x60" href="{{asset('backend/assets/img/avatars/avatar5.jpeg')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body id="page-top">

    <div id="wrapper">
                      
               <!-- navbar  -->
            @include('backend.body.navbar')
            <!-- navbar end  -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <!-- top navbar  -->
            @include('backend.body.topnavbar')

            <!-- top navbar end  -->
         
            <div class="container-fluid">
               
               <!-- 1st row start  -->
               @yield('content')
            
            <!-- 3rd row end  -->
            <!-- end chart row  -->
        </div>
    </div>
<!-- footer  -->

@include('backend.body.footer')

<!-- end footer  -->
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{asset('backend/assets/js/script.min.js')}}"></script>
</body>

</html>