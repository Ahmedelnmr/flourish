<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about-style.css') }}">
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

    <!-- home start -->
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>من نحن؟</h1>
                <!-- <form method="get">
                    <div class="details">
                        <button type="button" id="button">الدورات <i class="fa-solid fa-caret-down"></i></button>
                        <div class="dropdown hide">
                            <a href="#">دورة 1</a>
                            <a href="#">دورة 2</a>
                            <a href="#">دورة 3</a>
                        </div>
                    </div>
                    <input type="text" name="keyword" placeholder="كلمة افتاحية" autocomplete="off">
                    <button type="submit" name="search" value="from database">بحث</button>
                </form> -->
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
    <section class="choose-us" id="choose">
        <div class="container">
            <div class="choose-content">
                <div class="img">
                    <img src="{{ asset('assets/imgs/stock-vector-education-tree-of-knowledge-and-open-book-effective-modern-education-template-design-back-to-767491552.jpg') }}" alt="">
                </div>
                <div class="choose-details">
                    <h4>ليه تختارنا</h4>
                    <h1>لماذا يجب عليك بدأ التعلم معنا ؟</h1>
                    <p>"يجب عليك بدء التعلم معنا لأننا نقدم بيئة تعليمية داعمة ومتنوعة، حيث يمكنك اكتساب مهارات جديدة، وتطوير مهاراتك الحالية، واستكشاف مواضيع جديدة. نحن هنا لتقديم الدعم والتشجيع في رحلتك التعليمية، ونوفر لك أساليب وتقنيات تعلم فعّالة تساعدك على تحقيق أهدافك بنجاح."

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

    @include('shared.footer')


    <!-- <script src="js/main.js"></script> -->
    <script src="{{ asset('assets/js/mobile header.js') }}"></script>
    <script src="{{ asset('assets/js/about.js') }}"></script>
</body>
</html>
