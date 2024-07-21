<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/courses-style.css') }}">

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
            <h1>دورات تعليمية</h1>
        </div>
    </div>
</section>
<!-- home end -->

<!-- courses start -->
<section class="tracks" id="tracks">
    <div class="container">
        <div class="tracks-content">
            <h4>اشهر الدورات</h4>
            <h1>اكتشف اشهر الدورات التي نقدمها لك</h1>
            <div class="tracks2-details">
                @foreach($tracks as $track)
                <div class="track">
                    <a href="{{ route('courses.index', $track->id) }}" ><img src="{{ asset($track->image) }}" alt=""></a>
                    <h3>{{$track->name}}</h3>

                </div>
                @endforeach


        </div>
            <div style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;Margin-top:30px">
                {{ $tracks->links() }}
            </div>



        </div>

    </div>

</section>



<!-- courses end -->

@include('shared.footer')


<!-- <script src="js/main.js"></script> -->
<script src="{{ asset('assets/js/mobile_header.js') }}"></script>
<script src="{{ asset('assets/js/courses_and_tracks.js') }}"></script>

<!-- <script src="js/script2.js"></script> -->
</body>
</html>
