<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flourish</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/video.css') }}">

</head>

<body>
    <!-- header start -->
    @include('shared.nav')
    <!-- header end -->

    <!-- home start -->
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>HTML</h1>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- video start -->
    <section class="show-video">
        <div class="container">
            <div class="video-details">
                <h1>الدرس الحالي {{ $video->name }}</h1>
                <div class="show">
                    <div class="video" style="">
                            <iframe width="660" height="415" src="{{$video->path}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <a href="{{ route('view.index', $video->course_id) }}" class="btn-back"> العودة الى قائمة الدروس </a>
            </div>
        </div>
    </section>
    <!-- video end -->

    <!-- related courses start -->
    <section class="course-details" style="background-color: var(--sec-color);">
        <div class="container">
            <div class="course-content">
                <h4>درس الطلاب ايضا</h4>
                <div class="info">

                    @foreach($relatedCourses as $course)
                        <div class="course">
                            <a href="{{route('lesson.index',$course->id)}}"><img src="{{ asset($course->image) }}" alt=""></a>
                            <div class="course-name">
                                <a href="{{route('lesson.index',$course->id)}}">
                                    <h1>{{$course->name}}</h1>
                                </a>
                                <h3>{{$course->ins_name}}</h3>
                                <div class="course-rate">
                                    <p>تقييم الدرس</p>
                                    <h3>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- related courses end -->

    @include('shared.footer')

    <button class="top"><i class="fa-solid fa-angles-up"></i></button>




</body>

</html>
