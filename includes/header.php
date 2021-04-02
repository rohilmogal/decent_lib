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


<?php if ($_SESSION['login']) {
?>
    <header class="text-gray-700 bg-gray-900">

        <div class="mx-auto flex flex-wrap py-6 px-8 flex-col md:flex-row items-center wrapper">
            <a class="flex title-font items-center white mb-4 md:mb-0" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-16 h-16 text-white p-2 bg-blue-500 rounded-full" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M23 5v13.883l-1 .117v-16c-3.895.119-7.505.762-10.002 2.316-2.496-1.554-6.102-2.197-9.998-2.316v16l-1-.117v-13.883h-1v15h9.057c1.479 0 1.641 1 2.941 1 1.304 0 1.461-1 2.942-1h9.06v-15h-1zm-12 13.645c-1.946-.772-4.137-1.269-7-1.484v-12.051c2.352.197 4.996.675 7 1.922v11.613zm9-1.484c-2.863.215-5.054.712-7 1.484v-11.613c2.004-1.247 4.648-1.725 7-1.922v12.051z" />
                </svg>
                <span class="ml-4 text-4xl cfonts-Staatliche text-white mr-4">Decent LIB</span>
            </a>

            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-2xl justify-center font-light">
                <a href="adminlogin.php" class="ml-5 mr-5 hover:text-blue-400 text-white">Admin</a>
                <a href="#" class="mr-5 hover:text-blue-400 text-white">User</a>
                <a href="team.php" class="mr-5 hover:text-blue-400 text-white">Team</a>
                <a href="about.php" class="mr-5 hover:text-blue-400 text-white">About-Us</a>
                <a href="books.php" class="mr-5 hover:text-blue-400 text-white">Books</a>

            </nav>
            <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
        </div>
    </header>
    <section class="menu-section cfonts-opensans">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="">DASHBOARD</a></li>


                            <li class="">
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="issued-books.php">Issued Books</a></li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php } else { ?>
    <header class="text-gray-700 bg-gray-900">

        <div class="mx-auto flex flex-wrap py-6 px-8 flex-col md:flex-row items-center wrapper">
            <a class="flex title-font items-center white mb-4 md:mb-0" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-16 h-16 text-white p-2 bg-blue-500 rounded-full" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M23 5v13.883l-1 .117v-16c-3.895.119-7.505.762-10.002 2.316-2.496-1.554-6.102-2.197-9.998-2.316v16l-1-.117v-13.883h-1v15h9.057c1.479 0 1.641 1 2.941 1 1.304 0 1.461-1 2.942-1h9.06v-15h-1zm-12 13.645c-1.946-.772-4.137-1.269-7-1.484v-12.051c2.352.197 4.996.675 7 1.922v11.613zm9-1.484c-2.863.215-5.054.712-7 1.484v-11.613c2.004-1.247 4.648-1.725 7-1.922v12.051z" />
                </svg>
                <span class="ml-4 text-4xl cfonts-Staatliche text-white mr-4">Decent LIB</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-2xl justify-center font-light">
                <a href="adminlogin.php" class="ml-5 mr-5 hover:text-blue-400 text-white">Admin</a>
                <a href="userlogin.php" class="mr-5 hover:text-blue-400 text-white">User</a>
                <a href="team.php" class="mr-5 hover:text-blue-400 text-white">Team</a>
                <a href="about.php" class="mr-5 hover:text-blue-400 text-white">About-Us</a>
                <a href="books.php" class="mr-5 hover:text-blue-400 text-white">Books</a>

            </nav>
            <div>
                <a href="signup.php" class="inline-flex items-center bg-blue-500 text-white border-0 px-6 py-2 focus:outline-none hover:text-black rounded-lg mt-4 md:mt-0">Register
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class=" w-5 h-5 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

        </div>
    </header>


<?php } ?>