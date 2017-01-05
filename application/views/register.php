<!DOCTYPE html>
<html lang="en">

<?php include ('links.php'); ?>
<title>Register | VIP Networks</title>

<body>

    <header id="header">
        
        <?php include ('header.php'); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <?php include ('navbar-header.php'); ?>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href=<?php echo site_url('main/index') ?>>Home</a></li>
                        <li><a href=<?php echo site_url('main/opportunities') ?>>Opportunities</a></li>
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
                        <li class="active"><a href=<?php echo site_url('main/signin') ?>>Sign In</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-page">
        <div class="container">
            <div class="register">
		  	  	<form> 
				 	<div class="register-top-grid">
						<h3>PERSONAL INFORMATION</h3>
					 	<div class="wow fadeInLeft" data-wow-delay="0.4s">
							<span>First Name<label>*</label></span>
							<input type="text" required> 
					 	</div>
					 	<div class="wow fadeInRight" data-wow-delay="0.4s">
							<span>Last Name<label>*</label></span>
							<input type="text" required> 
					 	</div>
					 	<div class="wow fadeInRight" data-wow-delay="0.4s">
						 	<span>Email Address<label>*</label></span>
						 	<input type="email" required> 
					 	</div>
                        <div class="wow fadeInRight" data-wow-delay="0.4s">
                            <span>Address<label>*</label></span>
                            <input type="text" required> 
                        </div>
					 	<div class="clearfix"> </div>
					   	<a class="news-letter" href="#">
						 	<input type="radio" name="checkbox"><i> </i>Member
                            <input type="radio" name="checkbox"><i> </i>Non-Member
					   	</a>
					</div>
				    <div class="register-bottom-grid">
						<h3>LOGIN INFORMATION</h3>
						<div class="wow fadeInLeft" data-wow-delay="0.4s">
							<span>Password<label>*</label></span>
							<input type="password" required>
						</div>
						<div class="wow fadeInRight" data-wow-delay="0.4s">
							<span>Confirm Password<label>*</label></span>
							<input type="password" required>
						</div>
					</div>
                    <div class="clearfix"> </div>
                    <div class="register-but">
                        <input type="submit" value="submit">
                        <div class="clearfix"> </div>
                    </div>
				</form>
		   </div>
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php include ('footer.php'); ?>
</body>
</html>