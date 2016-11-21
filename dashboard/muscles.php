<?php 

session_start();
require  'events/addevent.php';

if (!isset($_SESSION['username'])) {
    header("location: http://ptaa.gq/login/main_login.php");
}
$user = $_SESSION['username'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ptAA | Calendar</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <!--        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="../bootstrap/css/mytheme.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- monthly css  -->
        <link rel="stylesheet" href="../css/monthly.css">
        <!-- datepicker css-->
        <link rel="stylesheet" href="../css/datepicker.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--timepicker css-->
        <link rel="stylesheet" href="../css/timepicker.css">



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
            PTAA Admin
        </a>
                </div>
                <nav class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Navbar Item 1</a>
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
                </nav>
            </div>
            <div id="wrapper">
                <div id="sidebar-wrapper" class="col-md-1">
                    <div id="sidebar">
                        <ul class="nav list-group">
                            <li>
                                <a class="list-group-item" href="/dashboard/members.php"><i class="icon-home icon-1x"></i>Users</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/dashboard/workouts.php"><i class="icon-home icon-1x"></i>Workouts</a>
                            </li>
                            <li>
                                <a class="list-group-item" href="/dashboard/calendar.php"><i class="icon-home icon-1x"></i>Calendar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="main-wrapper" class="col-md-11 pull-right">
                    <div id="main">
                        <div class="page-header">
                            <h3>Muscles list</h3>
                        </div>



                        <!--   Content         -->

                        <div class="row">
                            <div class="col-md-6">
                                <img src="src/body-front.jpg" class="img-responsive" alt="Cinque Terre" usemap="#Map">
                                <a href="link" title="" style="position: absolute; left: 1.15%; top: 3.51%; width: 18.74%; height: 6.5%; z-index: 2;"></a>
                                <map name="Map" id="Map">
<!--                                    <area alt="" title="" href="#" shape="poly" coords="21,75,45,77,72,77,260,75,262,144,18,148" />-->
                                    <area alt="" title="" href="#" shape="poly" coords="19,167,260,165,258,205,22,205" />
                                    <area alt="" title="" href="#" shape="poly" coords="21,221,23,258,278,261,276,230,278,225,275,223" />
                                    <area alt="" title="" href="#" shape="poly" coords="23,281,234,281,234,314,22,312" />
                                    <area alt="" title="" href="#" shape="poly" coords="17,334,17,368,206,373,210,337" />
                                    <area alt="" title="" href="#" shape="poly" coords="14,387,14,427,209,433,213,396" />
                                    <area alt="" title="" href="#" shape="poly" coords="16,448,16,482,201,486,201,454" />
                                    <area alt="" title="" href="#" shape="poly" coords="17,503,16,535,239,537,238,504" />
                                    <area alt="" title="" href="#" shape="poly" coords="19,562,290,563,290,629,21,631" />
                                    <area alt="" title="" href="#" shape="poly" coords="19,652,20,686,259,689,263,655" />
                                    <area alt="" title="" href="#" shape="poly" coords="20,704,22,743,257,749,258,712" />
                                    <area alt="" title="" href="#" shape="poly" coords="20,704,22,743,257,749,258,712" />
                                    <area alt="" title="" href="#" shape="poly" coords="21,778,17,703,269,710,259,780" />
                                    <area alt="" title="" href="#" shape="poly" coords="15,809,18,880,285,879,281,817,278,812,273,807" />
                                    <area alt="" title="" href="#" shape="poly" coords="15,894,16,939,309,942,308,904" />
                                    <area alt="" title="" href="#" shape="poly" coords="17,1000,267,1000,270,1039,17,1036" />
                                    <area alt="" title="" href="#" shape="poly" coords="16,1083,15,1124,266,1125,271,1089" />
                                    <area alt="" title="" href="#" shape="poly" coords="855,1088,962,1091,964,1125,858,1127" />
                                    <area alt="" title="" href="#" shape="poly" coords="854,1032,855,1070,1263,1075,1257,1036" />
                                    <area alt="" title="" href="#" shape="poly" coords="857,1020,852,985,974,988,974,1019" />
                                    <area alt="" title="" href="#" shape="poly" coords="856,969,857,936,1099,941,1101,970" />
                                    <area alt="" title="" href="#" shape="poly" coords="856,886,855,918,1085,921,1085,889" />
                                    <area alt="" title="" href="#" shape="poly" coords="948,800,944,837,1224,833,1224,802" />
                                    <area alt="" title="" href="#" shape="poly" coords="942,746,945,786,1202,777,1202,754" />
                                    <area alt="" title="" href="#" shape="poly" coords="939,695,943,728,1236,728,1228,698" />
                                    <area alt="" title="" href="#" shape="poly" coords="944,641,946,676,1271,674,1268,644" />
                                    <area alt="" title="" href="#" shape="poly" coords="942,586,941,618,1240,618,1235,591" />
                                    <area alt="" title="" href="#" shape="poly" coords="945,535,944,566,1278,564,1276,527" />
                                    <area alt="" title="" href="#" shape="poly" coords="941,473,943,511,1170,507,1170,478" />
                                    <area alt="" title="" href="#" shape="poly" coords="941,419,945,459,1193,455,1190,419" />
                                    <area alt="" title="" href="#" shape="poly" coords="940,369,1056,369,1057,398,944,401" />
                                    <area alt="" title="" href="#" shape="poly" coords="944,313,1094,315,1096,348,947,347" />
                                    <area alt="" title="" href="#" shape="poly" coords="945,260,944,296,1119,292,1113,257" />
                                    <area alt="" title="" href="#" shape="poly" coords="943,110,944,155,1291,158,1293,112" />

                                </map>
                                <!-- End map -->
                            </div>
                            <div class="col-md-6">
                                <img src="src/body-back.jpg" class="img-responsive" alt="Cinque Terre">
                            </div>
                        </div>


                        <!--      End Content          -->
                    </div>
                </div>
            </div>





        </div>
        <!-- ./wrapper -->

        <!-- monthly js   -->
        <!--        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->

        <!-- jQuery 2.1.4 -->
        <!--        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>-->
        <!-- Bootstrap 3.3.5 -->
        <!--        <script src="../../bootstrap/js/bootstrap.min.js"></script>-->
        <!-- SlimScroll -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.min.js"></script>
        <!-- Datepicker-->
        <script src="../js/bootstrap-datepicker.js"></script>
        <!-- Monthly JS  -->
        <script type="text/javascript" src="../js/monthly.js"></script>
        <!-- Moment js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/locale/af.js"></script>
        <!-- timepicker js-->
        <script src="../js/timepicker.min.js"></script>

        <!--        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>-->

    </body>

    </html>