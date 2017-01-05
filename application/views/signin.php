<!DOCTYPE html>
<html lang="en">

<?php include ('links.php'); ?>
<title>Sign In | VIP Networks</title>

<body>

    <header id="header">
        
        <?php include ('header.php'); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <?php include('navbar-header.php'); ?>
                
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
            <div class="login-page">
			    <!-- <div class="dreamcrub">
			   	 	
                	<div class="clearfix"></div>
			   	</div> -->
			   	<div class="account_grid">
			   		<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 		<h3>NEW CUSTOMERS</h3>
				 		<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 		<a class="acount-btn" href=<?php echo site_url('main/register') ?>>Create an Account</a>
			   		</div>
			   		<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
				  		<h3>REGISTERED CUSTOMERS</h3>
						<p>If you have an account with us, please log in.</p>
						<form method="post" action="../profile.html">
				  			<div>
								<span>Email Address<label>*</label></span>
								<input type="email" required> 
				  			</div>
				  			<div>
								<span>Password<label>*</label></span>
								<input type="password" required> 
				  			</div>
				  			<a class="forgot" href="#">Forgot Your Password?</a>
				  			<input type="submit" value="Login">
			    		</form>
			   		</div>	
			   		<div class="clearfix"> </div>
			 	</div>
		   </div>
        </div><!--/.container-->
    </section><!--/#contact-page-->

   <?php include ('footer.php'); ?>
</body>
</html>