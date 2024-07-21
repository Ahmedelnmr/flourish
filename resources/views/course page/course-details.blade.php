<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/course-details.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Flourish</title>
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

<!-- home start -->
<section class="landing" id="landing">
    <div class="container">
        <div class="home">
            <h1>دورة {{$track->name}}</h1>
        </div>
    </div>
</section>
<!-- home end -->

<!-- courses start -->
<section class="course-details">
    <div class="container">
        <div class="course-content">
            <h4>{{$track->name}}</h4>
            <div class="info">
                @foreach($courses as $course)
                <div class="course">
                    <a href="{{route('lesson.index',$course->id)}}">   <img src="{{asset($course->image)}}" alt=""></a>
                    <div class="course-name">
                        <h1> <a href="{{route('lesson.index',$course->id)}}">{{$course->name}}</a></h1>
                        <h3>{{$course->ins_name}}</h3>
                        {{-- <div class="course-rate">
                            <p>تقييم الدرس</p>
                            <h3>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </h3>
                        </div> --}}
                    </div>
                </div>
                @endforeach

            </div>
            <div style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;Margin-top:30px">
                {{ $courses->links() }}
            </div>

        </div>
    </div>
</section>
<!-- courses end -->

@include('shared.footer')
<button class="top"><i class="fa-solid fa-angles-up"></i></button>

<!-- <script src="js/main.js"></script> -->
<script src="{{asset('assets/js/mobile header.js')}}"></script>
<script src="{{asset('assets/js/courses and tracks.js')}}"></script>
<!-- <script src="js/script2.js"></script> -->
</body>
</html>
