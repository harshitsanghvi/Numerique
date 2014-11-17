<?php
    
    include_once("includes/DBConnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php include("includes/header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Search
                    <small>Results</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Search</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Search Result Row -->
        <div class="row"> 
            <?php

                $name=$_POST['search'];
                if($name != "" || $name != null)
                {
                    $res = mysql_query("SELECT * FROM userimage where username like '%$name%'");     
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
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

       
        <!-- Footer -->
        <?php include("includes/footer.php"); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
