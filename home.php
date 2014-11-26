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

<!-- IMAGE DISPLAY -->

        <div class="col-md-4">
        <h4> User Image</h4>
        <br>
        
                <?php

                //$name=$_POST['search'];
                if($username != "" || $username != null)


                {
                    $res = mysql_query("SELECT * FROM userimage where username like $username ");     
                }
                else
                    $res = mysql_query("SELECT * FROM userimage");

                if(!$res)
                    echo mysql_error();

                $num_rows = mysql_num_rows($res);
                
                if($num_rows > 0)
                {

                    while($row = mysql_fetch_array($res)){

            ?>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <?php 
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="logo" class="img-responsive img-hover">';
                    ?>
                </a>
                <h3>
                    <a href="portfolio-item.html"><?php echo $row['username']; ?></a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <?php
                    }// Enf of while loop
                }// End of if($row[0] > 0) loop

                else
                {
            ?>
            <div class="col-md-4 img-portfolio">
                <h3>
                    <a href="portfolio-item.html"><?php echo "Oops!! No user found!!"; ?></a>
                </h3>
            </div>
            <?php
                }
            ?>
            </div>

            <!-- User Details with Edit Button -->

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Details</h4>
                    </div>
                    <div class="panel-body">
                        <form id="registerform" action="includes/register.php" method="post">
							<fieldset>
    							
    						</fieldset>
                        	<br/><button id="regbtn" class="btn btn-primary">Edit</button>
                        </form>
                        <br/>
                        <div id="regstatus"></div>
                    </div>
                </div>
            </div>
