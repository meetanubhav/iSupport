<?php

// $error=$_GET['error'];

include '../database_driver/db.php';
    $camp=mysqli_query($con,"select * from petition");
    // $campaign=mysqli_fetch_assoc($camp); 
    // session_start(); 
?>
<html>
<head>
    <title>iSupport</title>
    
    <!-- Bootstrap-4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    
    <!--custom css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <!-- icon pack -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../../index.php">iSupport</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
            </ul>
            <div class="my-2">

                <!-- <a name="" id="" class="btn btn-danger" href="../signout/signout.php" role="button">
                    <i class="fas fa-sign-out-alt text-white"></i> Sign out</a> -->
            </div>
        </div>
    </nav>
    <!-- body starts -->
    <div class="h-100">
        <hr class="m-0">

        <section class="p-3 p-lg-5 d-flex justify-content-center text-white">
            <div class="w-100">
                <h1 class="text-dark mb-5">
                    All Campaign
                </h1>
                <div class="row mb-5 container-fluid">
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow grow rounded bg-primary">
                                <p class="text-right">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <p class="text-right">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <p class="text-right">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <p class="text-right">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <p class="text-right">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <p class="text-right">Education</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php 
    // $campaign=mysqli_fetch_assoc($camp);
    while ($campaign = $camp->fetch_assoc()){
?>
        <hr class="m-0">
        <section class="p-3 p-lg-5 d-flex justify-content-center text-dark">
            <div class="">
                <h1 class="text-dark">Trending &nbsp;  </h1>
                <div class="row">
                    <div class="col-md-7">
                        <img class="d-block h-500 w-100" src="../../<?php echo $campaign['pic']; ?>" alt="img">
                    </div>
                    <div class="col-md-5">
                        <a href="../campshow.php?petition=<?php echo $campaign['petid']; ?>"><p class="lead">
                                <i class="fas fa-paper-plane text-danger"> Petition to</i> <i class="fas fa"><?php echo $campaign['petto']; ?></i>
                        </p>
                        <h3 class="mb-0 text-sublime text-dark"><?php echo $campaign['title'];$petid=$campaign['petid']; ?></h3>
                        <br></a>
                        <p class="lead text-sublime">
                           <?php echo $campaign['problem']; ?>
                        </p>
                          <?php
                                $support=mysqli_query($con," SELECT COUNT(*) AS totalsupport FROM supportlog WHERE petid='$petid'");
                                $scount=mysqli_fetch_assoc($support);  
                                ?>
                        <p class="lead">
                            <i class="fas fa-location-arrow" aria-hidden="true" id="s2i"></i>
                            India
                        </p>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $scount['totalsupport']; ?>%;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="mb-5" id="s2bs">
                            <button type="button" name="" id="" class="btn btn-primary btn-sm" btn-lg btn-block">
                          
                                <i class="fa fa-thumbs-up fa-sm"></i> <?php echo $scount['totalsupport']; ?> supporters
                                
                            </button>
                            <!-- <button type="button" name="" id="" class="btn btn-danger btn-sm" btn-lg btn-block">
                                <i class="fa fa-thumbs-down fa-sm"></i> 3,550 opposition
                            </button> -->
                            <button type="button" name="" id="" class="btn btn-dark btn-sm" btn-lg btn-block">
                                <i class="fa fa-tag fa-sm" aria-hidden="true"></i> tag
                            </button>
                    </div>
                </div>
            </div>
         </section>
    <?php } ?>
         <!-- footer -->
  <footer class="page-footer font-small blue pt-4 container-fluid bg-secondary text-white" id="about">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">Isupport</h5>
                    <p class="lead mb-5">We work on social cause</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Phone no: </h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>+917809597456</p>
                        </li>
                        <li>
                            <p>+917075497456</p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Mail us</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:skillasian@gmail.com?Subject=write%20to%20support" class="text-primary">skillasian@gmail.com</a>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <a href="#" class="text-dark"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">&copy; 2018 Copyright: isupport
        </div>
        <!-- Copyright -->

    </footer>
    </div>
    
    
</body>

</html>
<?php
if (isset($_GET['message']))
{
    $message=$_GET['message'];
    if($message=='"error"'){
    ?>
    <script>alert('You have already supported');</script>
    <?php }
    elseif ($message=='"thankyou"') {
        ?>
    <script>alert('Thankyou for supporting');</script>
    <?php
    }
}
?>