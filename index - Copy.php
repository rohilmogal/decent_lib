<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
if(isset($_POST['login']))
{
  //code for captach verification
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
    } 
        else {
$email=$_POST['emailid'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,StudentId,Status FROM tblstudents WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
 foreach ($results as $result) {
 $_SESSION['stdid']=$result->StudentId;
if($result->Status==1)
{
$_SESSION['login']=$_POST['emailid'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else {
echo "<script>alert('Your Account Has been blocked .Please contact admin');</script>";

}
}

} 

else{
echo "<script>alert('Invalid Details');</script>";
}
}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Decent LIB - Home</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">




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
    <?php include('includes/header.php');?>
    <section>
        <div class="relative">
            <div class="">
                <img class="" src="images/splash.jpg">
            </div>
            <div class="absolute top-0">
                <img class="top-0 opacity-50" src="black.jpg">
            </div>
            <h1
                class="absolute z-40 text-center text-white cfonts-Staatliche font-bold font-sans text-6xl top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                A Centralized Book Library</h1>
        </div>
    </section>

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-24 flex-wrap wrapper text-justify">
                <h1 class="sm:text-3xl font-medium cfonts-Staatliche text-gray-900 lg:w-1/3 lg:mb-0 mb-4 lg:text-5xl">
                    Best
                    BOOKS of 2021</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-3xl">The project titled
                    “Decent-Lib”
                    (Decentralized Library system) is a Library management app, a web application, which allows its
                    users to share books to/from other users easily. Idea is to manage a personal library and share it
                    with whole world on click of a fingertip.
                </p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <a href="pdp.php">
                            <img alt="gallery" class="w-full object-cover h-full object-center block rounded-3xl"
                                src="images/1.jpg">
                        </a>
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <a href="pdp2.php">
                            <img alt="gallery" class="w-full object-cover h-full object-center block rounded-3xl"
                                src="images/2.jpg">
                        </a>
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <a href="pdp3.php">
                            <img alt="gallery" class="w-full h-full object-cover object-center block rounded-3xl"
                                src="images/3.jpg">
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <a href="pdp4.php">
                            <img alt="gallery" class="w-full h-full object-cover object-center block rounded-3xl"
                                src="images/4.jpg">
                        </a>
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <a href="pdp5.php">
                            <img alt="gallery" class="w-full object-cover h-full object-center block rounded-3xl"
                                src="images/5.jpg">
                        </a>
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <a href="pdp6.php">
                            <img alt="gallery" class="w-full object-cover h-full object-center block rounded-3xl"
                                src="images/6.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--FEATURE-->
    <div class="  bg-white">
        <div class="">
            <div class="lg:text-center my-14 wrapper">
                <h2 class="text-indigo-500 text-6xl cfonts-Staatliche tracking-wide uppercase">E-Reading</h2>
                <p class=" mb-8 text-7xl leading-8 cfonts-lobster tracking-tight text-gray-900">
                    A better way to Read.
                </p>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <p class="mt-4 mb-32 max-w-3xl text-3xl text-gray-500 lg:mx-auto text-center">
                    Now you can read and enjoy the love inspired by CHETAN BHAGAT or learn magic of HARRY POTTER from
                    anywhere and any time.
                </p>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            <!---CAROUSEL START-->
            <div class="sliderAx h-auto">
                <div id="slider-1" class="container mx-auto">
                    <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill"
                        style="background-image: url(https://source.unsplash.com/1600x900/?books,library)">
                        <div class="md:w-1/2">
                            <p class="font-bold text-sm uppercase">Services</p>
                            <p class="text-3xl font-bold">Peer-to-Peer</p>
                            <p class="text-2xl mb-10 leading-none">BOOK SHARING AND BOOK ISSUEING</p>
                            <a href="#"
                                class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                                us</a>
                        </div>
                    </div> <!-- container -->
                    <br>
                </div>

                <div id="slider-2" class="container mx-auto">
                    <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill"
                        style="background-image: url(https://source.unsplash.com/1600x900/?books,library)">

                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">PEER-TO-PEER</p>
                        <p class="text-2xl mb-10 leading-none">BOOK SHARING AND BOOK ISSUEING</p>
                        <a href="#"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                            us</a>

                    </div> <!-- container -->
                    <br>
                </div>
            </div>


            <!---CAROUSEL END-->

            <div class=" mx-20 my-24">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-24 w-24 rounded-full bg-indigo-500 text-white">
                                <!-- Heroicon name: globe-alt -->
                                <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class=" text-3xl leading-6 font-medium text-gray-900">
                                Reasonable book exchange rate.
                            </dt>
                            <dd class="mt-2 text-xl text-gray-500">
                                Price of the book is totally reasonable as well as negotiable with the seller.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-24 w-24 rounded-full bg-indigo-500 text-white">
                                <!-- Heroicon name: scale -->
                                <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-3xl leading-6 font-medium text-gray-900">
                                No hidden fees
                            </dt>
                            <dd class="mt-2 text-xl text-gray-500">
                                There will be no hidden charges. All the transaction are been supervised and has
                                END-TO-END Decryption.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-24 w-24 rounded-full bg-indigo-500 text-white">
                                <!-- Heroicon name: lightning-bolt -->
                                <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-3xl leading-6 font-medium text-gray-900">
                                Fast Delivery
                            </dt>
                            <dd class="mt-2 text-xl text-gray-500">
                                Issuing book offline provides you with benfits of 2-Day Delivery of book after issuing.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div
                                class="flex items-center justify-center h-24 w-24 rounded-full bg-indigo-500 text-white">
                                <!-- Heroicon name: annotation -->
                                <svg class="h-16 w-16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-3xl leading-6 font-medium text-gray-900">
                                Mobile notifications
                            </dt>
                            <dd class="mt-2 text-xl text-gray-500">
                                We will keep you notifying with the upcoming books of your fav author/seller.
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <section class="text-gray-700 body-font">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap mt-24 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="cfonts-opensans title-font font-bold text-6xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed">Users</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="cfonts-opensans title-font font-bold text-6xl text-gray-900">1.8K</h2>
                    <p class="leading-relaxed">Subscribes</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="cfonts-opensans title-font font-bold text-6xl text-gray-900">35</h2>
                    <p class="leading-relaxed">Downloads</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <h2 class="cfonts-opensans title-font font-bold text-6xl text-gray-900">4</h2>
                    <p class="leading-relaxed">Products</p>
                </div>
            </div>
        </div>
    </section>
    <!---LOGIN PABNEL END-->



    </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
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