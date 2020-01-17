<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title> Demande de carte consulaire </title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
</head>

<body>

<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
        </div>

        <a href="index.php" class="logo">CONSULAT  <span class="lite">GUINEE</span></a>

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">

                <li class="sub-menu">
                    <a href="index.php" class="">
                        <i class="icon_document_alt"></i>
                        <span>ACCUEIL</span>
                    </a>
                </li>
                <li>
                    <a class="" href="index.php?page=connexion">
                        <i class="icon_genius"></i>
                        <span>CONNEXION</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    <section id="main-content">
        <section class=" wrapper">
            <div class="alert alert-success" style="background: maroon; color:#fff">
                <?php
                include("config/constantes.php");
                if (!isset($_GET['page']) or $_GET['page'] != "connexion") {
                    echo MSG_INSCRIPTION;
                } else if ($_GET['page'] == "connexion") {
                    echo MSG_LOGIN;
                }
                ?>
            </div>
            <div class="row">
                <?php
                if (!isset($_GET['page']) or $_GET['page'] != "connexion") {
                    include("inscription.php");
                } else if ($_GET['page'] == "connexion") {
                    include("login.php");
                }
                ?>
            </div>
        </section>
    </section>

</section>
<!-- container section end -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>


</body>

</html>
