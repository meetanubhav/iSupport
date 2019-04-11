<html>
     <?php 
                        include 'www/database_driver/db.php';
                         $camp=mysqli_query($con,"select * from petition");
                        $campaign=mysqli_fetch_assoc($camp); 
                        session_start();
                        ?>

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
        <a class="navbar-brand" href="index.php">iSupport</a>
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
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li> -->
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            <div class="my-2">
                <a name="" id="" class="btn btn-success" href="#modelId" role="button" data-toggle="modal"
                    data-target="#modelId">Login</a>
            </div>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="login">
                        <div class="modal-header bg-primary text-light">
                            <h5 class="modal-title text-center">Welcome Youth Leader
                                <i class="fa fa-flag" aria-hidden="true"></i></h5>
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form method="POST" action="www/login/logincheck.php">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="e-mail"
                                            aria-describedby="helpId" required="required">
                                        <label for="password">Password</label>
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Password"
                                            aria-describedby="helpId" required="required">
                                        <small id="helpId" class="text-muted">**Only the youth leaders can sign-in to
                                            raise their
                                            voices</small>
                                    </div>
                               
                                 <label>Not a Youth Leader? </label> <a class="link" href="#register" id="redg" data-target="#register" role="button" data-toggle="modal" data-dismiss="modal">Create an account</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" placeholder="Login" name="login" class="btn btn-success"> Login</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Register -->

             <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="login">
                        <div class="modal-header bg-primary text-light">
                            <h5 class="modal-title text-center">Welcome Youth Leader
                                <i class="fa fa-flag" aria-hidden="true"></i></h5>
                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form method="POST" action="www/register/register.php">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="name"
                                            aria-describedby="helpId" required="required">
                                        <label for="email">E-mail</label>
                                        <i class="fa fa-mailchimp"></i>
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="email"
                                            aria-describedby="helpId" required="required">
                                        <label for="password">Password</label>
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Password"
                                            aria-describedby="helpId" required="required">
                                        <!-- <small id="helpId" class="text-muted">**Only the youth leaders can sign-in to
                                            raise their
                                            voices</small> -->
                                    </div>
                                 <!-- <label>A Youth Leader? </label> <a class="link" href="">Sign</a> -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                           <button type="submit" placeholder="Register" name="register" class="btn btn-success"> Register</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Register -->
            

            <script>
                $('#exampleModal').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);

                    // Use above variables to manipulate the DOM

                });
               $("#redg").click(function () {
                    // $("#login").hide();
                    // $("#clickclose").click(function () {
                    //     $("#register").hide();
                    //      $("#login").hide();
                    // });
                });
            </script>
        </div>
    </nav>
    <!--  -->
    <div class="container-fluid p-0">
        <hr class="m-0">
        <section class=" p-3 p-lg-5 d-flex justify-content-center" id="section1">
            <div class="w-100">
                <h1>Building a Better World</h1>
                <p class="lead mb-5">When we are together, nothing is impossble</p>
                <button type="button" class="btn btn-warning text-white" id="bs1">Write a Petition</button>
                <button type="button" class="btn btn-primary" id="bs1">Learn more</button>
            </div>
        </section>

        <hr class="m-0">

        <section class="p-3 p-lg-5 d-flex justify-content-center">
            <div class="w-100">
                <h1 class="">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
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
                            <a href="www/campshow.php"><p class="lead">
                                <i class="fas fa-paper-plane text-danger"> Petition to</i> <i class="fas fa"><?php echo $campaign['petto']; $_SESSION['petid']=$campaign['petid']; ?></i>
                            </p>
                            <h3 class="mb-0 text-sublime text-dark"><?php echo $campaign['title']; ?></h3>
                            <br></a>
                            <p class="lead text-sublime">
                               <?php echo $campaign['problem'];$petid=$campaign['petid']; ?>
                            </p>
                            <p class="lead">
                                <i class="fas fa-location-arrow" aria-hidden="true" id="s2i"></i>
                                Area,city,country
                            </p>
                             <?php
                                $support=mysqli_query($con," SELECT COUNT(*) AS totalsupport FROM supportlog WHERE petid='$petid'");
                                $scount=mysqli_fetch_assoc($support);  
                                ?>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $scount['totalsupport']; ?>%;" aria-valuenow="25"
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

                        </div>
                    </div>
                </h1>
            </div>
        </section>

        <hr class="m-0">

        <!-- <section class="p-3 p-lg-5 d-flex justify-content-center text-white">
            <div class="w-100">
                <h1 class="mb-5">
                    What do you care?
                </h1>
                <div class="row mb-5">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-tree fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Enviorment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Social</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card mb-5 grow">
                            <div class="card-body shadow p-3 mb-5 rounded bg-primary">
                                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                                <p class="text-right fa-2x">Education</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

        <hr class="m-0">
        <section class="p-3 p-lg-5 d-flex justify-content-center text-dark">
            <div class="w-100">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <!-- <div class="card-deck"> -->
                        <div class="card">
                            <img class="card-img-top"
                                src="https://campoal.blue/young/wp-content/uploads/2018/10/undraw_wall_post_83ul.svg"
                                alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">You are Activist?</h4>
                                <p class="card-text text-center">activist - some description over here</p>
                                <!-- <a name="" id="" class="btn btn-primary" href="#" role="button">
                                    <i class="fas fa-edit" aria-hidden="true"></i> Start Campaign</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://campoal.blue/young/wp-content/uploads/2018/10/undraw_work_chat_erdt.svg"
                                alt="">
                            <div class="card-body">
                                <h4 class="card-title text-center">You are Supporter?</h4>
                                <p class="card-text text-center">supporter - some description over here</p>
                                <!-- <a name="" id="" class="btn btn-primary " href="#" role="button"> -->
                                    <!-- <i class="fas fa-hand-peace" aria-hidden="true"></i> Show support</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>

        </section>

        <!--  -->

        <hr class="m-0">
        <section class="p-3 p-lg-5 d-flex justify-content-center text-dark">
            <div class="w-100">
                <h2 class="mb-5 text-right">How it <u class="">Works</u></h2>
                <div class="row">
                    <div class="col-md-12 col-lg-6" id="s5fi">flow</div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body shadow p-3 mb-5 rounded" id="s5cb">
                                <h4 class="card-title text-right"><i class="fas fa-fist-raised text-warning"></i> Start
                                    a Campaign</h4>
                                <p class="lead text-right">Easy to start your petition in just 4-steps.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body shadow p-3 mb-5 rounded" id="s5cb">
                                <h4 class="card-title text-right"><i class="fas fa-fist-raised text-warning"></i>
                                    Collect Supporters</h4>
                                <p class="lead text-right">Invite friends to sign and share your petition.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body shadow p-3 mb-5 rounded" id="s5cb">
                                <h4 class="card-title text-right"><i class="fas fa-fist-raised text-warning"></i> Drive
                                    Solutions</h4>
                                <p class="lead text-right">Meet the decision makers to driving solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->

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