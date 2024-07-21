<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/my courses.css')}}">
    <title>Flourish</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<!-- header start -->
@include('shared.nav')
<!-- header end -->

<!-- courses or tracks start -->
<section class="home-tracks">
    <div class="container">
        <h1>دوراتي</h1>
        <div class="my-tracks">
            @foreach($userCoursesDetails as $course)
            <div class="my-track">
                <img src="{{asset($course->image)}}" alt="">
                <h5>
                    تمت المشاهدة
                </h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $course->progress }}%;" aria-valuenow="{{ $course->progress }}" aria-valuemin="0" aria-valuemax="100">
                        {{ $course->progress }}%
                    </div>
                </div>

                <a href="{{route('lesson.index',$course->id)}}">{{$course->name}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- courses or tracks end -->

@include('shared.footer')

<button class="top"><i class="fa-solid fa-angles-up"></i></button>

<!-- <script src="js/main.js"></script> -->
<script src="{{asset('assets/js/video.js')}}"></script>
<script src="{{asset('assets/js/mobile header.js')}}"></script>
<script src="{{asset('assets/js/courses and tracks.js')}}"></script>

<!-- <script src="js/script2.js"></script> -->
</body>
</html>
