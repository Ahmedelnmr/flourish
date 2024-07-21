
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="logo">
                    <h1>فلوريش</h1>
                    <p>مكانك للوصول الي اكبر استفادة ممكنة</p>
                </div>
            </div>
            <div class="footer-links">
                <div class="adress">
                    <h1>تواصل معنا</h1>
                    <h3>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/search/?api=1&query=كلية الحاسبات والمعلومات والذكاء الاصطناعي - جامعة سوهاج" target="_blank">الكوامل ش الجامعة الجديدة</a>
                    </h3>
                    <h3>
                        <a href="https://wa.me/201152494728" target="_blank">
                            <i class="fa-solid fa-phone"></i> 01152494728
                        </a>
                    </h3>
                    <h3>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:ahmedelnmet011@gmail.com">ahmedelnmet011@gmail.com</a>
                    </h3>
                    <h1>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </h1>
                </div>
                <div class="courses-links">
                    <h1>روابط سريعة</h1>
                    <a href="{{ route('track.index') }}">الدورات</a>
                    <a href="{{ route('diploma.index') }}">المسارات التعليمية</a>
                    <a href="{{ route('about.index') }}" >عن فلوريش</a>
                    <a href="{{ route('inst.index')}}">مدربينا</a>

                </div>
                @guest()
                <div class="tracks-links">
                    <h1>حسابك</h1>
                    <a href="{{route('login')}}">دوراتي</a>
                    <a href="{{route('login')}}">شهادتي</a>
                    <a href="{{route('login')}}">ضبط الحساب</a>
                    <a href={{route('login')}}> خروج</a>

                </div>
                @endguest
                @auth()
                    <div class="tracks-links">
                        <h1>حسابك</h1>
                        <a href="{{route('my_courses.index')}}">دوراتي</a>
                        <a href="{{route('cer.index')}}">شهادتي</a>
                        <a href="{{route('settings.index')}}">ضبط الحساب</a>
                        <a href={{route('logout')}}> خروج</a>

                    </div>
                @endauth
                <div style=" font-family: 'Tajawal', sans-serif;
            font-size: 30px;
            color: #ffffff;" >
                   <a href="{{route('home.index')}}"><span style=" transition: 0.3s;color: red  ;   text-decoration: none;

    margin-right: 20px;">موقع فلوريش </span></a>  تم برمجته بواسطة طلاب حاسبات وذكاء اصطناعي سوهاج
                </div>
            </div>
        </div>
    </div>
</footer>

<button class="top"><i class="fa-solid fa-angles-up"></i></button>
