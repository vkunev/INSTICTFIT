<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:http://login/main_login.php");
}
$user = $_SESSION['username'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ptAA | Members</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/mytheme.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->


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
                                <li><a href="#">Page 1-3</a></li>
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
                            <h3>Members</h3>
                        </div>


                        <!--   content         -->



                        <table class="table">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>uname</td>
                                    <td>email</td>
                                    <td>approved</td>
                                    <td>date mod</td>

                                </tr>
                            </thead>
                            <tbody>

<?php
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

                    $sql = "SELECT id, username, email, verified, mod_timestamp FROM members";
                    $result = $conn->query($sql);



                    if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['id'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['username'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['email'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['verified'];
                       if(($row['verified'])=='0'){

                           $idd= $row['id'];
                           $ve = $row['verified'];


//                           $_SESSION["uid"] = $idd;
//                           $_SESSION["v"] = $ve;




                           ?> <a href="../login/verifyuser.php?<?php echo 'uid='. $idd . '&v='. $ve; ?>"><button type='submit' name='submit' class='btn btn-xs btn-success'><span class='glyphicon glyphicon glyphicon-ok' aria-hidden='true'></span>
                    </button></a><?php

//                           echo '&nbsp;<a href="http://ptaa.gq/login/verifyuser.php?uid='. $uid .'&v='. $v .'"><button type="submit" name="submit" class="btn btn-xs btn-success"><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
//                    </button></a>';
                           //header("Location http://ptaa.gq/dashboard/members.php");
                       }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $row['mod_timestamp'];?>
                                        </td>
                                    </tr>








                                    <?php
                                }
                    }


?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
        <!-- ./wrapper -->


<!--
        <script>
                function approve() {
                var php_uid = "<?php echo $uid; ?>";
                var php_v= "<?php echo $v; ?>";
                $.get("http://ptaa.gq/login/verifyuser.php?uid="php_uid"&v="php_v);
                return false;

        }
            $(document).ready(approve(){});
        </script>
-->

        <!-- jQuery 2.1.4 -->
        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../../plugins/fastclick/fastclick.min.js"></script>

    </body>

    </html>
