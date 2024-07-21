<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/team-style.css') }}">
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
    <!-- header end -->

    <!-- home start -->
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>فريق المطورين</h1>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- team start -->
    <section class="our-team" id="our-team">
        <div class="container">
            <div class="team-content">
                <h4>المدربين</h4>
                <h1>تعرف علي فريقنا التدريبي</h1>
                <div class="arrow" id="left"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="team">
                    <div class="member">
                        <img src="{{ asset('assets/imgs/tasnem1.jpg') }}" alt="">
                        <div class="team-detail">
                            <h1>تسنيم احمد</h1>
                            <p style="font-size: 25px;color: steelblue">Frontend Developer </p>
                            <p>Engineer tasneem ahmed is a software engineer with more than three years of experience in designing the front-end  of websites</p>
                            <div class="member-contact">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/tasneem-ahmed-53a3b51b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>





                    <div class="member">
                        <img src="{{ asset('assets/imgs/nemr.jpg') }}" alt="">
                        <div class="team-detail">
                            <h1>احمد السيد</h1>
                            <p style="font-size: 25px;color: steelblue">Backend Developer </p>
                            <p>Engineer, Ahmed Al-Sayed, is a software engineer with more than three years of experience and a developer </p>
                            <div class="member-contact">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>




                    <div class="member">
                        <img src="{{ asset('assets/imgs/youssef1.jpg') }}" alt="">
                        <div class="team-detail">
                            <h1>يوسف امام</h1>
                            <p style="font-size: 25px;color: steelblue">UI/UX Developer </p>
                            <p>Engineer, Youssef Emam, is a network engineer with a three years of experience  and a UI and UX designer</p>
                            <div class="member-contact">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>



                    <div class="member">
                        <img src="{{ asset('assets/imgs/shady.jpg') }}" alt="">
                        <div class="team-detail">
                            <h1>ابو الوفا محمد</h1>
                            <p style="font-size: 25px;color: steelblue">Network Engineer </p>
                            <p>Engineer Abu Al-Wafa Muhammad is a cyber security engineer for 3 years and ethical security</p>
                            <div class="member-contact">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/shady-abd-al-rahim-abo-alwafa-4b602a264/"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member">
                        <img src="{{ asset('assets/imgs/rana1.jpg') }}" alt="">
                        <div class="team-detail">
                            <h1>رنا يسري</h1>
                            <p style="font-size: 25px;color: steelblue">Frontend Developer </p>
                            <p>Engineer Rana Yousry is a software engineer with more than three years of experience in designing the front-end  of websites</p>
                            <div class="member-contact">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/rana-yousry-812bb1227?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>





                    <div class="member">
                        <img src="{{ asset('assets/imgs/eslam.jpg') }}" alt="">
                        <div class="team-detail">
                            <h1>اسلام عواد</h1>
                            <p style="font-size: 25px;color: steelblue">Back-end developer </p>
                            <p>Engineer Islam Awad, IT engineer, back-end programmer with extensive experience in the field of software engineering</p>
                            <div class="member-contact">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="arrow" id="right"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>
    <!-- team end -->

@include('shared.footer')

    <!-- <script src="js/main.js"></script> -->
    <script src="{{ asset('assets/js/mobile header.js') }}"></script>
    <script src="{{ asset('assets/js/team.js') }}"></script>
    <!-- <script src="js/script2.js"></script> -->
</body>
</html>
