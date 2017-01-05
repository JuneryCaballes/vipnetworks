<!DOCTYPE html>
<html lang="en">

<?php include( 'links.php' ); ?>
<title>Testimonials | VIP Networks</title>

<body>

    <header id="header">
        
        <?php include( 'header.php' ); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <?php include( 'navbar-header.php' ); ?>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href=<?php echo site_url('main/index') ?>>Home</a></li>
                        <li><a href=<?php echo site_url('main/opportunities') ?>>Opportunities</a></li>
                        <li><a href=<?php echo site_url('main/about') ?>>About Us</a></li>
                        <li class="active"><a href=<?php echo site_url('main/testimonials') ?>>Testimonials</a></li>
                        <li class="dropdown">
                            <a href=<?php echo site_url('main/products') ?> class="dropdown-toggle">Products <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href=<?php echo site_url('main/p1') ?>>Beauty Soaps</a></li>
                                <li><a href=<?php echo site_url('main/p2') ?>>Coffees</a></li>
                                <li><a href=<?php echo site_url('main/p3') ?>>Food Supplements</a></li>
                                <li><a href=<?php echo site_url('main/p4') ?>>Perfumes</a></li>
                            </ul>
                        </li>
                        <li><a href=<?php echo site_url('main/contact') ?>>Contact Us</a></li> 
                        <li><a href=<?php echo site_url('main/signin') ?>>Sign In</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="get-started center wow fadeInDown">
                <h2>Ready to get started</h2>
                <p class="lead">Hi, there! We hope you are doing fine today. We're very glad to know that by checking this page you are considering the possibility of exploring that you and your family can create a contingency source of income while working in abroad or locally (here in the Philippines).</p>
                <div class="request">
                    <h4><a href="#">Request a free Quote</a></h4>
                </div>
            </div><!--/.get-started-->

            <div class="clients-area center wow fadeInDown">
                <h2>What our customer says</h2>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="../../assets/dist/images/client1.png" class="img-circle" alt="">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                        <a class="btn-slide animation animated-item-3" href="#">View Full Story</a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="../../assets/dist/images/client2.png" class="img-circle" alt="">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                        <a class="btn-slide animation animated-item-3" href="#">View Full Story</a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="../../assets/dist/images/client3.png" class="img-circle" alt="">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                        <h4><span>-John Doe /</span>  Director of corlate.com</h4>
                        <a class="btn-slide animation animated-item-3" href="#">View Full Story</a>
                    </div>
                </div>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Testimony</h2>
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
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Testimony</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php include ( 'footer.php' ); ?>
</body>
</html>