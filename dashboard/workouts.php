<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login/main_login.php");
}
$user = $_SESSION['username'];

if(isset($_POST['submit'])){
	  //do  something here in code
    if(preg_match("^/[A-Za-z]+/", $_POST['name'])){
	   $name=$_POST['name'];

        $db=mysql_connect ("81.4.125.82",  "admin_ptaa", "ptaa789") or die ('I cannot connect  to the database because: ' . mysql_error());
        $mydb=mysql_select_db("admin_ptaa");
        $sql="SELECT id, name FROM workouts WHERE name LIKE '%" . $name . "%'";
        $result=mysql_query($sql);
        while($row=mysql_fetch_array($result)){
	          $Name = $row['name'];
	          $Details = $row['description'];
	          $wid = $row['id'];
        }

	  }
	  }
	  else{

      }



//CREDENTIALS FOR DB
define ('DBSERVER', '81.4.125.82');
define ('DBUSER', 'admin_ptaa');
define ('DBPASS','ptaa789');
define ('DBNAME','admin_ptaa');

//LET'S INITIATE CONNECT TO DB
$connection = mysql_connect(DBSERVER, DBUSER, DBPASS) or die("Can't connect to server. Please check credentials and try again");
$result = mysql_select_db(DBNAME) or die("Can't select database. Please check DB name and try again");

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT name FROM workouts WHERE name LIKE '%{$query}%'");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['name'],
            'value' => $row['name'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ptAA | Workouts</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../bootstrap/css/mytheme.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

      <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>
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
                <h3>Workouts</h3>
<!-- Add workout button  -->
                  <form> 
                  <button type="button" class="btn btn-success">Add Workout</button>
                  </form>
              </div>


<!--   Content         -->


                <form>
            <h3>Find workout</h3>
                    <form  method="post" action="#"  id="searchform">
            <input type="text" name="city" size="30" class="city" placeholder="Please Enter workout ">
                    <input  type="submit" name="submit" value="Search">
                    </form>
        </form>



<!--      End Content          -->
                </div>
        </div>
</div>





    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>


      <script>
        $(document).ready(function() {

            $('input.city').typeahead({
                name: 'city',
                remote: 'workouts.php?query=%QUERY'

            });

        })
    </script>





  </body>
</html>


