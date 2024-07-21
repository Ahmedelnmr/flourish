<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/lesson.css') }}">
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
                <h1>{{ $course->name }}</h1>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- lesson start -->
    <section class="lesson">
        <div class="container">
            <div class="lesson-details">
                <div class="lesson-info">
                    <div class="details">
                        <h1>نبذة عن {{ $course->name }}</h1>
                        <p>
                            {{ $course->descraption }}
                        </p>
                        <img src="{{ asset($course->image) }}" alt="">
                    </div>
                    <div class="features">
                        <h1 style="font-size: 25px;" >تفاصيل الكورس</h1>
                        <div class="feature">
                            <h3 style="font-size: 18px;">المحاضر :</h3>
                            <h3 style="font-size: 18px;">{{ $course->ins_name }}</h3>
                        </div>
                        <div class="feature">
                            <h3 style="font-size: 18px;"> عدد الدروس :</h3>
                            <h3 style="font-size: 18px;">{{ $course->num_lec }}</h3>
                        </div>
                        <div class="feature">
                            <h3 style="font-size: 18px;"> مدة الكورس :</h3>
                            <h3 style="font-size: 18px;">{{ $course->duartion }}h</h3>
                        </div>
                        <div class="feature">
                            <h3 style="font-size: 18px;">المستوي :</h3>
                            <h3 style="font-size: 18px;">جميع المستويات</h3>
                        </div>
                        <div class="feature">
                            <h3 style="font-size: 18px;">اللغة :</h3>
                            <h3 style="font-size: 18px;">العربية</h3>
                        </div>
                        <form action="">
                            @auth
                                @if ($allCourses->isEmpty() || !$allCourses->contains('userId', Auth::user()->id))
                                    <a href="{{ route('enroll', $course->id) }}" id="enrollButton">انضم الآن</a>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var enrollButton = document.getElementById('enrollButton');
                                            if (enrollButton) {
                                                enrollButton.addEventListener('click', function(event) {
                                                    event.preventDefault(); // Prevent the default link behavior
                                                    var url = this.href; // Get the URL to send the request to

                                                    // Use Fetch API or AJAX to send the enrollment request
                                                    fetch(url, {
                                                        method: 'GET', // Use the appropriate method
                                                        headers: {
                                                            'X-Requested-With': 'XMLHttpRequest',
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token for security
                                                        }
                                                    }).then(response => {
                                                        if (response.ok) {
                                                            alert('تم التسجيل بنجاح في الدورة');
                                                            window.location.reload(); // Reload the page to update the course list or redirect as needed
                                                        } else {
                                                            alert('حدث خطأ ما، يرجى المحاولة مرة أخرى.');
                                                        }
                                                    }).catch(error => {
                                                        console.error('Error:', error);
                                                        alert('حدث خطأ ما، يرجى المحاولة مرة أخرى.');
                                                    });
                                                });
                                            }
                                        });
                                    </script>
                                @else
                                    @foreach ($allCourses as $data)
                                        @if ($data->status == 'joind' && $data->userId == Auth::user()->id)
                                            <a href="{{ route('view.index', $course->id) }}">اكمل الدراسه</a>
                                        @endif
                                    @endforeach
                                @endif
                            @else
                                <a href="{{ route('login') }}">انضم الآن</a>
                            @endauth

                        </form>



                    </div>
                </div>

                {{-- checking authentication --}}
                @guest
                    <div class="content">
                        <h1>دروس كورس HTML</h1>
                        <div class="videos">
                            <!-- video 1 -->
                            @foreach ($video as $vid)
                                <div class="v-detail">
                                    <h1 class="num">{{$vid->number}}</h1>

                                    <div class="name-time">
                                        <h1>{{ $vid->name }}</h1>
                                        <h1>{{ $vid->duration }}</h1>
                                    </div>


                                    <!-- continue with back end -->
                                </div>
                            @endforeach
                                @endguest

                                @auth
                                <div class="content">
                                    <h1>دروس كورس HTML</h1>
                                    <div class="videos">
                                        <!-- video 1 -->
                                        @foreach ($video as $vid)
                                            @if($isJoined)
                                                <a href="{{ route('video.showOne', ['courseId' => $vid->course_id, 'videoId' => $vid->id]) }}">
                                                    <div class="v-detail">
                                                        <h1 class="num">{{ $vid->number }}</h1>

                                                        <div class="name-time">
                                                            <h1>{{ $vid->name }}</h1>
                                                            <h1>{{ $vid->duration }}</h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            @else
                                                <div class="v-detail">
                                                    <h1 class="num">{{ $vid->number }}</h1>

                                                    <div class="name-time">
                                                        <h1>{{ $vid->name }}</h1>
                                                        <h1>{{ $vid->duration }}</h1>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endauth

                            </div>
                        </div>

    </section>
    <!-- lesson end -->
    @include('shared.footer')

    <button class="top"><i class="fa-solid fa-angles-up"></i></button>

    <!-- <script src="js/main.js"></script> -->
    <script src="{{ asset('assets/js/mobile header.js') }}"></script>
    <script src="{{ asset('assets/js/courses and tracks.js') }}"></script>
    <script></script>
    <!-- <script src="js/script2.js"></script> -->
</body>

</html>
