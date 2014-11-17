    <!-- Navigation -->
    <?php include("includes/header.php"); ?>

    <!-- Header Carousel -->
    <?php include("includes/headerCarousel.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Numerique
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Sign In</h4>
                    </div>
                    <div class="panel-body">
                        <form id="loginform" action="includes/login.php" method="post">
							<fieldset>
    							<table cellpadding="3">
      								<tr><td width="150px"><strong>Username (Email)</strong></td><td><input type="text" name="username" id="username" required/></td></tr>
      								<tr><td><strong>Password</strong></td><td><input type="password" name="password" id="password" required/></td></tr>
    							</table>
    						</fieldset>
    						<br/><button id="loginbtn" class="btn btn-primary">Sign In</button>
    					</form>
                        <br/>
                        <div id="loginstatus"></div>
    					<br/>
    					<p>Forgot password? Click <a href="#">here!</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Register</h4>
                    </div>
                    <div class="panel-body">
                        <form id="registerform" action="includes/register.php" method="post">
							<fieldset>
    							<table cellpadding="3">
      								<tr><td width="150px"><strong>Username (Email)</strong></td><td><input type="text" name="regusername" id="regusername" required/></td></tr>
      								<tr><td><strong>Password</strong></td><td><input type="password" name="regpassword" id="regpassword" required/></td></tr>
      								<tr><td><strong>Confirm Password</strong></td><td><input type="password" name="confirmpassword" id="confirmpassword" required/></td></tr>
                                    <tr><td><strong>Captcha</strong></td><td><input type="text" name="captcha" id="captcha" required/></td></tr>
      							</table>
    						</fieldset>
                        	<br/><button id="regbtn" class="btn btn-primary">Register</button>
                        </form>
                        <br/>
                        <div id="regstatus"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Our Motivation</h4>
                    </div>
                    <div class="panel-body">
                        <p>Science and technology multiply around us. To an increasing extent they dictate the languages in which we speak and think. Either we use those languages, or we remain mute.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- Footer -->
        <?php include("includes/footer.php"); ?>

    </div>
    <!-- /.container -->

    <!-- All Scripts -->
    <script type="text/javascript" language="javascript" src="js/script.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Register -->
    <script src="js/register.js"></script>

    <!-- Login -->
    <script src="js/login.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
