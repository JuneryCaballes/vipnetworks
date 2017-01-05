<!DOCTYPE html>
<html lang="en">

<?php include ('links.php'); ?>
<title>Opportunities | VIP Networks</title>

<body>

    <header id="header">
        <?php include ('header.php'); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <?php include ('navbar-header.php'); ?>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href=<?php echo site_url('main/index') ?> >Home</a></li>
                        <li class="active"><a href=<?php echo site_url('main/opportunities') ?>>Opportunities</a></li>
                        <li><a href=<?php echo site_url('main/about') ?>>About Us</a></li>
                        <li><a href=<?php echo site_url('main/testimonials') ?>>Testimonials</a></li>
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

    <section id="about-us">
        <div class="container">
            <!-- about us slider -->
            <div id="about-slider">
                  <iframe width="100%" height="500" class="embed-responsive-item" src="https://www.youtube.com/embed/kz2ZTcA82eA"></iframe>
            </div><!--/#about-slider-->
            <button type="button" class="btn btn-info btn-lg" onclick="window.location.href='register'" >Join Us Now !</button>
        </div><!--/.container-->
    </section><!--/about-us-->

    <br><br><br><br><br><br>
	
    <?php include ('footer.php'); ?>
</body>
</html>