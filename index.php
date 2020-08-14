<?php
include('admin/includes/init.php');
$users = User::find_by_role(1);
$services = Service::find_all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Annelore</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-awesome -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="admin/vendors/font-awesome/css/all.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/themes/default_theme.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="top">
    <!-- PreLoader -->
    <!-- <div id="preloader">
        <div class="spinner"></div>
    </div> -->
    <!-- Btn To Top --><i class="fa fa-arrow-up btn_top"></i>
    <!-- Button Sliding Left Bolck --><i class="fa fa-bars collaps"></i>
    <!-- Start Left Bolck Collapsing Section-->
    <div class="sidebar_left">
        <div class="title_theme">
            <!-- <h1>Z<span class="color">oo</span>m</h1> -->
            <p class="text-muted">Portfolio Annelore</p>
        </div>
        <div id="profile" class="mrg_top40">
            <div id="user_profile"> <img src="img/annelore.JPG" class="img_profile img-responsive center-block img-circle" alt="About Image">
                <h4>Annelore Maes</h4>
                <p class="color">Web Developer</p>
                <a href="docs/CV_Annelore_Maes.pdf" target="_blank"><button class="btn cv">Download CV</button></a>
            </div>
        </div>
        <!-- <div class="theme mrg_top60"> <i class="fa fa-paint-brush color"></i> <span class="h4">Thema</span>
            <ul class="list-unstyled list-inline">
                <li data-color="orange_theme.css"><i class="fa fa-check"></i> </li>
                <li data-color="blue_theme.css"><i class="fa fa-check"></i></li>
                <li data-color="red_theme.css"><i class="fa fa-check"></i></li>
                <li data-color="green_theme.css"><i class="fa fa-check"></i></li>
                <li class="check" data-color="default_theme.css"><i class="fa fa-check"></i></li>
            </ul>
        </div> -->
        <nav class="menu">
            <ul class="list-unstyled">
                <li class="actived" data-section="#top"><a href="#">Home</a></li>
                <li data-section="#about"><a href="#">Over</a></li>
                <li data-section="#services"><a href="#">Diensten</a></li>
                <li data-section="#portfolio"><a href="#">Portfolio</a></li>
                <li data-section="#skills"><a href="#">Vaardigheden</a></li>
                <!-- <li data-section="#blog"><a href="#">Blog</a></li>
                <li data-section="#teams"><a href="#">Teams</a></li> -->
            </ul>
        </nav>
    </div>
    <!-- End Left Bolck Collapsing Section-->
    <div class="container-fluid">
        <div class="row">
            <div id="header">
                <div id="overlay">
                    <div id="haeder_info">
                        <h1 class="text-uppercase">Welkom bij Digital Peanut</h1>
                        <p class="mrg_top20">Development en Software</p>
                        <button class="btn see_works mrg_top40">Wat doen wij?</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Start About Section-->
        <?php foreach($users as $user): ?>
        <?php $image = Image::find_by_id($user->image_id); ?>
        <div class="row">
            <div id="about" class="section">
                <div class="col-sm-5 col-md-5">
                    <div id="img_profile"> 
                        <img src="img/<?php echo $image->name; ?>" class="img-responsive img-circle" alt="About Image">
                        <h4 class="text-uppercase mrg_top20"><?php echo $user->first_name . " " . $user->last_name; ?></h4>
                        <p class="color"><?php echo $user->title; ?></p>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7">
                    <h3>Over mezelf !</h3>
                    <p class="text-muted mrg_top20"><?php echo $user->about; ?></p>
                    <button class="btn contact_us mrg_top20" data-toggle="modal" data-target="#contact_me">Contacteer mij</button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- End About Section-->
        <!-- Start Services Section-->
        <div class="row">
            <div id="services" class="section">
                <div class="title text-center text-uppercase">
                    <h2>Diensten</h2>
                </div>
                <div id="my_service" class="mrg_top60">
                    <!-- Single Service-->
                    <?php foreach($services as $service): ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="single_service">
                            <ul class="list-unstyled list-inline">
                                <li><i class="<?php echo $service->icon; ?>"></i></li>
                                <li>
                                    <h3><?php echo $service->name; ?></h3>
                                </li>
                            </ul>
                            <p><?php echo $service->about; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Services Section-->
        <!-- Start Portfolio Section-->
        <div class="row">
            <div id="portfolio" class="section">
                <div class="title text-center text-uppercase">
                    <h2>Mijn werken</h2>
                </div>
                <div id="my_works" class="mrg_top60">
                    <!-- Filter Works -->
                    <!-- <ul class="filter_work list-unstyled list-inline text-capitalize text-center">
                        <li class="active_filter" data-filter="all">All</li>
                        <li data-filter="1">web</li>
                        <li data-filter="2">Seo</li>
                        <li data-filter="3">internet</li>
                    </ul> -->
                    <div class="filtr-container">
                        <!-- Single Work-->
                        <div class="filtr-item col-sm-6 col-md-4" data-category="1">
                            <div class="single_work">
                                <div class="see_more">
                                    <h3>Landelijke Gilde Houthulst</h3>
                                    <p>Voor de landelijke Gilde Houthulst maakte ik deze website. Voor hen is het mogelijk om zelf activiteiten aan te maken en de inschrijvingen inclusief betalingen online te laten gebeuren.</p>
                                    <div class="more_info"> <a href="https://lghouthulst.be" target="_blank"><i class="fa fa-search"></i></a> </div>
                                </div> <img src="img/lghouthulst.jpg" alt="Landelijke Gilde"> </div>
                        </div>
                        <!-- Single Work-->
                        <div class="filtr-item col-sm-6 col-md-4" data-category="2">
                            <div class="single_work">
                                <div class="see_more">
                                    <h3>Geknipte viervoeter</h3>
                                    <p> De geknipte viervoeter is een honden- en katten trimsalon. </p>
                                    <div class="more_info"> <a href="https://degeknipteviervoeter.be" target="_blank"><i class="fa fa-search"></i></a> </div>
                                </div><img src="img/geknipteviervoeter.jpg" alt="De geknipte viervoeter"></div>
                        </div>
                        <!-- Single Work-->
                        <div class="filtr-item col-sm-6 col-md-4" data-category="3">
                            <div class="single_work">
                                <div class="see_more">
                                    <h3>Trouw uitnodiging</h3>
                                    <p> Een originele uitnodiging voor een trouw. </p>
                                    <div class="more_info">
                                        <a href="http://dimitri-annelore.be" target="_blank" rel="noopener noreferrer"><i class="fa fa-search"></i> </a></div>
                                </div><img src="img/trouw.jpg" alt="Trouw"></div>
                        </div>
                        <!-- Single Work-->
                        <!-- <div class="filtr-item col-sm-6 col-md-4" data-category="3">
                            <div class="single_work">
                                <div class="see_more">
                                    <h3>Project 4</h3>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                                    <div class="more_info"> <i class="fa fa-search"></i> <i class="fa fa-shopping-cart"></i> </div>
                                </div><img src="http://placehold.it/780x780" alt="Work Image"></div>
                        </div> -->
                        <!-- Single Work-->
                        <!-- <div class="filtr-item col-sm-6 col-md-4" data-category="2">
                            <div class="single_work">
                                <div class="see_more">
                                    <h3>Project 5</h3>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                                    <div class="more_info"> <i class="fa fa-search"></i> <i class="fa fa-shopping-cart"></i> </div>
                                </div><img src="http://placehold.it/780x780" alt="Work Image"></div>
                        </div> -->
                        <!-- Single Work-->
                        <!-- <div class="filtr-item col-sm-6 col-md-4" data-category="1">
                            <div class="single_work">
                                <div class="see_more">
                                    <h3>Project 6</h3>
                                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                                    <div class="more_info"> <i class="fa fa-search"></i> <i class="fa fa-shopping-cart"></i> </div>
                                </div><img src="http://placehold.it/780x780" alt="Work Image"></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Portfolio Section-->
        <!-- Start Skills Section-->
        <div class="row">
            <div id="skills" class="section">
                <div class="title text-center text-uppercase">
                    <h2>My Skills</h2>
                </div>
                <div id="my_skills" class="mrg_top60">
                    <!-- Single Skill -->
                    <div class="col-sm-6 col-md-6">
                        <div class="single_skill">
                            <p> html & css - 75% </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="75%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Skill -->
                    <div class="col-sm-6 col-md-6">
                        <div class="single_skill">
                            <p> Bootstrap - 75% </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="75%"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Skill -->
                    <div class="col-sm-6 col-md-6">
                        <div class="single_skill">
                            <p> php & mysql - 60% </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="60%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Skill -->
                    <div class="col-sm-6 col-md-6">
                        <div class="single_skill">
                            <p> Wordpress - 75% </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="75%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Skill -->
                    <div class="col-sm-6 col-md-6">
                        <div class="single_skill">
                            <p> Web Design - 70% </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="70%"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Skill -->
                    <!-- <div class="col-sm-6 col-md-6">
                        <div class="single_skill">
                            <p> app development - 92% </p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-percent="92%"> </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End Skills Section-->
        <!-- Start Blog Section-->
        <!-- <div class="row">
            <div id="blog" class="section">
                <div class="title text-center text-uppercase">
                    <h2>Latest News</h2>
                </div>
                <div id="my_topics" class="mrg_top60"> -->
        <!-- Single Topic -->
        <!--  <div class="col-sm-6 col-md-4">
                        <div class="single_topic">
                            <div class="img_topic"> <img src="http://placehold.it/780x780" alt="Blog Image"> </div>
                            <div class="topic">
                                <h3 class="title_top"><a href="#">Title Single Topic</a></h3>
                                <div class="topic_info">
                                    <div class="date pull-left"><i class="fa fa-calendar color"></i> may 20,2017</div>
                                    <div class="comment pull-right"><i class="fa fa-comment color"></i> comment : 40</div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="topic_text text-muted mrg_top20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... </p> <a href="#" class="pull-right read_more">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->
        <!-- Single Topic -->
        <!-- <div class="col-sm-6 col-md-4">
                        <div class="single_topic">
                            <div class="img_topic"> <img src="http://placehold.it/780x780" alt="Blog Image"> </div>
                            <div class="topic">
                                <h3 class="title_top"><a href="#">Title Single Topic</a></h3>
                                <div class="topic_info">
                                    <div class="date pull-left"><i class="fa fa-calendar color"></i> may 15,2017</div>
                                    <div class="comment pull-right"><i class="fa fa-comment color"></i> comment : 55</div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="topic_text text-muted mrg_top20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... </p> <a href="#" class="pull-right read_more">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->
        <!-- Single Topic -->
        <!-- <div class="col-sm-6 col-md-4">
                        <div class="single_topic">
                            <div class="img_topic"> <img src="http://placehold.it/780x780" alt="Blog Image"> </div>
                            <div class="topic">
                                <h3 class="title_top"><a href="#">Title Single Topic</a></h3>
                                <div class="topic_info">
                                    <div class="date pull-left"><i class="fa fa-calendar color"></i> may 10,2017</div>
                                    <div class="comment pull-right"><i class="fa fa-comment color"></i> comment : 25</div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="topic_text text-muted mrg_top20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... </p> <a href="#" class="pull-right read_more">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->
        <!-- Single Topic -->
        <!-- <div class="col-sm-6 col-md-4">
                        <div class="single_topic">
                            <div class="img_topic"> <img src="http://placehold.it/780x780" alt="Blog Image"> </div>
                            <div class="topic">
                                <h3 class="title_top"><a href="#">Title Single Topic</a></h3>
                                <div class="topic_info">
                                    <div class="date pull-left"><i class="fa fa-calendar color"></i> may 10,2017</div>
                                    <div class="comment pull-right"><i class="fa fa-comment color"></i> comment : 25</div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="topic_text text-muted mrg_top20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... </p> <a href="#" class="pull-right read_more">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->
        <!-- Single Topic -->
        <!-- <div class="col-sm-6 col-md-4">
                        <div class="single_topic">
                            <div class="img_topic"> <img src="http://placehold.it/780x780" alt="Blog Image"> </div>
                            <div class="topic">
                                <h3 class="title_top"><a href="#">Title Single Topic</a></h3>
                                <div class="topic_info">
                                    <div class="date pull-left"><i class="fa fa-calendar color"></i> may 10,2017</div>
                                    <div class="comment pull-right"><i class="fa fa-comment color"></i> comment : 25</div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="topic_text text-muted mrg_top20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... </p> <a href="#" class="pull-right read_more">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div> -->
        <!-- Single Topic -->
        <!-- <div class="col-sm-6 col-md-4">
                        <div class="single_topic">
                            <div class="img_topic"> <img src="http://placehold.it/780x780" alt="Blog Image"> </div>
                            <div class="topic">
                                <h3 class="title_top"><a href="#">Title Single Topic</a></h3>
                                <div class="topic_info">
                                    <div class="date pull-left"><i class="fa fa-calendar color"></i> may 10,2017</div>
                                    <div class="comment pull-right"><i class="fa fa-comment color"></i> comment : 25</div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="topic_text text-muted mrg_top20"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s... </p> <a href="#" class="pull-right read_more">Read More</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Blog Section-->
        <!-- Start Teams Section-->
        <!-- <div class="row">
            <div id="teams" class="section">
                <div class="title text-center text-uppercase">
                    <h2>Our Teams</h2>
                </div>
                <div id="my_teams" class="mrg_top60"> -->
        <!-- Single Team -->
        <!-- <div class="col-sm-4 col-md-4">
            <div class="single_team text-center"> <img src="http://placehold.it/130x130" class="img-circle center-block" alt="Team Image">
                <h3 class="text-uppercase text-muted">Jonathan Deo</h3>
                <p class="text-capitalize color">Web Designer</p>
                <div class="followed mrg_top20">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-facebook-square"></i>
                            <p>5K</p>
                        </li>
                        <li><i class="fa fa-twitter-square"></i>
                            <p>1.5K</p>
                        </li>
                        <li><i class="fa fa-instagram"></i>
                            <p>1K</p>
                        </li>
                    </ul>
                </div>
                <p class="mrg_top20 text-muted text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <button class="btn mrg_top20 resume">Download Resume</button>
            </div>
    </div> -->
        <!-- Single Team -->
        <!-- <div class="col-sm-4 col-md-4">
                        <div class="single_team text-center"> <img src="http://placehold.it/130x130" class="img-circle center-block" alt="Team Image">
                            <h3 class="text-uppercase text-muted">Anna Scoth</h3>
                            <p class="text-capitalize color">Marketing</p>
                            <div class="followed mrg_top20">
                                <ul class="list-unstyled list-inline">
                                    <li><i class="fa fa-facebook-square"></i>
                                        <p>8K</p>
                                    </li>
                                    <li><i class="fa fa-twitter-square"></i>
                                        <p>2.5K</p>
                                    </li>
                                    <li><i class="fa fa-instagram"></i>
                                        <p>2K</p>
                                    </li>
                                </ul>
                            </div>
                            <p class="mrg_top20 text-muted text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <button class="btn mrg_top20 resume">Download Resume</button>
                        </div>
                    </div> -->
        <!-- Single Team -->
        <!-- <div class="col-sm-4 col-md-4">
                        <div class="single_team text-center"> <img src="http://placehold.it/130x130" class="img-circle center-block" alt="Team Image">
                            <h3 class="text-uppercase text-muted">John Smith</h3>
                            <p class="text-capitalize color">Web Developer</p>
                            <div class="followed mrg_top20">
                                <ul class="list-unstyled list-inline">
                                    <li><i class="fa fa-facebook-square"></i>
                                        <p>15K</p>
                                    </li>
                                    <li><i class="fa fa-twitter-square"></i>
                                        <p>3.5K</p>
                                    </li>
                                    <li><i class="fa fa-instagram"></i>
                                        <p>1.2K</p>
                                    </li>
                                </ul>
                            </div>
                            <p class="mrg_top20 text-muted text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <button class="btn mrg_top20 resume">Download Resume</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Teams Section-->
        <!-- Start Contact Section-->
        <div class="row">
            <div class="modal fade" id="contact_me" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div id="support_info">
                            <!--<img src="img/annelore.JPG" class="center-block img-circle" alt="Contact Image">-->
                            <h3 class="text-uppercase">Annelore Maes</h3>
                            <p class="color">Web Developer</p>
                        </div>
                        <form id="contact_form" action="contact/contact.php" method="POST">
                            <div class="form-group mrg_top20">
                                <p class="text-danger"><sup>*</sup> Name</p>
                                <input type="text" class="form-control" placeholder="Username" name="naam" required> </div>
                            <div class="form-group mrg_top20">
                                <p class="text-danger"><sup>*</sup> Email Adrress</p>
                                <input type="email" class="form-control" placeholder="Email" name="email" required> </div>
                            <div class="form-group mrg_top20">
                                <p class="text-danger"><sup>*</sup> Your Message</p>
                                <textarea class="form-control" placeholder="Message" cols="30" rows="10" name="bericht"></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LfKjsIUAAAAAGcABhjpVlKUjA_35W3sc-hQMGtG" style="margin:auto;width:300px;"></div>
                            <div class="form-group mrg_top20">
                                <button class="btn send">Verzend Email</button>
                            </div>
                        </form> <i class="fa fa-times-circle-o close" data-dismiss="modal"></i> </div>
                </div>
            </div>
        </div>
        <!-- End Contact Section-->
    </div>
    <!-- Start Fotter Section -->
    <div class="container-fluid">
        <div class="row">
            <div id="fotter">
                <div class="container">
                    <p>© Copyright 2019 - <span class="color">Annelore Maes</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fotter Section -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Include jQuery & Filterizr -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Filterizr Plugin -->
    <script src="js/jquery.filterizr.min.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>