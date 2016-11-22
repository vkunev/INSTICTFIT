<?php

session_start();
require  'events/addevent.php';

if (!isset($_SESSION['username'])) {
    header("location:login/main_login.php");
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
                            <li>
                        <a class="list-group-item" href="/dashboard/muscles.php"><i class="icon-home icon-1x"></i>Muscles</a>
                    </li>
                        </ul>
                    </div>
                </div>
                <div id="main-wrapper" class="col-md-11 pull-right">
                    <div id="main">
                        <div class="page-header">
                            <h3>Calendar</h3>
                            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#addEventModal"><span class="glyphicon glyphicon-plus"></span>Add Event</button>
                        </div>



                        <!-- Add Event Modal -->
                        <div id="addEventModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Event</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            <div class="alert alert-info"> Here you can add new event to the Calendar. </div>
                                        </p>

                                        <form action="events/addevent.php" method="post">
                                            <!--datepicker-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="input-append date" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                                                        Date:<input type="text" placeholder="click to show datepicker" name="date" id="pickyDate" style="z-index: 1051; display: block;" />
                                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Timepicker-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    Time: <input id="timepick" type="text" class="time" name="time"/>
                                                </div>
                                            </div>

                                            <!-- Name  -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    Name :<input type="text" name="name">
                                                </div>
                                            </div>

                                    </div>
                                    <!-- End Modal body -->
                        <p>
                        <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" name="submit" value="Submit" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                        </p>
                                    </form>
                                </div>

                            </div>
                            <!-- modal dialog   -->
                        </div>
                        <!-- End Add event Modal-->






                        <!--   Content         -->

                        <div id="calendar-wrapper">
                            <div class="monthly" id="mycalendar"></div>
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
        <script type="text/javascript">
            $(window).load(function () {
                $('#mycalendar').monthly({
                    mode: 'event',
                    dataType: 'xml',
                    xmlUrl: 'events/events.xml'
                })
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#pickyDate').datepicker({
                    format: "yyyy-mm-dd"
                });
            });
        </script>
        <!--Timepicker-->
        <script>
            $(function () {
                $('#timepick').timepicker();
            });
        </script>

    </body>

    </html>
