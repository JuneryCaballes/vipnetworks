<!DOCTYPE html>
<html lang="en">

<?php include ('links.php'); ?>
<title>Home | VIP Networks</title>

<body class="homepage">

    <header id="header">

    <?php include ( 'header.php' ); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <?php include ('navbar-header.php') ?>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href=<?php echo site_url('main/index')?>>Home</a></li>
                        <li><a href=<?php echo site_url('main/opportunities')?>>Opportunities</a></li>
                        <li><a href=<?php echo site_url('main/about')?>>About Us</a></li>
                        <li><a href=<?php echo site_url('main/testimonials')?>>Testimonials</a></li>
                        <li class="dropdown">
                            <a href=<?php echo site_url('main/products')?> class="dropdown-toggle">Products <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href=<?php echo site_url('main/p1')?>>Beauty Soaps</a></li>
                                <li><a href=<?php echo site_url('main/p2')?>>Coffees</a></li>
                                <li><a href=<?php echo site_url('main/p3')?>>Food Supplements</a></li>
                                <li><a href=<?php echo site_url('main/p4')?>>Perfumes</a></li>
                            </ul>
                        </li>
                        <li><a href=<?php echo site_url('main/contact')?>>Contact Us</a></li> 
                        <li><a href=<?php echo site_url('main/signin')?>>Sign In</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(http://localhost/vipnetworks/assets/dist/images/slider/people-discussing.jpg)">
                    <div class="container rows">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <center><h1 class="animation animated-item-1">VIPNETWORKS.PH</h1></center>
                                    <center><h2 class="animation animated-item-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your partner in providing you business with minimal risk, small effort and maximized profits.</h2></center>
                                    <center><a class="btn-slide animation animated-item-3" href=<?php echo site_url('main/about')?>>Read More</a></center>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src=<?php echo base_url() . "/assets/dist/images/slider/img1.png"?> class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(http://localhost/vipnetworks/assets/dist/images/slider/house.jpg)">
                    <div class="container rows">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <center><h1 class="animation animated-item-1">SEARCHING FOR A WAY OUT ?</h1>
                                   <h2 class="animation animated-item-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Look no further! Start your business with us, check out our opportunities.</h2>
                                   <h2 class="animation animated-item-2">&nbsp;&nbsp;&nbsp;&nbsp;CNN reported that a new home based business is started every 11 seconds...</h2>
                                    <a class="btn-slide animation animated-item-3" href=<?php echo site_url('main/opportunities')?>>Read More</a>
                                    </center>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src=<?php echo base_url() . "/assets/dist/images/slider/img2.png"?> class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(http://localhost/vipnetworks/assets/dist/images/slider/mac.jpg)">
                    <div class="container rows">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <center>
                                    <h2 class="animation animated-item-2"><i>Fortune</i> Magazine considers our industry, network marketing "the best kept secret in the business world"</h2>
                                    <a class="btn-slide animation animated-item-3" href=<?php echo site_url('main/register')?>>Join Us Now !</a>
                                    </center>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src=<?php echo base_url() . "/assets/dist/images/slider/img3.png"?>  class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Why <b>VIPNETWORKS</b>.PH ?</h2>
                        <div class="panel-group" style="margin-top:25px;">
                            <div class="panel panel-default">
                                <div class="panel-body" style="background-color:white;">
                                    <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-user fa-5x" style="color:#7abcff"></span>
                                        </div>
                                        <div class="media-body">
                                             <p>VIP is founded by well established businessmen in different industries who want to provide great opportunities and tools to everyone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                               <div class="panel-body" style="background-color:white;">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-question-sign fa-5x" style="color:#7abcff"></span>
                                        </div>
                                        <div class="media-body">
                                             <p>Business is the /assets/distribution of products & services. Big Business is the efficient /assets/distribution of products & services. We teach and provide you the means to do so!</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                               <div class="panel-body" style="background-color:white;">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-gift fa-5x" style="color:#7abcff"></span>
                                        </div>
                                        <div class="media-body">
                                             <p>Our products cater to different needs & wants, ranging from nutrition,beauty, personal care, and educational tools that are applicable to various markets.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2><b>Latest News</b></h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  10 hours ago
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src=<?php echo base_url() . "/assets/dist/images/accordion1.png"?> >
                                        </div>
                                        <div class="media-body">
                                             <h4>VIP Introduces New RFID Standard for Healthcare Industry</h4>
                                             <p>VIP introdues the new RFID stan...</p>
                                             <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Yesterday at 10:45 AM
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src=<?php echo base_url() ."/assets/dist/images/client3.png"?>>
                                        </div>
                                        <div class="media-body">
                                             <h4>VIP Introduces New RFID Standard for Healthcare Industry</h4>
                                             <p>VIP introdues the new RFID stan...</p>
                                             <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  October 10, 2016 06:43 AM
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src=<?php echo base_url() . "/assets/dist/images/client2.png" ?>>
                                        </div>
                                        <div class="media-body">
                                             <h4>VIP Introduces New RFID Standard for Healthcare Industry</h4>
                                             <p>VIP introdues the new RFID stan...</p>
                                             <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  October 08, 2016 11:28 PM
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                             <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src=<?php echo base_url() . "/assets/dist/images/client1.png" ?>>
                                        </div>
                                        <div class="media-body">
                                             <h4>VIP Introduces New RFID Standard for Healthcare Industry</h4>
                                             <p>VIP introdues the new RFID stan...</p>
                                             <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Mission</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Vision</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Our Mission</h2>
                                                 <p>is to provide everyday individuals an opportunity to do business efficiently through network marketing.It is our aim to take the traditional norms of network marketing from being just a basic "door to door" type of strategy to one that can be efficiently ONLINE.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                            <div class="media-body">
                                                 <h2>Our Vision</h2>
                                                 <p>We see that as industries and trends change and improve everyday, in-order to keep up with the industry of network marketing in the modern world VIPNetworks.PH dedicates itself to providing our /assets/distributors a competitive edge by being able to choose from different linkes of products such as Health, Beauty, Personal Care, and Information.
                                                 </p>
                                                 <p>In today's modern generation, the internet has changed the business landscape. We see ourselves to be the leading Philippine based network marketing company with our improved strategies and online marketing platforms.</p>
                                            </div>
                                        </div>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src=<?php echo base_url() . "/assets/dist/images/client3.png" ?>>
                            </div>
                            <div class="media-body">
                                <p>I have three words for this product: Wow, amazing, unbelievable! Over..</p>
                                <span><strong>-Rexter Flores/</strong> Student of University of San Carlos</span><br>
                                <a class="btn-slide animation animated-item-3" href="#">View Full Story</a>
                            </div>
                         </div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img hidden class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src=<?php echo base_url() . "/assets/dist/images/partners/cebuana.png"?>></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src=<?php echo base_url() ."/assets/dist/images/partners/western_union.png"?> style="margin-left: 100%"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src=<?php echo base_url() ."/assets/dist/images/partners/m_lhuiller.png"?> style="margin-left: 200%"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>For more information just call us on the following hotline numbers <strong>(+63-922-5512-733(SUN) +63-905-1234-551(TM))</strong> or you can reach us via email <strong>vipnetworks@gmail.com</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

  	<?php include ('footer.php'); ?>
</body>
</html>