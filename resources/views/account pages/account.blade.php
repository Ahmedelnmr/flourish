<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/account.css')}}">
    <title>Flourish</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <!-- <script src="js/main.js"></script> -->
</head>
<body>
<!-- header start -->
@include('shared.nav')
<!-- header end -->

<!-- account start -->
<section class="account">
    <div class="container">
        <div class="account-details">
            <div class="side">
                @if(auth()->check() && auth()->user()->image_path)
                    <img src="{{ asset(auth()->user()->image_path) }}" alt="">
                @else
                    <img src="{{asset('assets/imgs/nulll.png')}}" alt="صورة بديلة">
                @endif
                <h1>اسم المستخدم</h1>
                <form method="post" action="{{route('logout')}}">
                    <a href="{{ route('settings.index')}}">ضبط الحساب</a>
                    <a href="{{ route('my_courses.index')}}">دوراتي</a>
                    <a href="{{ route('cer.index')}}">شهادتي</a>
                    <button type="submit" value="">تسجيل خروج</button>
                </form>
            </div>
            <div class="details">

                <div class="detail">
                    <h1>الاسم : </h1>
                    <h1>{{$user->firstname}}  {{$user->lastname}}</h1>
                </div>

                <div class="detail">
                    <h1>البريد الالكتروني : </h1>
                    <h1>{{$user->email}}</h1>
                </div>

                <div class="detail">
                    <h1>العمر : </h1>
                    <h1>{{$user->age}}</h1>
                </div>

                <div class="detail">
                    <h1>العنوان : </h1>
                    <h1>{{$user->address}}</h1>
                </div>

                <div class="detail">
                    <h1>تاريخ الانضمام : </h1>
                    <h1>{{$user->created_at}}</h1>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- account end -->

@include('shared.footer')

<button class="top"><i class="fa-solid fa-angles-up"></i></button>

<!-- <script src="js/main.js"></script> -->
<script src="{{asset('assets/js/video.js')}}"></script>
<script src="{{asset('assets/js/mobile header.js')}}"></script>
<script src="{{asset('assets/js/courses and tracks.js')}}"></script>
<!-- <script src="js/script2.js"></script> -->
</body>
</html>
