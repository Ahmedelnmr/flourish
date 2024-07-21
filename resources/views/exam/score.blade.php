<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flourish</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/score.css') }}">
</head>

<body>
    <div class="score">
        <h1>
            درجتك في الاختبار هي :
            <!-- درجة الطالب -->
            <span>{{ $degree->exam_score }}</span>
            من
            <!-- درجة الامتحان الكلي -->
            <span>10</span>
        </h1>
            @if($degree->exam_score >=5)
        <a href="{{ route('send.index',$degree->courseId) }}">الحصول علي الشهادة </a>
        @else
                <h3 style=" font-size: 22px;color:white;width:  fit-content; padding: 10px ;background-color: #de393da3;border-radius: 7px">عذراً، لم تجتز الامتحان</h3>
            <a href="{{ route('lesson.index',$degree->courseId) }}">الرجوع للدورة </a>

        @endif
    </div>
</body>

</html>
