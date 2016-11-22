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



if(isset($_POST['select-workout'])){
    $select1 = $_POST['select-workout'];
    switch ($select1) {
        case '1':
            echo 'this is value1<br/>';
            break;
        case '2':
            echo 'value2<br/>';
            break;
            case '1':
            echo 'this is value1<br/>';
            break;
        case '3':
            echo 'value2<br/>';
            break;
            case '1':
            echo 'this is value1<br/>';
            break;
        case '4':
            echo 'value2<br/>';
            break;
            case '1':
            echo 'this is value1<br/>';
            break;
        case '5':
            echo 'value2<br/>';
            break;
            case '1':
            echo 'this is value1<br/>';
            break;
        case '6':
            echo 'value2<br/>';
            break;
        default:
            # code...
            break;
    }
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
        <link rel="stylesheet" href="../css/activity.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- main css  -->
        <link rel="stylesheet" href="../css/main.css">
        <!-- jasny css-->
        <link rel="stylesheet" href="css/jasny-bootstrap.min.css">


        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>





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

                            <h3>My Hub</h3>




                             <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Workout</h4>
      </div>
      <div class="modal-body">
          <form action="" method="post">
        <select class="form-control"name="select-workout">
  <option value="1">Chest and Triceps</option>
  <option value="2">Back and Byceps</option>
  <option value="3">Legs and Core</option>
  <option value="4">Football</option>
  <option value="5">Cardio</option>
</select>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" type="submit" name="submit" class="btn btn-default" data-dismiss="modal">Start</button>
        <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- End Modal-->




                            <!-- Floating action button-->
                            <div class="fixed-action-btn horizontal click-to-toggle">
                                <a class="btn-floating btn-large red waves-effect waves-light red">
                                    <i class="material-icons"><span class="glyphicon glyphicon-plus"></span></i>
                                </a>
                                <ul>
                                    <li>
                                        <a class="btn-floating red waves-effect waves-light red" title="Hooray!" data-toggle="modal" data-target="#myModal"><i class="material-icons"><i class="fa fa-child"></i></i>
                                        </a>
                                    </li>

                                    <li><a class="btn-floating green waves-effect waves-light red " data-toggle="tooltip" data-placement="top" title="Hooray!"><i class="material-icons"><span class="glyphicon glyphicon-cutlery"></span></i></a></li>
                                    <li><a class="btn-floating yellow darken-1 waves-effect waves-light red"><i class="material-icons"><span class="glyphicon glyphicon-scale"></span></i></a></li>
                                    <li><a class="btn-floating blue waves-effect waves-light red"><i class="material-icons"><span class="glyphicon glyphicon-envelope"></span></i></a></li>
                                </ul>
                            </div>
                            <!-- End floating action button -->

                        </div>

                        <!-- Content -->
                        <div clas="row">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Your recent activity</div>
                                    <div class="panel-body">
                                        <div class="activity-feed">
                                            <div class="feed-item">
                                                <div class="date">Sep 25</div>
                                                <div class="text">Responded to need <a href="single-need.php">“Volunteer opportunity”</a></div>
                                            </div>
                                            <div class="feed-item">
                                                <div class="date">Sep 24</div>
                                                <div class="text">Added an interest “Volunteer Activities”</div>
                                            </div>
                                            <div class="feed-item">
                                                <div class="date">Sep 23</div>
                                                <div class="text">Joined the group <a href="single-group.php">“Boardsmanship Forum”</a></div>
                                            </div>
                                            <div class="feed-item">
                                                <div class="date">Sep 21</div>
                                                <div class="text">Responded to need <a href="single-need.php">“In-Kind Opportunity”</a></div>
                                            </div>
                                            <div class="feed-item">
                                                <div class="date">Sep 18</div>
                                                <div class="text">Created need <a href="single-need.php">“Volunteer Opportunity”</a></div>
                                            </div>
                                            <div class="feed-item">
                                                <div class="date">Sep 17</div>
                                                <div class="text">Attending the event <a href="single-event.php">“Some New Event”</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--col left-->
<div class="col-md-6">

                        </div>
<!-- col-right -->



                        </div>
                        <!--roll -->

                        <!-- End Content -->

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

                        <?php

                               ?>
