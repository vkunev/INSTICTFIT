<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("location: http://ptaa.gq/login/main_login.php");
}
$user = $_SESSION['username'];

$servername = "81.4.125.82";
                    $username = "admin_ptaa";
                    $password = "ptaa789";
                    $dbname = "admin_ptaa";

                    
    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ptAA | Calendar</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jasny-bootstrap.min.js"></script>



        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
                <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/mytheme.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- main css  -->
        <link rel="stylesheet" href="../css/main.css">
        <!-- jasny css-->
        <link rel="stylesheet" href="css/jasny-bootstrap.min.css">




        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->

    <body class="hold-transition skin-blue fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">




            <div id="header" class="navbar navbar-default navbar-fixed-top">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="icon-reorder"></i>
                    </button>
                    <a class="navbar-brand" href="#">
            my PTAA 
        </a>
                </div>
                <nav class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="timeline.php">Time Line</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Navbar Item 2<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Navbar Item2 - Sub Item 1</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Navbar Item 3</a>
                        </li>
                    </ul>



                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $user; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../login/logout.php">Logout <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
                            </ul>
                        </li>
                    </ul>


                    <div class="nav navbar-brand pull-right notifications">
                        <a href="#">
                            <i class="glyphicon glyphicon-bell"></i>
                            <span class="label label-danger">11</span>
                        </a>
                    </div>


                </nav>
            </div>
            <div id="wrapper">
                <div id="sidebar-wrapper" class="col-md-1">
                    <div id="sidebar">
                        <ul class="nav list-group">
                            <li>
                                <a class="list-group-item" href="/crm/myhub.php"><i class="icon-home icon-1x"></i>My Hub</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/workouts.php"><i class="icon-home icon-1x"></i>Workouts</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/nutrition.php"><i class="icon-home icon-1x"></i>Nutrition</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/shoppinglist.php"><i class="icon-home icon-1x"></i>Shopping List</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/gear.php"><i class="icon-home icon-1x"></i>My Gear</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="main-wrapper" class="col-md-11 pull-right">
                    <div id="main">
                        <div class="page-header">
                            
                            <h3>My Shopping List</h3>
                        </div>

                        <!-- Content -->
                       
                    
                    
                    <!-- End Content -->


                                    
                <?php
            
                               ?>
                    
                    
                    
                    
                    
                    
                   