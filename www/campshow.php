<?php
    session_start();
	$petid=$_SESSION['petid'];
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
    <link rel="stylesheet" href="assets/css/style.css">

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
                        <div class="col-md-7 col-sm-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <!-- <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol> -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block h-500" src="<?php echo $campaign['pic']; ?>" alt="First slide">
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
                        <div class="col-md-5 col-sm-12" id="directcamp">
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
                                Area,city,country
                            </p>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mb-5" id="s2bs">
                                <button type="button" name="" id="" class="btn btn-primary btn-sm" btn-lg btn-block">
                                    <i class="fa fa-thumbs-up fa-sm"></i> 15,550 supporters
                                </button>
                                <button type="button" name="" id="" class="btn btn-danger btn-sm" btn-lg btn-block">
                                    <i class="fa fa-thumbs-down fa-sm"></i> 3,550 opposition
                                </button>
                                <button type="button" name="" id="" class="btn btn-dark btn-sm" btn-lg btn-block">
                                    <i class="fa fa-tag fa-sm" aria-hidden="true"></i> tag
                                </button>
                            </div>

                        </div>
                    </div>
                </h1>
            </div>
        </section>
</body>
</html>