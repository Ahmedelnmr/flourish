<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/cer.css')}}">
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
            <div class="elnemr">
                <div class="side">
                    @if(auth()->check() && auth()->user()->image_path)
                        <img src="{{ asset(auth()->user()->image_path) }}" alt="">
                    @else
                        <img src="{{asset('assets/imgs/nulll.png')}}" alt="صورة بديلة">
                    @endif
                    <h1>اسم المستخدم</h1>
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <a href="{{ route('settings.index')}}">ضبط الحساب</a>
                        <a href="{{ route('my_courses.index')}}">دوراتي</a>
                        <a href="{{ route('cer.index')}}">شهادتي</a>
                        <button type="submit" value="">تسجيل خروج</button>
                    </form>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="row">


                                    </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>معرف الشهادة</th>
                                                <th>اسم الكورس</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($cerfs as $cer)
                                            @if($cer->userid == Auth::id())
                                                <tr>
                                                    <td>{{ $cer->id }}</td>
                                                    <td><h3>{{ $cer->name }}</h3></td>
                                                    <td>
                                                        <ul class="action-list">
                                                            <li><a href="{{ asset($cer->image_path) }}" download class="btn btn-primary">تحميل</a></li>
                                                            <li><a href="{{ asset($cer->image_path) }}"  class="btn btn-secondary">عرض</a></li>
                                                            <li><a href="{{ route('mail.index',$cer->name) }}"  class="btn btn-danger">ارسال</a></li>
                                                            @if (session('success'))
                                                                <script>alert('{{ session('success') }}');</script>
                                                            @endif
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>



@include('shared.footer')

<button class="top"><i class="fa-solid fa-angles-up"></i></button>

<!-- <script src="js/main.js"></script> -->
<script src="{{asset('assets/js/video.js')}}"></script>
<script src="{{asset('assets/js/mobile header.js')}}"></script>
<script src="{{asset('assets/js/courses and tracks.js')}}"></script>
<!-- <script src="js/script2.js"></script> -->
</body>
</html>
