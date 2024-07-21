<!-- header start -->
<link rel="stylesheet" href="{{asset('assets/css/nav.css')}}">
<header id="header">
    <div class="container">
        <div class="desktop">
            <h1 class="logo"><a href="{{ route('home.index') }}">FLOURISH</a></h1>

            <div class="links">
                <ul>
                    <li ><a href="{{ route('home.index') }}" >الرئيسية</a></li>
                    <li><a href="{{ route('about.index') }}">نبذه عنا</a></li>
                    <li><a href="{{ route('track.index') }}">الدورات</a></li>
                    <li><a href="{{ route('diploma.index') }}">المسارات التعليمية</a></li>
                    <li><a href="{{ route('inst.index')}}">فريق المطورين</a></li>
                    @auth
                        <li class="dd">
                            <a href="{{ route('account.index')}}">حسابي</a>
                            <div class="settings">
                                <a href="{{ route('settings.index')}}">ضبط الحساب</a>
                                <a href="{{ route('my_courses.index')}}">دوراتي</a>
                                <a href="{{ route('cer.index')}}">شهادتي</a>
                            </div>
                        </li>
                    @endauth

                </ul>
            </div>
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-success">تسجيل الخروج</button>

                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}">انضم الينا</a>

            @endguest
        </div>
        <!-- mobile header -->
        <div class="mobile">
            <div class="links">
                <button class="list">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <ul>
                    <li><a href="{{ route('home.index') }}" class="active">الرئيسية</a></li>
                    <li><a href="{{ route('about.index') }}">نبذه عنا</a></li>
                    <li><a href="{{ route('track.index') }}">الدورات</a></li>
                    <li><a href="{{ route('diploma.index') }}">المسارات التعليمية</a></li>
                    <li><a href="{{ route('inst.index')}}">فريق المطورين</a></li>
                    <li><a href="{{ route('account.index')}}">حسابي</a></li>
                </ul>
            </div>
            <h1 class="logo"><a href="{{ route('home.index') }}">فلوريش</a></h1>
            <a href="login & sign up/login.html">انضم الينا</a>
        </div>
    </div>
</header>
<!-- header end -->
