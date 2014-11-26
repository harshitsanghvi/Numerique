    <!-- Navigation -->
    <?php include("includes/profileheader.php");?>

    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Profile</a>
                    </li>
                    <li>
                        <a href="services.html">Contacts</a>
                    </li>
                    <li>
                        <a href="contact.html">Followers</a>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Cards <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a href="portfolio-1-col.html">Business Card</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Personal card</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Business card 2</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">Business card 3</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

<!-- All the business cards -->

        <!--<div class="col-md-4">-->
        <div class="navigation-left" style="float:left">
<ul>
<li><a href="<?php echo $website_url; ?>">Business card 1</a></li>
<li><a href="<?php echo $website_url; ?>">Business card 2</a></li>
<li><a href="<?php echo $website_url; ?>">Business card 3</a></li>
<li><a href="<?php echo $website_url; ?>">Business card 4</a></li>
<li><a href="<?php echo $website_url; ?>">Business card 5</a></li>
<li><a href="<?php echo $website_url; ?>">Business card 6</a></li>

</ul>
</div>


           <!-- </div>-->

            <!-- Image of that business -->

            <div class="col-md-6 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Business Card Image</a>
                </h3>
                <p> Note about this specific business card</p>
            </div>
