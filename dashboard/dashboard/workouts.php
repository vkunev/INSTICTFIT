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


function remove(){
          $servername = "81.4.125.82";
                    $username = "admin_ptaa";
                    $password = "ptaa789";
                    $dbname = "admin_ptaa";
     $idd=$row['id']; 

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
          $sql = "delete from workouts where id='$idd'";
                    $result = $conn->query($sql);
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
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span><i class="icon-reorder"></i>
        </button>
        <a class="navbar-brand" href="#">
            PTAA Admin
        </a>
    </div>
    <nav class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="../timeline.php">TimeLine</a>
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
                  
                  <button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModal">Add Workout</button>
                
              </div>
                
<!--   Add workouts modal-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      <form action="func/add-workout.php" method="post" name="addworkout1"> 
      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control"  name="name" id="name">
     <label for="text">Description:</label>
    <textarea type="text" class="form-control" name="description" id="text"></textarea>
  </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" name="addworkout" class="btn btn-success pull-left" value="Add">
      </div>
       
    </div>
           </form>

  </div>
</div>
<!--End Add workoust modal-->


<!--   Content         -->


                <form>
            <h3>Find workout</h3>
                    <form  method="post" action="#"  id="searchform">
            <input type="text" name="city" size="30" class="city" placeholder="Please Enter workout ">
                    <input  type="submit" name="submit" value="Search">
                    </form>
        </form>

<!--Results table-->
                
<table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Action</th>
        <th>Name</th>
        <th>Details</th>
        <th>More</th>
      </tr>
    </thead>
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
          $sql = "SELECT id, name, description FROM workouts";
                    $result = $conn->query($sql);



                    if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) { ?>
    <tbody>
      <tr>
        <td><?php echo $row['id']; ?></td>
          <td><form action="workouts.php"><button type="submit" onclick="remove()" class="btn btn-danger btn-sm"><font size='3'><span class="glyphicon glyphicon-remove-circle icon-rm"></span></font></button></form></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['description']; ?></td>
          <td><button type="button" class="btn"data-toggle="modal" data-target="#workoutModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td><?php }
                    } ?>
      </tr>         
    </tbody>
  </table>                                
<!-- End Results table-->
                
                
   <!--   Modal details for workouts -->
<!-- Modal -->
<div id="workoutModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
      <form action="func/add-workout.php" method="post" name="addworkout1"> 
      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $row['name']; ?></h4>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control"  name="name" id="name">
     <label for="text">Description:</label>
    <textarea type="text" class="form-control" name="description" id="text"></textarea>
  </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" name="addworkout" class="btn btn-success pull-left" value="Add">
      </div>
       
    </div>
           </form>

  </div>
</div>
<!--End  workoust details modal-->             
                

<!--      End Content          -->
                </div>
        </div>
</div>





    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
<!--    <script src="../js/jquery.js"></script>-->
    <!-- Bootstrap 3.3.5 -->
<!--    <script src="../bootstrap/js/bootstrap.min.js"></script>-->
    <!-- SlimScroll -->
<!--    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>-->
    <!-- FastClick -->
<!--    <script src="../../plugins/fastclick/fastclick.min.js"></script>-->


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


