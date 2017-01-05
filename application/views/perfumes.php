<!DOCTYPE html>
<html lang="en">

<?php include ( 'links.php' ); ?>
<title>Perfumes | VIP Networks</title>

<body>

    <header id="header">
        
        <?php include ( 'header.php' ); ?>

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                
                <?php include ( 'navbar-header.php' ); ?>
                
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
                                <li class="active"><a href=<?php echo site_url('main/p4') ?>>Perfumes</a></li>
                            </ul>
                        </li>
                        <li><a href=<?php echo site_url('main/contact') ?>>Contact Us</a></li> 
                        <li><a href=<?php echo site_url('main/signin') ?>>Sign In</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Buy Now!</h2>
            </div>

            <div class="row">
                <div class="container">
                    <div class="products-row">
                        <div class="col-md-3 product-grids"> 
                            <div class="agile-products">
                                <div class="new-tag"></div>
                                <a href="single.html"><img src="../../assets/dist/images/portfolio/full/p1.png" class="img-responsive" alt="img"></a>
                                <div class="agile-product-text">              
                                    <h5><a href="#">Beuche</a></h5> 
                                    <h6><del>$25</del> $20</h6> 
                                    <form action=<?php echo site_url('main/signin') ?> method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" /> 
                                        <input type="hidden" name="w3ls_item" value="Leather Jacket" /> 
                                        <input type="hidden" name="amount" value="20.00" /> 
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form> 
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-3 product-grids"> 
                            <div class="agile-products">
                                <div class="new-tag"></div>
                                <a href="single.html"><img src="../../assets/dist/images/portfolio/full/p1.png" class="img-responsive" alt="img"></a>
                                <div class="agile-product-text">              
                                    <h5><a href="#">Beuche</a></h5> 
                                    <h6><del>$25</del> $20</h6> 
                                    <form action=<?php echo site_url('main/signin') ?> method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" /> 
                                        <input type="hidden" name="w3ls_item" value="Leather Jacket" /> 
                                        <input type="hidden" name="amount" value="20.00" /> 
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form> 
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-3 product-grids"> 
                            <div class="agile-products">
                                <div class="new-tag"></div>
                                <a href="single.html"><img src="../../assets/dist/images/portfolio/full/p1.png" class="img-responsive" alt="img"></a>
                                <div class="agile-product-text">              
                                    <h5><a href="#">Beuche</a></h5> 
                                    <h6><del>$25</del> $20</h6> 
                                   <form action=<?php echo site_url('main/signin') ?> method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" /> 
                                        <input type="hidden" name="w3ls_item" value="Leather Jacket" /> 
                                        <input type="hidden" name="amount" value="20.00" /> 
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form> 
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-3 product-grids"> 
                            <div class="agile-products">
                                <div class="new-tag"></div>
                                <a href="single.html"><img src="../../assets/dist/images/portfolio/full/p1.png" class="img-responsive" alt="img"></a>
                                <div class="agile-product-text">              
                                    <h5><a href="#">Beuche</a></h5> 
                                    <h6><del>$25</del> $20</h6> 
                                    <form action=<?php echo site_url('main/signin') ?> method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" /> 
                                        <input type="hidden" name="w3ls_item" value="Leather Jacket" /> 
                                        <input type="hidden" name="amount" value="20.00" /> 
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form> 
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

    <?php include ( 'footer.php' ); ?>
</body>
</html>