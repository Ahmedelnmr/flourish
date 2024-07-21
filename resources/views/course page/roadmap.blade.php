<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/rood.css')}}">
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
            <h1> دبلومة  {{$road->name}}  </h1>
        </div>
    </div>
</section>
<!-- home end -->

<!-- courses start -->
<section class="course-details">
    <div class="container">
        <div class="home">
            <h1 class="course-title">دبلومة {{$road->name}}

            </h1>
            <h1 class="course-title">------------

            </h1>
        </div>
        <div class="header">
            <p>الكورسات الخاصة بدبلومة {{$road->name}} </p>
            <div class="header-btn">
                <span>{{$roadmapCount}} دورات</span>
                <button>دورات</button>
            </div>
        </div>
        @php
        $courseNumber = 1;
    @endphp

    @foreach($roadmaps as $road)
        <div class="course">
            <span class="course-number">{{$courseNumber}}</span>
            <a href="{{route('lesson.index', $road->id)}}"><h2>{{$road->name}}</h2></a>
            <p>
                {{$road->descraption}}
            </p>
        </div>
        @php
            $courseNumber++;
        @endphp
    @endforeach

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
