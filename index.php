<?php
    session_start();
    include_once('functions1.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fitfy Template">
    <meta name="keywords" content="Fitfy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitfy Fitness</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link type="text/css" rel="stylesheet" href="style1.css"/>
    <script src="jquery.min.js"></script>
<style type="text/css">

.triangle-right {
    width: 0;
    height: 0;
    border-top: 25px solid transparent;
    border-left: 50px solid #ffffff;
    border-bottom: 25px solid transparent;
    background-color:white;
}
.footercov {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 60%;
   background-color:transparent;
   color: white;
   
}
</style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <img src="img/FitLogo.png" alt="FITFY" width="100px" height="100spx">
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul id='ul'>
                        <li id='Home' class="active" value="index"><a href="./index.php">Kreu</a></li>
                        <li id='About' class="about-us"><a href="./about-us.php">Rreth Nesh</a></li>
                        <li id='Schedule' class="schedule"><a href="./schedule.php">Orari</a></li>
                        <li id='Portfolio' class="gallery"><a href="./gallery.php">Foto</a></li>
                       <!-- <li id='Blog' class="blog"><a href="./blog.php">Blog</a>
                            <ul class="dropdown">
                                <li id='Blog Details' class="blog-details"><a href="blog-details.php">Blog Details</a></li>
                            </ul>
                        </li>-->
                        <li id='Contacts' class="contact"><a href="./contact.php">Kontaktet</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="ti-search"></i>
                    
                </div>
<?php
    if(isset($_SESSION["login"])){
       echo '<div class="nav-right">
       <a class="ti-user" style="color:#ffffff" href="user_profile/userProfile.php"></a>
        </div>';       
    }
    elseif (isset($_SESSION["login2"])){
       echo '<div class="nav-right">
       <a class="ti-user" style="color:#ffffff" href="user_profile/coachProfile.php"></a>
        </div>'; 
        # code...
    }
?>
               <!--  <div class="nav-right search-switch">
                    <i class="ti-user"></i>
                </div> -->
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="img/slider-bg-1.jpg">
                <div class="container">
                    <div class="hero-text">
                        <h4>???Train like a beast and look like a beauty???</h4>
                        <h1>Make it <span>Shape</span></h1>
                        <?php
                            if(!isset($_SESSION["login"]) && !isset($_SESSION["login2"])){
                               echo '<a href="/user/logimi/html/logimi.html" class="primary-btn" style="margin-right: 20px">Join Us Now</a>
                        <a href="/coach/logimi/html/logimi.html" class="primary-btn">JOIN AS COACH</a>';       
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/slider-bg-2.jpg">
                <div class="container">
                    <div class="hero-text">
                        <h4>"Don't wish for it but Work for it"</h4>
                        <h1>Make it <span>Shape</span></h1>
                      <?php
                            if(!isset($_SESSION["login"]) && !isset($_SESSION["login2"])){
                               echo '<a href="/user/logimi/html/logimi.html" class="primary-btn" style="margin-right: 20px">Join Us Now</a>
                        <a href="/coach/logimi/html/logimi.html" class="primary-btn">JOIN AS COACH</a>';       
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/slider-bg-3.jpg">
                <div class="container">
                    <div class="hero-text">
                        <h4>"You are your only limit"</h4>
                        <h1>Make it <span>Shape</span></h1>
                        <?php
                            if(!isset($_SESSION["login"]) && !isset($_SESSION["login2"])){
                               echo '<a href="/user/logimi/html/logimi.html" class="primary-btn" style="margin-right: 20px">Join Us Now</a>
                        <a href="/coach/logimi/html/logimi.html" class="primary-btn">JOIN AS COACH</a>';       
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

   <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Programi</h2>
                        <p>Don???t know a move? Just shake it until you make it!</p>
                    </div>
                    <div class="services-items">
                        <div class="single-service-item">
                             <img src="img/icon-1.png" alt="">
                            <h5>Fitness</h5>
                            <p>Fitnesi, sporti i trupit t?? bukur, ka pushtuar bot??n.Transformon trupin tuaj dhe ju b??n t?? arrini form??n tuaj m?? t?? mir??. M??nyra unike p??r t?? djegur kalorit??.
                            <br>
                            </p>
                        </div>
                        <div class="single-service-item color-1">
                            <img src="img/icon-2.png" alt="">
                            <h5>Yoga</h5>
                            <p>M??nyra ideale p??r t?? qet??suar trupin dhe mendjen tuaj. Pas nje dite t?? lodhshme n?? pun??, gjith??ka q?? keni nevoj?? ??sht?? harmonia midis trupit dhe mendjes suaj.
                            </p>
                        </div>
                        <div class="single-service-item color-2">
                            <img src="img/icon-3.png" alt="">
                            <h5>Zumba</h5>
                            <p>N??se keni vendosur t?? digjni kalori duke u arg??tuar dhe socializuar,  zumba ??sht?? zgjedhja e duhur.   Zumba padyshim do t?? jet?? nj?? nga sportet tuaja t?? prefeuar.        
                            </p>
                        </div>
                        <div class="single-service-item color-3">
                            <img src="img/icon-4.png" alt="" style="height: 40px;">
                            <h5>3D Spininng</h5>
                            <p>T???i jap??sh bi??iklet??s nuk do t?? jet?? aq e v??shtir?? kur pamjet 3D projektohen p??rpara jush dhe trupi juaj do t?? arrij rezultate t?? sukseshme brenda pak muajsh.
                            <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="service-video set-bg" data-setbg="img/video.png">
                        <div class="play-btn">
                            <a href="img\video1.mp4"  class="service-video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section set-bg spad" data-setbg="img/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>The body achieves what the mind believes</h2>
                    <p>???The clock is ticking. Are you becoming the person you want to be????</p>
                    <!-- <a href="#" class="primary-btn">Join With Us</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->

    <!-- Class Section Begin-->
    <section class="class-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h2>Klast tona</h2>
                                <p>You choose!</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a href="schedule.php" class="primary-btn">Shiko oraret</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="class-item">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="class-1" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/1.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>FITNESS</h3>
                                                        <p>Transformon trupin tuaj dhe ju b??n t?? arrini form??n tuaj m?? t?? mir??. M??nyra unike p??r t?? djegur kalorit?? dhe p??r t?? krijuar muskuj. Sezoni i ver??s nuk mjafton, q?? ju t?? ekspozoheni n?? plazh, q?? ??sht?? motivi kryesor p??r shum?? njer??z q?? t?? shkojn?? n?? palest??r. Krejt e kund??rta, ne jemi k??tu q?? t?? krijojm?? nj?? zakon t?? p??rditsh??m, nj?? ritual dhe nj?? m??nyr?? jetese q?? ju ofron t?? gjith?? p??rfitimet p??r nj?? trup dhe form?? t?? p??rkryer. Paisjet dhe teknologjia e tyre vjen si frym?? bashk??kohore e 2017, t?? gjitha mund??suar p??r t?? siguruar m?? t?? mir??n p??r trupin tuaj.</p>
                                                        <a href="schedule.php" class="schedule-btn">Shiko oraret <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-2" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/2.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>SPINNING WITH 3D VIEW</h3>
                                                        <p>T???i jap??sh bi??iklet??s nuk do t?? jet?? aq e v??shtir?? kur pamjet 3D projektohen p??rpara jush. Atmosfera e krijuar do ju afroj?? me natyr??n dhe do t???ju jap?? energji e freski p??r t?? vazhduar m?? tej. Teknologjia e TechnoGym b??n q?? ju t?? digjni kalorit?? n?? m??nyr??n e duhur n?? pak koh??. P??rmir??son qarkullimin e gjakut dhe redukton problemet kardiovaskulare. Gjat?? klas??s s?? Spinning ju do nd??rtoni muskujt e k??mb??ve, por jo vet??m. N?? fund p??rfitimet jan?? t?? m??dha jo vet??m nga ana fizike por edhe ajo emocionale dhe mendore dhe ju do ndiheni m?? vital se n?? fillim.</p>
                                                        <a href="schedule.php" class="schedule-btn">Shiko oraret <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-3" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/3.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>YOGA</h3>
                                                        <p>Yoga ??sht?? nj?? disiplin?? q?? praktikon aktivitetin fizik, mendor dhe at?? shpirt??ror t?? nd??rthurura bashk??. Q??llimi i klas??s ??sht?? q?? t?? krijoj?? Forc??, Vet??besim, Harmoni n?? mendje dhe trupin tuaj. Ju do t?? keni mund??si t?? p??rmir??soni dhe rrisni fleksibilitetin dhe forc??n e muskujve; p??rmir??soni frym??marrjen dhe vitalitetin; rregullon dhe balancon metabolizmit; p??rmir??son qarkullimin e gjakut dhe performanc??n tuaj atletike. Sa m?? shum?? Yoga t?? b??ni aq m?? shum?? reduktohen dhimbjet e shpin??s, qaf??s dhe kok??s t?? cilat sjellin edhe n?? reduktimin e stresit.</p>
                                                        <a href="schedule.php" class="schedule-btn">Shiko oraret <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-4" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/4.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>BOOTCAMP GT</h3>
                                                        <p>Trajnimi q?? ju do ndiqni p??rgjat?? or??s s?? BootCamp GT sjell p??rfitime t?? jasht??zakonshme p??r trupin tuaj. Ushtrimet zhvillohen me nj?? intensitet t?? lart?? n?? grup dhe kan?? si synim r??nien n?? pesh?? dhe rritjen e fuqis?? trupore. Ju mund t?? p??rftoni vet??-motivim t?? lart?? dhe rritje t?? humorit. Tre shtyllat kryesore t?? BootCamp Group Training jan??: Lufton mplakjen, Lufton stresin dhe mund t?? digjni 500 deri 1000 kalori gjat?? nj?? ore!</p>
                                                        <a href="schedule.php" class="schedule-btn">Shiko oraret <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-5" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/5.png" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>ZUMBA</h3>
                                                        <p>N??se keni vendosur t?? digjni kalori duke u arg??tuar dhe socializuar, Zumba ??sht?? zgjedhja e duhur. Klasa mund??son ushtrime aerobike ritmike me nj?? intensitet t?? moderuar. Ajo ??sht?? nj?? nd??rthurje midis klas??s s?? fitnesit dhe k??rcimit. Ju do t?? mund t?? vini n?? aktivitet t?? gjith?? trupin duke rritur elasticitetin dhe rezistenc??n. M?? shum?? Zumba, m?? shum?? p??rmir??sim t?? gjendjes emocionale dhe vet??besimit.</p>
                                                        <a href="schedule.php" class="schedule-btn">Shiko oraret <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="class-6" role="tabpanel">
                                        <div class="single-class-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="img/class/6.jpg" alt="">
                                                </div>
                                                <div class="col-lg-5 offset-lg-1">
                                                    <div class="class-text">
                                                        <h3>HIT TRAINING</h3>
                                                        <p>Hit Training t?? sfidon t?? b??sh shum?? m?? tep??r se mendon se mundesh, por askush nuk do ju shtyj?? t?? b??ni di??ka p??r t?? cil??n trupi juaj nuk ??sht?? gati. Gjat?? seancave ju do t?? keni mund??si t?? b??ni ushtrime me intensitet t?? lart?? (15-45 min.) t?? cilat jan?? shum??dimensionale dhe variojn?? p??r t?? mos u b??r?? t?? m??rzitshme. Kjo klas?? do ju jap?? m?? shum?? motivim dhe ju mund t?? p??rdorni koh??n n?? m??nyr?? eficiente. Pun?? n?? grup dhe objektivi personal jan?? dy pikat kryesore ku mb??shtetet ky lloj trajnimi duke ju dh??n?? kurajo p??r t?? kap??rcyer barrierat. Fokusi kryesor i Hit Training ??sht?? Forc??, Fuqi, Koordinim, Shpejt??si, Shkatht??si, Balanc??, Sakt??si dhe Durim.</p>
                                                        <a href="schedule.php" class="schedule-btn">Shiko oraret <i
                                                                class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="class-author">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a data-toggle="tab" class="active" href="#class-1" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/1.jpg" alt="">
                                                <h5>Fitness</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-2" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/2.jpg" alt="" width="160" height="102.09">
                                                <h5>SPINNING WITH 3D VIEW</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-3" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/3.jpg" alt="" width="160" height="102.09">
                                                <h5>YOGA</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-4" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/4.jpg" alt="" width="160" height="102.09">
                                                <h5>BOOTCAMP GT</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-5" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/5.png" alt="" width="160" height="102.09">
                                                <h5>ZUMBA</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#class-6" role="tab">
                                            <div class="author-text">
                                                <img src="img/class/6.jpg" alt="" width="160" height="102.09">
                                                <h5>HIT TRAINING</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Class Section End -->
    <!-- Trainer Table Schedule Section Begin -->
    <section class="trainer-schedule set-bg spad" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <hr style="margin-top: -9rem;
                                        margin-bottom: 1rem;
                                        border: 0;
                                        border-top: 1px solid #f34e3a">
                        <h2 style="color:black">Orari sipas klasave</h2>
                        <p style="color:black">Get the best from us!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">
                        <div id="calendar_div">
                            <?php echo getCalender(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Table Schedule Section End -->

   <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Trajner??t tan??</h2>
                        <p>Our fitness experts can help you discover new training techniques.</p>
                    </div>
                    <a href="about-us.php" class="primary-btn">Shiko te gjithe <i class="ti-angle-double-right"></i></a>
                </div>
            </div>
            <div class="team-members">
                <div class="row m-0">
                    <div class="col-lg-4 order-lg-1 p-0">
                        <div class="member-pic first">
                            <?php
                                if(isset($_SESSION["photo10"])){
                                   echo '<img src="'.$_SESSION["photo10"].'" alt="">';       
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-2 p-0">
                        <div class="member-text">
                            <span style="font-style: oblique;font-size: 13px;">"Everything you want is on the other side of fear!"</span>
                            <?php
                                if(isset($_SESSION["name10"])){
                                   echo '<h5>'.$_SESSION["name10"].'</h5>';       
                                }
                            ?>
                            <?php
                                if(isset($_SESSION["description10"])){
                                   echo '<p>'.$_SESSION["description10"].'</p>';       
                                }
                            ?>
                            <div class="member-social">
                                <?php
                                    if(isset($_SESSION["instagram10"])){
                                       echo '<a href="'.$_SESSION["instagram10"].'"><i class="fa fa-instagram"></i></a>';       
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-3 p-0">
                        <div class="member-pic second">
                            <?php
                                if(isset($_SESSION["photo11"])){
                                   echo '<img src="'.$_SESSION["photo11"].'" alt="">';       
                                }
                            ?>
                            <!-- <img src="img/trainer/trajner_3.jpg" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-6 p-0">
                        <div class="member-text second">
                            <span style="font-style: oblique;font-size: 13px;">"One of the greatest moments in life is realizing that</span>
                            <span style="font-style: oblique;font-size: 13px;">two weeks ago, your body couldn't do what</span>
                            <span style="font-style: oblique;font-size: 13px;">it just did!"</span>
                            <?php
                                if(isset($_SESSION["name11"])){
                                   echo '<h5>'.$_SESSION["name11"].'</h5>';       
                                }
                            ?>
                            <?php
                                if(isset($_SESSION["description11"])){
                                   echo '<p>'.$_SESSION["description11"].'</p>';       
                                }
                            ?>
                            <div class="member-social">
                                <?php
                                    if(isset($_SESSION["instagram11"])){
                                       echo '<a href="'.$_SESSION["instagram11"].'"><i class="fa fa-instagram"></i></a>';       
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-5 p-0">
                        <div class="member-pic1 third">
                            <div class="triangle-right" style="position: absolute; margin-top: 200px; background: transparent; margin-left: -13px;"></div>

                            <?php
                                if(isset($_SESSION["photo12"])){
                                   echo '<img src="'.$_SESSION["photo12"].'" alt="">';       
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-4 p-0">
                        <div class="member-text third">
                            <span style="font-style: oblique;font-size: 13px;">"Off the couch, off the carbs"</span>
                            <?php
                                if(isset($_SESSION["name12"])){
                                   echo '<h5>'.$_SESSION["name12"].'</h5>';       
                                }
                            ?>
                            <!-- <h5>Arlind Selimaj</h5> -->
                            <?php
                                if(isset($_SESSION["description12"])){
                                   echo '<p>'.$_SESSION["description12"].'</p>';       
                                }
                            ?>
                            <div class="member-social">
                                <?php
                                    if(isset($_SESSION["instagram12"])){
                                       echo '<a href="'.$_SESSION["instagram12"].'"><i class="fa fa-instagram"></i></a>';       
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest News Section Begin -->
  <!--   <section class="latest-news-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest News</h2>
                        <p>A range of services adapted to your needs</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="latest-items">
                        <div class="latest-pic">
                            <img src="img/latest-1.jpg" alt="">
                        </div>
                        <div class="latest-text">
                            <div class="latest-tag">
                                <div class="tag-clock">
                                    <i class="fa fa-clock-o"></i>
                                    Dec 11, 2018
                                </div>
                                <div class="tag-comments">
                                    <i class="fa fa-comments-o"></i>
                                    6 Comments
                                </div>
                            </div>
                            <h5><a href="blog-details.html">The Greatist Team's Favorite Leggings With Pockets</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="latest-items">
                        <div class="latest-pic">
                            <img src="img/latest-2.jpg" alt="">
                        </div>
                        <div class="latest-text">
                            <div class="latest-tag">
                                <div class="tag-clock">
                                    <i class="fa fa-clock-o"></i>
                                    Dec 19, 2018
                                </div>
                                <div class="tag-comments">
                                    <i class="fa fa-comments-o"></i>
                                    6 Comments
                                </div>
                            </div>
                            <h5><a href="blog-details.html">Everything You Need to Know Before Your First Indoor Cycling Class</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="latest-items">
                        <div class="latest-pic">
                            <img src="img/latest-3.jpg" alt="">
                        </div>
                        <div class="latest-text">
                            <div class="latest-tag">
                                <div class="tag-clock">
                                    <i class="fa fa-clock-o"></i>
                                    Dec 23, 2018
                                </div>
                                <div class="tag-comments">
                                    <i class="fa fa-comments-o"></i>
                                    6 Comments
                                </div>
                            </div>
                            <h5><a href="blog-details.html">Run Your Best Race Ever with These 5 Tips for the Perfect Taper</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Latest News Section End -->

    <!-- Footer Section Begin -->

    <footer class="footer-section">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6">

                    <div class="map-location">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.5888017284037!2d19.811742915725354!3d41.31780820826798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDE5JzA0LjEiTiAxOcKwNDgnNTAuMSJF!5e0!3m2!1sen!2s!4v1497606026685" style="border:0;" allowfullscreen=""></iframe>

                        <div class="map-widget">

                            <i class="fa fa-map-marker"></i>

                            <div class="map-address">

                                <img src="img/map-location.jpg" alt="">

                                <ul class="map-text">

                                    <li><span>Adresa:</span> Qendra Olimpia,pran?? Post??s Nr.8,Tiran??</li>

                                    <li><span>Numri telefonit:</span>0692563038</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="footer-form set-bg" data-setbg="img/contact-form-bg.jpg">

                        <div class="row">

                            <div class="col-lg-10">

                                <div class="section-title">

                                    <h2>Ne jemi k??tu p??r ju.</h2>

                                    <p>Ju lutemi plot??soni form??n e m??poshtme dhe stafi jon?? do t'ju vi n?? ndihm??.</p>

                                </div>

                                <form action="slack_message.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name" id="name" name ="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Email" id="email" name ="email">
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" placeholder="Subject" id="subject" name ="subject">
                                            <textarea placeholder="Message" id="message" name ="message"></textarea>
                                            <button type="submit">Submit <i class="ti-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="register">

            <div class="container">

                <div class="row">
                    

                    <div class="col-lg-12">

                        <div class="copyright">

                        </div>
                        <div class="footercov">
                       <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank"> <img src="home.svg" style="height:50px;"></a>
                    </div>

                        <div class="footer-widget">

                        </div>

                        <div class="footer-links">

                            <a href="#"><i class="fa fa-facebook"></i></a>

                            <a href="#"><i class="fa fa-twitter"></i></a>

                            <a href="#"><i class="fa fa-instagram"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>
    <p id="ketu" style="display: none"></p>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <!-- <form id="searchForm" action="javascript:search();"> -->
            <form class="search-model-form" id="searchForm" action="javascript:search();">
               <div class="input-group">
                  <button id="go" class="btn btn-default" type="button" 
                          onclick="document.getElementById('searchForm').submit(); return false;">
                  </button>
                  <!-- <input type="text" id="searchItem" class="form-control" placeholder="Search here ..."> -->
                  <input type="text" id="searchItem" placeholder="Search here.....">
               </div>
               <ul id="result" style="padding-left: 64px;;margin: 17px;">
                        
                    </ul>
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready( function() { 
        $('#ketu').load('getCoachInfo.php'); 
    });
    function search() {
        debugger;
       var name = document.getElementById("searchForm").elements["searchItem"].value;
       var pattern = name.toLowerCase();
       var targetId = "";
     
       var divs = document.getElementsByClassName("nav-menu");
       for (var i = 0; i < divs.length; i++) {
          var para = divs[i].getElementsByTagName("li");
          for (var j = 0; j < para.length; j++) {
             var index = para[j].innerText.toLowerCase().indexOf(pattern);
              if (index != -1) {
                 targetId = para[j].id;
                 var clasa=para[j].className;
                 $("#result").empty();
                 // $("#result").append(para[j].id);
                 $("#result").append('<a href="https://fitfy.000webhostapp.com/'+clasa+'.php">'+targetId+'</a>');
                 // $("#ul").append(para[j]);
                 break;
              }
          }
       }  
    }
    </script>
</body>

</html>
