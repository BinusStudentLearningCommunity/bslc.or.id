<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Sections Stylesheet -->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/event.css">
    <link rel="stylesheet" href="assets/css/activity.css">
    <link rel="stylesheet" href="assets/css/visionmission.css">
    <link rel="stylesheet" href="assets/css/program.css">
    <link rel="stylesheet" href="assets/css/history.css">
    <link rel="stylesheet" href="assets/css/partner.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!-- External Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>BSLC | Binus Student Learning Community</title>
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar">

        <div class="icons">
            <div class="logo-container">
                <img src="./assets/navbar-assets/logo-bslc.png" id="logoDefault" alt="logo">
                <img src="./assets/navbar-assets/logo-bslc-scroll.png" id="logoScroll" alt="logo">

            </div>

            <div class="burger-icon">
                <img src="./assets/navbar-assets/hamburger-icon.svg" onclick="toggleMenu()">
            </div>
        </div>

        <div class="section-container">
            <div class="menu" id="menu">
                <a href="#" class="submenu">About Us</a>
                <a href="#" class="submenu">Events</a>
                <a href="#" class="submenu">E-Learning</a>
                <a href="#" class="submenu">E-Magazine</a>
                <a href="#" class="btn-join">Join Us</a>
            </div>

        </div>

    </nav>

    <!-- Carousel -->
    <section class="carousel">
        <div class="carousel-slider">   
            <div class="inslide fade">
                <img src="./assets/caro-assets/caro.png" style="width:100%">
            </div>
            <div class="inslide fade">
                <img src="./assets/caro-assets/randpic-1.png" style="width:100%">
            </div>
            <div class="inslide fade">
                <img src="./assets/caro-assets/randpic-2.png" style="width:100%">
            </div>
            <!-- <a class="prev" onclick="plusSlides(-1)">
                <img src="./assets/left.png" alt="">
            </a>
            <a class="next" onclick="plusSlides(1)">
                <img src="./assets/right.png" alt="">
            </a> -->
        </div>
        <br>
        <div class="dots">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </section>

    <!-- Our Product -->
    <section class="our-product">
        <div class="container">
            <h1>OUR PRODUCT</h1>
            <div class="box-product">
                <div class="box">
                    <img src="learning.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <a href="#"><button>Visit</button></a>
                </div>
                <div class="box">
                    <img src="magazine.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <a href="#"><button>Visit</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Events -->

    <section class="our-event">
        <div class="container">
            <h1>Our Events</h1>
            <img class="right" src="./assets/images/icons/rightArrow.svg" alt="">
            <img class="left" src="./assets/images/icons/leftArrow.svg" alt="">
            <div class="box">
                <div class="box-kiri">
                    <img src="./assets/images/imgEvent.png" alt="">
                </div>
                <div class="box-kanan">
                    <h2>Cloud Computing as The Foundation of Industry 4.0</h2>
                    <ul>
                        <li>
                            <i class="ri-map-pin-line"></i>
                            <p>Zoom Meeting</p>
                        </li>
                        <li>
                            <i class="ri-calendar-2-line"></i>
                            <p>Monday, 13th June 2022</p>
                        </li>
                        <li>
                            <i class="ri-time-line"></i>
                            <p>14.00WIB</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Activity -->
    <section class="our-activity">
        <div class="activity-container">
            <h1>OUR ACTIVITY</h1>           
            <br>
            <div class="activity left">
                <div class="activity-1 left">
                    <div class="title-and-logo">           
                        <h2>MENTORING</h2>
                        <img src="./assets/bi_people.png">
                        <div class="mentor">
                            <img src="./assets/mentor.png">
                        </div>
                        <div class="mentee">
                            <img src="./assets/mentee.png">
                        </div>          
                    </div>
                </div>
                
                <div class="activity-1 right">
                    <div class="explain">
                        <p>
                            Mentoring merupakan program kegiatan belajar mengajar antara <br>
                            mentor dan mentee dari BSLC yang dilakukan dalam grup kecil <br>
                            berisikan 5-10 mahasiswa. Mentoring BSLC bisa dianggap sebagai <br>
                            bimbel belajar, mentor yang akan mengajar adalah kakak tingkat yang <br> 
                            tentunya memiliki pengalaman mengenai materi kuliah semester awal <br>
                            yang akan diajarkan kepada mahasiswa adek kelas semester 1/2. <br>
                            Mentee juga bisa mendapatkan tips dari mentor saat mengikuti <br>
                            kegiatan mentoring. <br>
                        </p>  
                    </div> 

                    <div class="benefit">
                        <div class="benefit left">
                            <h4>Mentor Benefits</h4>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Soft Skill</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Networking</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>SAT Points</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Certificate</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Teaching Experience</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Exclusive Modules</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Access to BSLC's Events</h5>
                            </div>
                        </div> 

                        <div class="benefit right">
                            <h4>Mentee Benefits</h4>
                            <div class="check-text">
                                <img src="./assets/mentee-check.png">
                                <h5>Soft Skill</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentee-check.png">
                                <h5>Knowledge</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentee-check.png">
                                <h5>Exclusive Modules</h5>
                            </div>
                        </div>
                    </div>

                    <div class="join-button">            
                        <div class="join-button left">
                            <div class="join-button-mentor">
                                <a href="#" class="mentor-button">
                                   Join as Mentor
                                </a>
                                <h5>Open until July 16 2022</h5>
                            </div>                        
                        </div>

                        <div class="join-button right">
                            <div class="join-button-mentee">
                                <a href="#" class="mentee-button">
                                    Join as Mentee
                                </a>
                                <h5>Coming Soon</h5>
                            </div>                           
                        </div>
                    </div>
                </div>                       
            </div>

            <div class="activity right">
                <div class="activity-2 left">
                    <div class="title-and-logo">
                        <h2>NINDYA</h2>
                        <img src="./assets/nindya.png">
                        <div class="nindyas">
                            <img src="./assets/nindyas.png">
                        </div>       
                    </div>
                </div>

                <div class="activity-2 right">
                    <div class="explain">
                        <p>
                            NINDYA merupakan sebutan untuk pengurus BSLC yang bertugas <br>
                            menangani seluruh kegiatan BSLC, baik kegiatan mentoring, <br>
                            event-event BSLC seperti seminar, kebersamaan, hingga <br>
                            perekrutan NINDYA baru itu sendiri. Kata NINDYA sendiri diambil <br>
                            dari tingkatan tertinggi di pramuka. <br>
                        </p>  
                    </div> 

                    <div class="division">
                        <h4>Divisions</h4>
                        <div class="topdiv">
                            <img src="./assets/hc.png">
                            <img src="./assets/learning.png">
                        </div>
                        <div class="botdiv">
                            <img src="./assets/marketing.png">
                            <img src="./assets/it.png">
                        </div>
                    </div> 

                    <div class="benefit">
                        <div class="benefit">
                            <h4>Nindya Benefits</h4>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Soft Skill</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Knowledge</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>SAT Points</h5>
                            </div>
                            <div class="check-text">
                                <img src="./assets/mentor-check.png">
                                <h5>Certificate</h5>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="become-button">
                        <div class="become-button-nindya">
                            <a href="#" class="nindya-button">
                                Become a Nindya
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Our Vision & Mission -->
    <section class="visi-misi">
        <div class="container">
            <h1>OUR VISION & MISSION</h1>
            <hr color="#19A89D">
            <div class="vision">
                <img src="vector.png" alt="">
                <h2>Vision</h2>
                <p>BSLC menjadi komunitas belajar nasional pada tahun 2025 dan sebagai rekan belajar bagi binusian dalam melakukan pengembangan diri di organisasi maupun lingkungan sekitar.</p>
            </div>
            <div class="mission">
                <img src="vector_ek1.png" alt="">
                <h2>Mission</h2>
                <p> 1. Berkontribusi dalam bidang pendidikan di BINUS University dengan menciptakan suasana belajar yang menyenangkan;<br>
                    2. Menjadi wadah yang dapat membantu mahasiswa aktif BINUS University untuk mengembangkan potensi-potensi yang ada dalam diri baik softskill maupun hardskill;<br>
                    3. Bekerjasama dengan berbagai komunitas nasional dan internasional untuk mengenalkan BSLC di luar BINUS University;<br>
                    4. Mengikuti dan mengadakan kompetisi bidang pendidikan.
                </p>
            </div>
        </div>
    </section>

    <!-- OUR PROGRAM -->
    <section class="our-program">
        <div class="container">
            <h1>OUR PROGRAM</h1>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </section>

    <!-- Our History -->
    <section class="our-history">
        <div class="container">
            <h1>OUR HISTORY</h1>
            <hr>
            <p>BSLC pada awalnya bernamanya Binus Learning Community (BLC) yang bertujuan untuk membantu mahasiswa supaya semuanya bisa lulus dari binus, daripada harus ikut bimbel di luar yang mahal, maka dibentuklah program mentoring. Seiring dengan perkembangan Binus yang membuat Binus online learning pada tahun 2012 BLC berubah nama menjadi Binus Student Learning Community (BSLC).</p><br>
            <p>Nah di dalam BSLC ada yang namanya Nindya. Nindya itu merupakan pengurus dari BSLC. Nindya ini didirikan oleh MAngaRAJA agung, S.Psi. Awal mula Nindya karena kebutuhan mentoring semakin banyak maka kita butuh orang lebih banyak. Maka dari situ tercetuslah ide untuk membuat organisasi nindya.</p><br>
            <p>Pada tahun 2007 member BSLC mencapai lebih dari 100 mahasiswa, sedangkan Nindyanya tidak mencapai 20 mahasiswa. Sekarang pada tahun 2014 tercatat member BSLC lebih dari 2000 mahasiswa sedangkan Nindya-nya mencapai 67 mahasiswa.</p><br>
        </div>
    </section>


    <!-- OUR PARTNER -->
    <section class="our-partner">
        <div class="container">
            <h1>OUR PARTNER</h1>
            <img src="logo.png" alt="">
        </div>
    </section>

    <!-- Awal Footer -->
    <footer>
        <section>
            <div class="contact">
                <h3>Contact us</h3>
                <a href="https://www.youtube.com/c/BinusStudentLearningCommunity">
                    <img src="assets/images/akar-icons_youtube-fill.png" alt="youtube-bslc">
                </a>
                <a href="https://twitter.com/BSLC_BINUS">
                    <img src="assets/images/akar-icons_twitter-fill.png" alt="youtube-bslc">
                </a>
                <a href="https://id.linkedin.com/company/binus-student-learning-community">
                    <img src="assets/images/akar-icons_linkedin-fill.png" alt="youtube-bslc">
                </a>
                <a href="https://www.facebook.com/BinusStudentLearningCommunity/">
                    <img src="assets/images/ant-design_facebook-filled.png" alt="youtube-bslc">
                </a>
                <a href="https://www.instagram.com/bslc_binus/">
                    <img src="assets/images/ant-design_instagram-filled.png" alt="youtube-bslc">
                </a>
            </div>
            <div class="footer-logo">
                <img src="assets/images/Logo_BSLC_White-01 1.png" alt="footer-logo">
            </div>
        </section>
        <div class="credit">Copyright 2022 | BSLC IT Division </div>
    </footer>

    <!-- Navbar JavaScript -->
    <script src="./assets/js/navbar-script.js"></script>

    <!-- Carousel JavaScript -->
    <script src="./assets/js/caro.js"></script>
</body>

</html>