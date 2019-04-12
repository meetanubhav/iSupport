<?php
    session_start();
    $youthid=$_SESSION['youthid']; 
     if ($youthid > 0) {
    include '../database_driver/db.php';
    $_SESSION['youthid'] =$youthid;
    $user=mysqli_query($con,"select * from youthlog where youthid='$youthid'");
    $userdetails=mysqli_fetch_assoc($user);
   
    
?>
<html>

<head>
    <title>iSupport</title>

    <!-- Bootstrap-4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!--custom css -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
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
        <a class="navbar-brand" href="#">iSupport</a>
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
               
                <a name="" id="" class="btn btn-danger" href="../signout/signout.php" role="button">
                    <i class="fas fa-sign-out-alt text-white"></i> Sign out</a>
            </div>
        </div>
    </nav>
    <!-- body starts -->
    <div class="container-fluid">
        <hr class="m-0">
        <section class=" p-3 p-lg-5 d-flex justify-content-center" id="section1">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-4">
                        <img src="../../assets/image/dummy/pp.png" class="mx-auto d-block rounded-circle"
                            alt="profile image">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6">
                        <h1 class="text-left"><?php echo $userdetails['name']; ?></h1>
                        <p class="lead">
                            <i class="fa fa-map-marker" aria-hidden="true"> </i> Bhubaneswar,India
                        </p>
                        <span type="span" name="" id="" class="badge badge-primary fa-1x" btn-lg btn-block">
                            <i class="fa fa-flag" aria-hidden="true"></i>
                            Youth Leader
                        </span>
                        <br>
                        &nbsp;
                        <span type="span" name="" id="" class="badge badge-secondary">
                            <i class="fa fa-tag" aria-hidden="true"> Tags</i>
                        </span>
                        <span type="span" name="" id="" class="badge badge-secondary">
                            <i class="fa fa-tag" aria-hidden="true"> Tags</i>
                        </span>
                        <span type="span" name="" id="" class="badge badge-secondary">
                            <i class="fa fa-tag" aria-hidden="true"> Tags</i>
                        </span>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-2">
                        <a href="../Addcamp/AddCamp.php">
                            <button type="button" name="" id="" class="btn btn-primary btn-sm" btn-lg btn-block">
                                <i class="fa fa-plus" aria-hidden="true"> Add Campaign</i>
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <!-- Section 2 -->

        <hr class="m-0">
        <?php
            $support=mysqli_query($con," SELECT COUNT(*) AS totalcamps FROM petition WHERE youthid='$youthid'");
            $scount=mysqli_fetch_assoc($support);
            $sc=mysqli_query($con,"select * from petition where youthid='$youthid'");
            $camp1=mysqli_fetch_assoc($sc);
            $petid=$camp1['petid'];
    
            $peoplesupport=mysqli_query($con," SELECT COUNT(*) AS totalpsupport FROM supportlog WHERE petid='$petid'");
            $pcount=mysqli_fetch_assoc($peoplesupport);
         ?>
        <section class=" p-3 p-lg-5  justify-content-center" id="section2">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <div class="card grow">
                        <div class="card-body shadow p-3 rounded bg-primary">
                            <i class="fa fa-edit fa-4x" aria-hidden="true"></i>
                            <p class="text-right fa-2x"> <span class="text-white"><?php echo $scount['totalcamps']; ?></span> Campaign Created</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <div class="card grow">
                        <div class="card-body shadow p-3 rounded bg-primary">
                            <i class="fa fa-hand-peace fa-4x" aria-hidden="true"></i>
                            <p class="text-right fa-2x"> <span class="text-white"><?php echo $pcount['totalpsupport']; ?></span> People Supported</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>
<?php 
    // $campaign=mysqli_fetch_assoc($camp);
     $camp=mysqli_query($con,"select * from petition where youthid='$youthid'");
    while ($campaign = $camp->fetch_assoc()){
?>
        <hr class="m-0">
        <section class="p-3 p-lg-5 d-flex justify-content-center">
            <div class="w-100">
                <h1 class="">
                    <div class="row">
                        <!-- <div class="col-md-7"> -->
                            <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active"> -->
                                        <!-- <img class="d-block h-500" src="../../" alt="First slide"> -->
                                    <!-- </div> -->
                                    <!-- <div class="carousel-item">
                                        <img class="d-block h-500" src="" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block h-500" src="" alt="Third slide">
                                    </div> -->
                                <!-- </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div> -->
                        <!-- </div> -->
                         <div class="col-md-7">
                            <img class="d-block h-500 w-100 shadow" src="../../<?php echo $campaign['pic']; ?>" alt="<?php echo $campaign['title']; ?>">
                        </div>
                        <div class="col-md-5">
                            <p class="lead">
                                <i class="fas fa-paper-plane text-danger "> Petition to</i> <i class="fas fa "><?php echo $campaign['petto'];$pid=$campaign['petid']; $_SESSION['pid']=$pid; ?></i>
                                
                            </p>

                           
                            <h3 class="mb-0 text-sublime"><?php echo $campaign['title']; ?></h3>
                            <br>
                            <p class="lead text-sublime">
                                <?php echo $campaign['problem'];$petid=$campaign['petid']; ?> ?>
                            </p>
                            <p class="lead">
                                <i class="fas fa-location-arrow" aria-hidden="true" id="s2i"></i>
                               India
                            </p>
                             <?php
                                $support=mysqli_query($con," SELECT COUNT(*) AS totalsupport FROM supportlog WHERE petid='$petid'");
                                $scount=mysqli_fetch_assoc($support);  
                                ?>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $scount['totalsupport']; ?>%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mb-5" id="s2bs">
                                <button type="button" name="" id="" class="btn btn-primary btn-sm " btn-lg btn-block">
                                    <i class="fa fa-thumbs-up fa-sm"></i>  <?php echo $scount['totalsupport']; ?> supporters
                                </button>
                                <!-- <button type="button" name="" id="" class="btn btn-danger btn-sm disabled" btn-lg btn-block">
                                    <i class="fa fa-thumbs-down fa-sm"></i> 3,550 opposition
                                </button> -->
                                <button type="button" name="" id="" class="btn btn-dark btn-sm" btn-lg btn-block">
                                    <i class="fa fa-tag fa-sm" aria-hidden="true"></i> tag
                                </button>
                            </div>

                        </div>
                    </div>
                </h1>
            </div>
        </section>
    <?php }?>
    </div>

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
                            <a href="skillasian@gmail.com" class="text-primary">skillasian@gmail.com</a>
                        </li>
                    </ul>
                    <div class="social-icons">
                        <a href="#" class="text-primary"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" class="text-success"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" class="text-info"><i class="fab fa-twitter" aria-hidden="true"></i></a>
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
</body>

</html>
<?php 
}
    else {
     header('location: ../../index.php');
   }
?>