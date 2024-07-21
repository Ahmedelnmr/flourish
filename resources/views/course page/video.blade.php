<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/video.css') }}">
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

    <!-- home start -->
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>{{$course->name}}</h1>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- video start -->
    <section class="show-video">
        <div class="container">
            <div class="video-details">
                <div class="show">
                    <div class="v-list">
                        <h1>قائمة الدروس</h1>
                        <form class="v-links">
                            @forelse ($videos as $video)
                                {{-- <button class="v-background video-button" data-src="{{ asset($video->path) }}"
                                    data-name="{{ $video->name }}" type="button">{{ $video->name }}</button> --}}
                                <a href="{{ route('video.showOne', [$video->course_id, $video->id]) }}"
                                    class="mt-1 v-background"
                                    style="text-align: center;padding: 10px 0; margin: 5px 0">{{ $video->name }}</a>
                            @empty
                                <h3>empty</h3>
                            @endforelse
                        </form>
                    </div>
                    <div class="video" style="">
                        <iframe width="660" height="415" src="https://www.youtube.com/embed/6QAELgirvjs?list=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji " frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                {{-- <script>
                    const videoButtons = document.querySelectorAll('.video-button');
                    const videoPlayer = document.getElementById('video-player');
                    let previousVideo = null;

                    videoButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            const videoSource = button.getAttribute('data-src');
                            const videoName = button.getAttribute('data-name');

                            videoPlayer.src = videoSource;

                            const url = window.location.href.split('?')[0] + '?video=' + encodeURIComponent(videoName);
                            history.pushState({
                                name: videoName,
                                src: videoSource
                            }, null, url);

                            videoPlayer.play();
                            previousVideo = {
                                name: videoName,
                                src: videoSource
                            };
                        });
                    });

                    window.addEventListener('popstate', (event) => {
                        if (event.state && event.state.name && event.state.src) {
                            videoPlayer.src = event.state.src;
                            videoPlayer.play();
                            previousVideo = {
                                name: event.state.name,
                                src: event.state.src
                            };
                        }
                    });
                </script> --}}





                <!-- وضع السكريبت هنا -->



                <div class="exam">

                    @foreach ($myCourses as $data)
                        @if ($course->num_lec == $count && $data->exam_status != 'done')
                            <h1>
                                يمكن بدأ الاختبار بعد الانتهاء من مشاهدة الفيديوهات
                            </h1>
                            <a href="{{ route('exam.show', [$course->id, 1]) }}">بدء الاختبار</a>
                        @elseif ($data->exam_status == 'done')
                            <div class="div" style="text-align: center;width: 100%;">
                                <h1 style="color: rgb(62, 197, 62)">
                                    لقد قمت بالامتحان من قبل نشكرك على الدراسة معنا
                                </h1>
                            </div>
                        @else
                            <h1>
                                يمكن بدأ الاختبار بعد الانتهاء من مشاهدة الفيديوهات
                            </h1>
                        @endif
                    @endforeach

                </div>
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



    <!-- <script src="js/main.js"></script> -->
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/mobile header.js') }}"></script>
    <script src="{{ asset('assets/js/courses and tracks.js') }}"></script>
    <!-- <script src="js/script2.js"></script> -->
    {{--    <script> --}}
    {{--        const videoButtons = document.querySelectorAll('.video-button'); --}}
    {{--        const videoPlayer = document.getElementById('video-player'); --}}
    {{--    --}}
    {{--        // استرجاع معلومات الفيديو السابق إذا كانت متوفرة --}}
    {{--        let previousVideo = JSON.parse(sessionStorage.getItem('previousVideo')); --}}
    {{--    --}}
    {{--        videoButtons.forEach(button => { --}}
    {{--            button.addEventListener('click', () => { --}}
    {{--                const videoSource = button.getAttribute('data-src'); --}}
    {{--                const videoName = button.getAttribute('data-name'); --}}
    {{--    --}}
    {{--                // تحديث مصدر الفيديو في مشغل الفيديو --}}
    {{--                videoPlayer.src = videoSource; --}}
    {{--    --}}
    {{--                // تحديث عنوان الصفحة في شريط العنوان --}}
    {{--                const url = window.location.href.split('?')[0] + '?video=' + encodeURIComponent(videoName); --}}
    {{--                history.pushState(null, null, url); --}}
    {{--    --}}
    {{--                // تشغيل الفيديو --}}
    {{--                videoPlayer.play(); --}}
    {{--    --}}
    {{--                // حفظ معلومات الفيديو الحالي كفيديو سابق --}}
    {{--                previousVideo = { name: videoName, src: videoSource }; --}}
    {{--                sessionStorage.setItem('previousVideo', JSON.stringify(previousVideo)); --}}
    {{--            }); --}}
    {{--        }); --}}
    {{--    --}}
    {{--        // الرجوع إلى الفيديو السابق عند النقر على زر الرجوع --}}
    {{--        document.getElementById('back-button').addEventListener('click', () => { --}}
    {{--            if (previousVideo !== null) { --}}
    {{--                // تحديث مصدر الفيديو في مشغل الفيديو --}}
    {{--                videoPlayer.src = previousVideo.src; --}}
    {{--                videoPlayer.play(); --}}
    {{--    --}}
    {{--                // تحديث عنوان الصفحة --}}
    {{--                const url = window.location.href.split('?')[0] + '?video=' + encodeURIComponent(previousVideo.name); --}}
    {{--                history.pushState(null, null, url); --}}
    {{--            } --}}
    {{--        }); --}}
    {{--    </script> --}}



</body>

</html>
