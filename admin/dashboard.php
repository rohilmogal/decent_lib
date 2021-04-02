<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else { ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Decent LIB - Dashboard</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="keywords" content="footer, address, phone, icons" />


        <!-- GOOGLE FONT -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">




        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME STYLE  -->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLE  -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="styles/tailwind.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/styles.css">

    </head>

    <body>
        <!------MENU SECTION START-->
        <?php include('includes/header.php'); ?>
        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line cfonts-Staatliche text-5xl">ADMIN DASHBOARD</h4>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>
                            <?php
                            $sql = "SELECT id from tblbooks ";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $listdbooks = $query->rowCount();
                            ?>


                            <h3><?php echo htmlentities($listdbooks); ?></h3>
                            Books Listed
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-bars fa-5x"></i>
                            <?php
                            $sql1 = "SELECT id from tblissuedbookdetails ";
                            $query1 = $dbh->prepare($sql1);
                            $query1->execute();
                            $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
                            $issuedbooks = $query1->rowCount();
                            ?>

                            <h3><?php echo htmlentities($issuedbooks); ?> </h3>
                            Times Book Issued
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
                            <?php
                            $status = 1;
                            $sql2 = "SELECT id from tblissuedbookdetails where RetrunStatus=:status";
                            $query2 = $dbh->prepare($sql2);
                            $query2->bindParam(':status', $status, PDO::PARAM_STR);
                            $query2->execute();
                            $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                            $returnedbooks = $query2->rowCount();
                            ?>

                            <h3><?php echo htmlentities($returnedbooks); ?></h3>
                            Times Books Returned
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <?php
                            $sql3 = "SELECT id from tblstudents ";
                            $query3 = $dbh->prepare($sql3);
                            $query3->execute();
                            $results3 = $query3->fetchAll(PDO::FETCH_OBJ);
                            $regstds = $query3->rowCount();
                            ?>
                            <h3><?php echo htmlentities($regstds); ?></h3>
                            Registered Users
                        </div>
                    </div>

                </div>



                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>
                            <?php
                            $sq4 = "SELECT id from tblauthors ";
                            $query4 = $dbh->prepare($sq4);
                            $query4->execute();
                            $results4 = $query4->fetchAll(PDO::FETCH_OBJ);
                            $listdathrs = $query4->rowCount();
                            ?>


                            <h3><?php echo htmlentities($listdathrs); ?></h3>
                            Authors Listed
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3 rscol-xs-6">
                        <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-file-archive-o fa-5x"></i>
                            <?php
                            $sql5 = "SELECT id from tblcategory ";
                            $query5 = $dbh->prepare($sql5);
                            $query5->execute();
                            $results5 = $query5->fetchAll(PDO::FETCH_OBJ);
                            $listdcats = $query5->rowCount();
                            ?>

                            <h3><?php echo htmlentities($listdcats); ?> </h3>
                            Listed Categories
                        </div>
                    </div>


                </div>





















                <div class="sliderAx h-auto">
                    <div id="slider-1" class="container mx-auto">
                        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://source.unsplash.com/1600x900/?books,library)">
                            <div class="md:w-1/2">
                                <p class="font-bold text-sm uppercase">Services</p>
                                <p class="text-3xl font-bold">Peer-to-Peer</p>
                                <p class="text-2xl mb-10 leading-none">BOOK SHARING AND BOOK ISSUEING</p>
                                <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                                    us</a>
                            </div>
                        </div> <!-- container -->
                        <br>
                    </div>

                    <div id="slider-2" class="container mx-auto">
                        <div class="bg-cover bg-top  h-auto text-white py-24 px-9 object-fill" style="background-image: url(https://source.unsplash.com/1600x900/?books,library)">

                            <p class="font-bold text-sm uppercase">Services</p>
                            <p class="text-3xl font-bold">PEER-TO-PEER</p>
                            <p class="text-2xl mb-10 leading-none">BOOK SHARING AND BOOK ISSUEING</p>
                            <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                                us</a>

                        </div> <!-- container -->
                        <br>
                    </div>
                </div>

            </div>
        </div>
        <!-- CONTENT-WRAPPER SECTION END-->
        <?php include('includes/footer.php'); ?>
        <!-- FOOTER SECTION END-->
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- CUSTOM SCRIPTS  -->
        <script src="assets/js/custom.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script>
            var cont = 0;

            function loopSlider() {
                var xx = setInterval(function() {
                    switch (cont) {
                        case 0: {
                            $("#slider-1").fadeOut(400);
                            $("#slider-2").delay(400).fadeIn(400);
                            $("#sButton1").removeClass("bg-purple-800");
                            $("#sButton2").addClass("bg-purple-800");
                            cont = 1;

                            break;
                        }
                        case 1: {

                            $("#slider-2").fadeOut(400);
                            $("#slider-1").delay(400).fadeIn(400);
                            $("#sButton2").removeClass("bg-purple-800");
                            $("#sButton1").addClass("bg-purple-800");

                            cont = 0;

                            break;
                        }


                    }
                }, 8000);

            }

            function reinitLoop(time) {
                clearInterval(xx);
                setTimeout(loopSlider(), time);
            }



            function sliderButton1() {

                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-purple-800");
                $("#sButton1").addClass("bg-purple-800");
                reinitLoop(4000);
                cont = 0

            }

            function sliderButton2() {
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-purple-800");
                $("#sButton2").addClass("bg-purple-800");
                reinitLoop(4000);
                cont = 1

            }

            $(window).ready(function() {
                $("#slider-2").hide();
                $("#sButton1").addClass("bg-purple-800");


                loopSlider();
            });
        </script>
    </body>

    </html>
<?php } ?>