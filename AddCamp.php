<?php
    session_start();
    $youthid=$_SESSION['youthid']; 
    $_SESSION['youthid']=$youthid;
?>
<html>

<head>
    <title>MoSupport</title>

    <!-- Bootstrap-4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!--custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bs-stepper.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/controller.js"></script>
</head>
<!-- $("#button1").click(function () {}); -->
<body>

    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="Userdash/dashboard.php">MoSupport</a>
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

                <a name="" id="" class="btn btn-danger" href="signout/signout.php" role="button">
                    <i class="fas fa-sign-out-alt text-white"></i> Sign out</a>
            </div>
        </div>
    </nav>
    <!-- body starts -->
    <script>
         $(document).ready(function () {
             $("#step2").hide();
             $("#step3").hide();
             $("#step4").hide();
             $("#stepper1").css("background-color", "#dc3545");
            $("#stepper2").css("background-color", "#6c757d");
            $("#stepper3").css("background-color", "#6c757d");
            $("#stepper4").css("background-color", "#6c757d");
            $("#stepper1").css("color", "white");
             $("#stepper2").css("color", "white");
             $("#stepper3").css("color", "white");
             $("#stepper4").css("color", "white");
             $("#button1").click(function () {
                //  $('input[type="text"]').each(function(){
                // if($(this).val()!=""){
                $("#step1").hide();
                $("#step2").show();
                $("#stepper2").css("background-color", "#dc3545");
                //  }
                //  else{
                //      alert('Text field is empty!');
                //  }
                // });
             });
             $("#button2").click(function () {
                $("#step2").hide();
                $("#step3").show();
                $("#stepper3").css("background-color", "#dc3545");
             });
             $("#button3").click(function () {
                $("#step3").hide();
                $("#step4").show();
                $("#stepper4").css("background-color", "#dc3545");
             });
         });
    </script>
    <div class="container-fluid h-100">
        <hr class="m-0">
        <section class=" p-3 w-100 p-lg-5 d-flex justify-content-center" id="section1">
            <form class="container" action="add2db.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <span class="badge badge-pill fa-1x p-3 m-5" id="stepper1">1</span>
                <span class="badge badge-pill fa-1x p-3 m-5" id="stepper2">2</span>
                <span class="badge badge-pill fa-1x p-3 m-5" id="stepper3">3</span>
                <span class="badge badge-pill fa-1x p-3 m-5" id="stepper4">4</span>
            </div>
                <div class="form-group gp1" id="step1">
                  <h2>Write your petition title</h2>
                  <small id="helpId" class="text-muted">This is the first thing people will see about your petition. Get their attention with a short title that focusses on the change you’d like them to support.</small>
                  <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" required="required">
                  <br>
                  <button type="button" name="" id="button1" class="btn btn-danger btn-md ">Save and Continue</button>
                </div>
                <div class="form-group" id="step2">
                  <h2>Choose a decision maker</h2>
                  <small id="helpId" class="text-muted">This is the person, organisation, or group that can make a decision about your petition. Change.org will send them updates on your petition and encourage a response.</small>
                  <input type="text" name="petto" id="petto" class="form-control" placeholder="" aria-describedby="helpId" required="required">
                  <br>
                  <button type="button" name="" id="button2" class="btn btn-danger btn-md ">Save and Continue</button>
                </div>
                <div class="form-group" id="step3">
                  <h2>Explain the problem you want to solve</h2>
                  <small id="helpId" class="text-muted">People are more likely to support your petition if it’s clear why you care. Explain how this change will impact you, your family, or your community.</small>
                  <input type="text" name="problem" id="problem" class="form-control" placeholder="" aria-describedby="helpId" required="required">
                  <br>
                  <button type="button" name="" id="button3" class="btn btn-danger btn-md ">Save and Continue</button>
                </div>
                <div class="form-group" id="step4">
                  <h2>Add a photo or video</h2>
                  <small id="fileHelpId" class="form-text text-muted">Petitions with a photo or video receive <b>six times</b> more signatures than those without. Include one that captures the emotion of your story.</small>
                  <!-- <input type="file" class="form-control-files btn-primary" name="add file" id="file" placeholder="add file" aria-describedby="fileHelpId" required="required">   -->
                  <input class="" type="file" name="fileToUpload" id="fileToUpload">	
                  <br>  
                  <button type="submit" placeholder="Submit" name="submit" class="btn btn-danger mb-1"> Submit</button>          
                </div>
            </form>
           
        </section>
    </div> <!-- Footer starts -->
    <footer class="page-footer font-small blue pt-4 container-fluid bg-primary text-white" id="about">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">MoSupport</h5>
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
        <div class="footer-copyright text-center py-3">&copy; 2018 Copyright: MoSupport
        </div>
        <!-- Copyright -->

    </footer>
</body>

</html>