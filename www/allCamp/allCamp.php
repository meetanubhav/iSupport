<?php
include '../database_driver/db.php';
    $camp=mysqli_query($con,"select * from petition");
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

                <!-- <a name="" id="" class="btn btn-danger" href="../signout/signout.php" role="button">
                    <i class="fas fa-sign-out-alt text-white"></i> Sign out</a> -->
            </div>
        </div>
    </nav>
    <!-- body starts -->
    <div class="container-fluid h-100">
        <hr class="m-0">

        <section class="p-3 p-lg-5 d-flex justify-content-center text-white">
            <div class="w-100">
                <h1 class="text-dark mb-5">
                    All Campaign
                </h1>
                <div class="row mb-5 container-fluid">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow grow rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card grow">
                            <div class="card-body shadow rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <hr class="m-0">
        <section class="p-3 p-lg-5 d-flex justify-content-center text-dark">
            <div class="">
                <h1 class="text-dark">Trending &nbsp;  </h1>
                <div class="row">
                    <div class="col-md-7">
                        <img class="d-block h-500 w-100" src="../../<?php echo $campaign['pic']; ?>" alt="img">
                    </div>
                    <div class="col-md-5">
                        <p class="lead">
                            <i class="fas fa-paper-plane text-danger"> Petition to</i> <i class="fas fa"><?php echo $campaign['petto']; ?></i>
                        </p>
                        <h3 class="mb-0 text-sublime"><?php echo $campaign['title'];$petid=$campaign['petid']; ?></h3>
                        <br>
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
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $scount['totalsupport']; ?>%;" aria-valuenow="25" aria-valuemin="0"
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
    </div>
    
</body>

</html>