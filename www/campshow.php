<?php
    // session_start();
    // $petid=$_SESSION['petid'];
    $petid=$_GET['petition'];
include 'database_driver/db.php';
    $camp=mysqli_query($con,"select * from petition where petid = '$petid'");
    $campaign=mysqli_fetch_assoc($camp);  
?>
<html>
    <head>
    <title>iSupport</title>

    <!-- Bootstrap-4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!--custom css -->
    <link rel="stylesheet" href="../assets/css/style.css">

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
        <a class="navbar-brand" href="../index.php">iSupport</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <hr class="m-0">

        <section class="p-3 p-lg-5 d-flex justify-content-center">
            <div class="w-100">
                <h1 class="">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <!-- <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol> -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block h-50 w-50" id="campimage" src="../<?php echo $campaign['pic']; ?>" alt="<?php echo $campaign['title']; ?>">
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <img class="d-block h-500" src="..." alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block h-500" src="..." alt="Third slide">
                                    </div> -->
                                </div>
                                <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> -->
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Launch demo modal
                        </button> -->
                        <script>
                            function myFunction() {
                            location.replace("www/campshow.php")
                          
                            }
                            </script>
                        <div class="col-md-12 col-sm-12 p-5" id="directcamp">
                            <p class="lead">
                                <i class="fas fa-paper-plane text-danger"> Petition to</i> <i class="fas fa"><?php echo $campaign['petto']; ?></i>
                            </p>
                            <h3 class="mb-0 text-sublime"><?php echo $campaign['title']; ?></h3>
                            <br>
                            <p class="lead text-sublime">
                               <?php echo $campaign['problem']; ?>
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
                            <a name="" id="" class="btn btn-Danger btn-block text-white p-2 fixed-bottom" data-toggle="modal" data-target="#exampleModalCenter" role="button"><i class="fa fa-lock"> Sign this petition</i></a>
                        </div>
                    </div>
                    
                </h1>
            </div>
        </section>
        <!-- modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Support Campaign</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                               <div class="container">
                                   <form action="vote/support.php" method="POST">
                                     <div class="form-group">
                                       <input type="text"
                                         class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="First Name"> 
                                    </div>
                                    <div class="form-group">   
                                         <input type="text"
                                         class="form-control" name="lname" id="lname" aria-describedby="helpId" placeholder="Last Name">          
                                     </div>
                                    <div class="form-group">   
                                        <input type="email"
                                         class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="E-mail">                                             
                                     </div>         
                                      <input type="number" name="petid" id="phpvalv" value="<?php echo $campaign['petid']; ?>" readonly="" style="visibility: hidden;" />                            
                               </div>
                               
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                <button type="submit" name="submit" class="btn btn-danger btn-block"><i class="fa fa-lock"> Sign this petition</i></button>
                                </form>
                            </div>
                            </div>
                        </div>
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

</body>
</html>