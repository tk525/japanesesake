<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TOP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="/fonts.gstatic.com">
    <link rel="stylesheet" href="/css/top.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">

</head>
<body>
    {{-- ナビバー --}}
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/about">About This Site</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/event">Events List</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/mypage">Mypage</a>
                        </li>
                      </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/owner/login">酒蔵の方はこちら</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- ナビバーここまで --}}

    {{-- カルーセル --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/topPage/ukiyoe.jpg" alt="Responsive image" class="img-fluid mb-5">
                <div class="carousel-caption d-none d-md-block">
                    <h5>aaa</h5>
                    <p>bbb</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/img/topPage/sake_container.jpg" alt="Responsive image" class="img-fluid mb-5">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/img/topPage/sake_and_rice.jpg" alt="Responsive image" class="img-fluid mb-5">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/img/topPage/woman_drinking_sake.jpg" alt="Responsive image" class="img-fluid mb-5">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="/img/topPage/itsukushima_shrine.jpg" alt="Responsive image" class="img-fluid mb-5">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        {{-- カルーセルここまで --}}

{{-- サイト説明 --}}
<div class="mx-auto" style="width: 50%;">

    {{-- このサイトについてのざっくり説明 --}}
        <h1 class="display-4 mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">about this site</font></font></h1>

        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
                    This site makes it easy for foreigners who want to participate in events for sake brewing in Hiroshima.
            <br>
                    If you're looking at this site, you're apply almost there for the sake brewery event!
            <br></font>
        </font>

    {{-- 申込方法 --}}
    <div class="mt-5 pt-5">
        <h1 class="display-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">application method</font></font></h1>

        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">
            1. Please register from the top page.<br>
            2. Press "book" button of the event you want to participate in.<br>
            3. If you need help or a wheelchair, please enter text and press "book now".<br>
            <div class="mt-5">
            This completes the application!
            <br>
            If you make a mistake in your application, you can cancel it from My Page.
            <br>
            </div>
            </font>
        </font>
    </div>
</div>
{{-- サイト説明ここまで --}}

        <!-- copyright -->
    <div class="footer mt-5">
        <p class="text-center py-3 m-0"><small>©2020 Japanese Sake</small></p>
    </div>
    <!-- /copyright -->

</body>
</html>
