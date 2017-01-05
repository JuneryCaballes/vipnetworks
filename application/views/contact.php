<!DOCTYPE html>
<html lang="en">

<?php include ( 'links.php' ); ?>
<title>Contact Us | VIP Networks</title>

<body>

    <header id="header">
        
        <?php include( 'header.php' ); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
               
               <?php include ( 'navbar-header.php' ); ?>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href=<?php echo site_url( 'main/index' ); ?>>Home</a></li>
                        <li><a href=<?php echo site_url( 'main/opportunities' ); ?>>Opportunities</a></li>
                        <li><a href=<?php echo site_url( 'main/about' ); ?>>About Us</a></li>
                        <li><a href=<?php echo site_url( 'main/testimonials' ); ?>>Testimonials</a></li>
                        <li class="dropdown">
                            <a href=<?php echo site_url( 'main/products' ); ?> class="dropdown-toggle">Products <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href=<?php echo site_url( 'main/p1' ); ?>>Beauty Soaps</a></li>
                                <li><a href=<?php echo site_url( 'main/p2' ); ?>>Coffees</a></li>
                                <li><a href=<?php echo site_url( 'main/p3' ); ?>>Food Supplements</a></li>
                                <li><a href=<?php echo site_url( 'main/p4' ); ?>>Perfumes</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href=<?php echo site_url( 'main/contact' ); ?>>Contact Us</a></li> 
                        <li><a href=<?php echo site_url( 'main/signin' ); ?>>Sign In</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.181643046579!2d123.90399131566909!3d10.327343992627254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9993fd1750fbf%3A0x443fb22a447b2234!2sCebu+I.T.+Park!5e0!3m2!1sen!2ssg!4v1477035096536" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

  <?php include ('footer.php'); ?>

</body>
</html>