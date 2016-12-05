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
        <title>ptAA | TimeLine</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/jasny-bootstrap.min.js"></script>



        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
                <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/mytheme.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- main css  -->
        <link rel="stylesheet" href="css/main.css">
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
                    <a class="navbar-brand" href="home.php">
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
                                <a class="list-group-item" href="/crm/myhub.php"><i class="fa fa-bar-chart"></i></i>My Hub</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/workouts.php"><i class="fa fa-child"></i></i>Workouts</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/nutrition.php"><i class="fa fa-cutlery"></i></i> Nutrition</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/shoppinglist.php"><i class="fa fa-shopping-cart"></i></i> Shopping List</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/crm/gear.php"><i class="icon-home icon-1x"><i class="fa fa-wrench"></i></i> My Gear</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="main-wrapper" class="col-md-11 pull-right">
                    <div id="main">
                        <div class="page-header">
                            <!-- Timeline post-->

                            <form action="lib/addpost.php" method="post" class="form-horizontal-post">
                                <fieldset>

                                    <!-- Form Name -->
                                    <!-- Text input-->
                                    <div class="form-group">

                                        <div class="col-sm-2">
                                            <button id="up-pic" name="up-pic" class="btn btn-primary"><i class="glyphicon glyphicon-picture"></i></button>
                                            <button id="up-vid" name="singlebutton" class="btn btn-primary"><i class="glyphicon glyphicon-facetime-video"></i></button>
                                        </div>
                                        <div class="col-sm-2">

                                            </style>

                                            <!-- Upload picture -->
                                            <div id="up_pic">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                                    <div>
                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                        <input type="file" name="...">
                                                        </span>
                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End upload picture   -->

                                        </div>

                                        <div class="col-md-3">
                                            <input id="textinput" name="post-data" type="text" placeholder="Say something..." class="form-control input-md">

                                        </div>


                                        <!-- Button -->

                                        <div class="col-md-1">
                                            <button id="singlebutton" name="post_button" class="btn btn-primary">Post</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                            <!-- End Timeline post-->
                        </div>

                        <!-- Content -->
                        <div class="container">




                            <ul class="timeline">

<?php
                    $sql = "SELECT id,user, post, timestamp FROM feed ORDER BY id DESC";
                    $result = $conn->query($sql);



                    if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {?>
                                <?php
                                $id = $row['id'];
                                    if($id%2==0)
                                        {
                                        echo "<li>";
                                        }else{
                                            echo "<li class='timeline-inverted'>";
                                                }
                                ?>
                                    <div class="timeline-badge"><i class="glyphicon glyphicon-user"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">

                                            <p><strong><?php echo $row['user'];?></strong><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?php echo $row['timestamp'];?></small></p>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?php echo $row['post'];}?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php

                    }
?>
<!--
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="glyphicon glyphicon-user"></i></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <p><strong>Admin </strong><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>

                                        </div>
                                    </div>
                                </li>
-->

                            </ul>
                        </div>
                        <!-- End Content -->


                        <script>
                            jQuery(document).ready(function () {
                                jQuery('#up-pic').on('click', function (event) {
                                    jQuery('#up_pic').toggle('show');
                                });
                            });
                        </script>

                <?php

                               ?>






