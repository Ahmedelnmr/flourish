<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/setting.css')}}">
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

<!-- setting start -->
<section class="setting">
    <div class="container">
        <div class="account-setting">
            <h1>تحديث بياناتك</h1>
            <form action="{{route('update.index')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="detail">
                    <input type="file" name="img" id="img">
                    <label for="img">اختر صورة<i class="fa-solid fa-image"></i></label>
                    @if(auth()->check() && auth()->user()->image_path)
                        <img src="{{ asset(auth()->user()->image_path) }}" alt="">
                    @else
                        <img src="{{asset('assets/imgs/nulll.png')}}" alt="صورة بديلة">
                    @endif

                </div>

                <div class="detail">
                    <h1>الاسم الاول  : </h1>
                    <input type="text" name="first_name" value="  {{$user->firstname}}">
                </div>
                <div class="detail">
                    <h1>الاسم الثاني : </h1>
                    <input type="text" name="last_name" value=" {{$user->lastname}}">
                </div>


                <div class="detail">
                    <h1>العمر : </h1>
                    <input type="text" name="age" value="{{$user->age}}">
                </div>

                <div class="detail">
                    <h1>العنوان : </h1>
                    <input type="text" name="address" value="{{$user->address}}">
                </div>



                <button type="submit" name="updateData">تحديث البيانات</button>
                <a href="{{route('account.index')}}">رجوع</a>

            </form>
            @if(session('message'))
                <script>alert('{{ session('message') }}');</script>
            @endif



        </div>
    </div>
</section>
<!-- setting start -->

@include('shared.footer')
<button class="top"><i class="fa-solid fa-angles-up"></i></button>

<!-- <script src="js/main.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/js/video.js')}}"></script>
<script src="{{asset('assets/js/mobile header.js')}}"></script>
<script src="{{asset('assets/js/courses and tracks.js')}}"></script>
<!-- <script src="js/script2.js"></script> -->
</body>
</html>
