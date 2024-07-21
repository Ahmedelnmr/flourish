<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Flourish</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <!-- <script src="js/main.js"></script> -->
</head>
<body>
@include('shared.nav')
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>منصة فلوريش التعليمية</h1>
                <form method="get" action="{{route('search.index')}}">

                    <input type="text" name="keyword" placeholder="كلمة افتاحية" autocomplete="off">
                    <button type="submit" name="search" >بحث</button>
                </form>
            </div>
        </div>
    </section>




    <!-- home end -->

    <!-- about us start -->
<section class="about" id="about">
    <div class="container">
        <div class="about-us">
            <div class="img">
                <img src="{{ asset('assets/imgs/front-view-boy-holding-laptop-while-wearing-virtual-reality-headset.jpg ')}}"alt="">
            </div>
            <div class="about-details">
                <h4>نبذه عنا</h4>
                <h1>الاختيار الأول للتعليم عبر الإنترنت في أي مكان</h1>
                <p>                    <p>منصة فلوريش هي منصة تعليمية عبر الإنترنت تقدم دورات في مجالات البرمجة وتطوير البرمجيات. تشمل الدورات مواضيع متنوعة مثل لغات البرمجة، تطوير تطبيقات الويب والهواتف المحمولة، علوم البيانات، والذكاء الصناعي. تتيح فلوريش فرصة للمبتدئين والمحترفين لاكتساب المهارات اللازمة في مجال البرمجة بسهولة وفعالية.

                </p>
                <div class="nums">
                    <div class="num">
                        <h1 data-goal="123" class="count">0</h1>
                        <p>المواضيع المتاحة</p>
                    </div>
                    <div class="num">
                        <h1 data-goal="1234" class="count">0</h1>
                        <p>الدورات الاونلاين</p>
                    </div>
                    <div class="num">
                        <h1 data-goal="123" class="count">0</h1>
                        <p>مهارات المدربين</p>
                    </div>
                    <div class="num">
                        <h1 data-goal="1234" class="count">0</h1>
                        <p>الطلاب السعداء</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- about us end -->

    <!-- choose us start -->
    <section class="choose-us" id="choose" style="overflow: hidden;">
        <div class="container">
            <div class="choose-content">
                <div class="img">
                    <img src="{{ asset('assets/imgs/stock-vector-education-tree-of-knowledge-and-open-book-effective-modern-education-template-design-back-to-767491552.jpg') }}" alt="">
                </div>
                <div class="choose-details">
                    <h4>ليه تختارنا</h4>
                    <h1>لماذا يجب عليك بدأ التعلم معنا ؟</h1>
                    <p>"يجب عليك بدء التعلم معنا لأننا نقدم بيئة تعليمية داعمة ومتنوعة، حيث يمكنك اكتساب مهارات جديدة، وتطوير مهاراتك الحالية، واستكشاف مواضيع جديدة. نحن هنا لتقديم الدعم والتشجيع في رحلتك التعليمية، ونوفر لك أساليب وتقنيات تعلم فعّالة تساعدك على تحقيق أهدافك بنجاح."
                    </p>
                    <div class="features">
                        <div class="feature">
                            <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                            <div class="detail">
                                <h1>المدربين المهرة</h1>
                                <p>نخبة من افضل المدربين الكفء التي تساعدك في النجاح والمضي قدما في طريق التعلم </p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="icon"><i class="fa-solid fa-certificate"></i></div>
                            <div class="detail">
                                <h1>شهادة دولية</h1>
                                <p>الحصول علي شهادة معتمدة عقب اكمال الدورة </p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="icon"><i class="fa-solid fa-book-open-reader"></i></div>
                            <div class="detail">
                                <h1>دروس على الأنترنت</h1>
                                <p>يمكنك مشاهدة كل ما تريد من الدروس والمحاضرات المميزة عبر الانترنت عبر منصتنا </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose us end -->

    <!-- courses start -->
    <section class="our-courses" id="our-courses" style="overflow: hidden;">
        <div class="container">
            <div class="courses-content">
                <h4>اشهر الدورات</h4>
                <h1>اكتشف اشهر الدورات التي نقدمها لك</h1>
                <div class="arrow" id="left"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="courses">
                    @foreach($posts as $post)
                    <div class="course">
                        <h1>{{$post->name}}</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>{{$post->ins_name}}</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="{{route('lesson.index',$post->id)}}" >تفاصيل الدورة</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="arrow" id="right"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>
    <!-- courses end -->

    <!-- tracks start -->
    <section class="tracks" id="tracks" style="overflow: hidden;">
        <div class="container">
            <div class="tracks-content">
                <h4>اشهر المسارات</h4>
                <h1>تعلم اشهر المسارات المتاحة التي تؤهلك الي سوق العمل</h1>
                <div class="arrow" id="left"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="tracks-details">
                    @foreach($postss as $post)
                        <div class="track">
                            <img src="{{ asset($post->image)}} " alt="">

                            <a href="{{route('roadmap.index',$post->id)}}" >
                                <h3>{{$post->name}}</h3>
                            </a>
                        </div>
                    @endforeach


                </div>
                <div class="arrow" id="right"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>
    <!-- tracks end -->

    <!-- contct end -->
    <section class="contact" id="contact" style="overflow: hidden;">
        <div class="container">
            <div class="contact-us">
                <div class="location">
                    <div class="info">
                        <a href="https://www.google.com/maps/search/?api=1&query=كلية الحاسبات والمعلومات والذكاء الاصطناعي - جامعة سوهاج" >
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                           </a>
                        <div class="details">
                            <h1>موقعنا</h1>
                            <p>الكوامل ش الجامعة الجديدة</p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <h1>اتصل بنا</h1>
                            <p>01152494728</p>
                        </div>
                    </div>
                    <div class="info">
                        <a href="mailto:ahmedelnmet011@gmail.com">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        </a>
                        <div class="details">
                            <h1>ارسل بريد الكتروني</h1>
                            <p>ahmedelnmet011@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h4>تواصل معنا</h4>
                    <h1>ارسل لنا رسالتك</h1>
                    <form action="{{route('contact.index')}}" method="post">
                        @csrf
                        @method('post')
                        <input type="text" name="name" placeholder="اسمك" required>
                        <input type="email" name="email" placeholder="بريدك الالكتروني" required>
                        <input type="text" name="subject" placeholder="عنوان الموضوع" required>
                        <textarea name="messsage" placeholder="رسالتك" required></textarea >
                        <button type="submit" name="send">ارسال</button>
                    </form>
                    @if (session('success'))
                        <script>alert('{{ session('success') }}');</script>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- contact end -->
@include('shared.footer')
<script src="https://unpkg.com/scrollreveal"></script>
<script src="{{ asset('assets/js/scrollReval.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/mobile header.js') }}"></script>
<script src="{{ asset('assets/js/about.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

