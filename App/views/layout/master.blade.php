<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if( isset($_SESSION['flash_msg']))
        <script>
            let msg = "{{$_SESSION['flash_msg']['msg']}}";
        </script>
        @php 
            unset ($_SESSION['flash_msg']);
        @endphp
    @endif
    <script src="/js/app.js"></script>
    @yield('scriptsection')
    <title>My Blog</title>
</head>
<body>
    <aside id="submenu">
        <h2 class="my-3 text-center">메뉴</h2>
        @if( isset($_SESSION['user']))
            <a href="/logout" class="btn btn-block btn-outline-primary">로그아웃</a>
            <a href="/post" class="btn btn-block btn-outline-primary">포스팅</a>
        @else
            <a href="/login" class="btn btn-block btn-outline-primary">로그인</a>
        @endif
    </aside>

    <div id="toastList">
        
    </div>

    <section id="main">
        <div class="container">
            <header class="d-flex">
                <div class="logo">
                    <h1 onclick="location.href='/'">HyeN Page</h1>
                </div>
                <div class="icon-bar">
                   <span><i class="fas fa-search"></i></span>
                   <span id="btnSub"><i class="fas fa-bars"></i></span>
                </div>
            </header>
        </div>
    </section>

    @yieLd('maincontent')
    

    <footer>
        <div class="container">
            <p>Copyright 2019.박민우. All rights reserved</p>
        </div>
    </footer>
</body>
</html>