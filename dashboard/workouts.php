<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location:login/main_login.php");
}

//detects if delete is pressed and deletes the selected ID
if($_GET['del'])
   {
    $nid = $_GET['del'];
    

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
          $sql="DELETE FROM workouts WHERE id='".$nid."'";
                    $result = $conn->query($sql);
    header('Location: workouts.php');
   }     
//end deletion

//getting user name from session
$user = $_SESSION['username'];

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


                <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Enter a phrase or workout name">
        </div>
    </div>
                
                
<!--
                <form>
            <h3>Find workout</h3>
                    <form  method="post" action="#"  id="searchform">
            <input type="text" name="city" size="30" class="city" placeholder="Please Enter workout ">
                    <input  type="submit" name="submit" value="Search">
                    </form>
        </form>
-->

<!--Results table-->
               <p><h4>Workouts database</h4></p> 
                
<table id="table"class="table table-hover">
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
                        $n="0";
                        $idd = array();
                            while($row = $result->fetch_assoc()) { ?>
    
    <tbody>
      <tr>
        <td><?php echo $row['id']; $id = $row['id']; $n++ ;?></td>
          <td><form action="workouts.php">
              <button type="button" name="abc" id="abc" onclick="return Deleteqry(<?php echo $id ?>);" class="btn btn-danger btn-sm"><font size='3'><span class="glyphicon glyphicon-remove-circle icon-rm"></span></font></button></form></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['description']; ?></td>
          <td><button type="button" class="btn"data-toggle="modal" data-target="#workoutModal"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td>
      </tr> 
        
    </tbody>
    <?php }
                    } ?>
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
        <h4 class="modal-title"><?php echo $idd; ?></h4>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control"  name="name" id="name">
     <label for="text">Description:</label>
    <textarea type="text" class="form-control" name="description" id="text"><?php echo $description ?></textarea>
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

    <script src="../js/jquery.searchable.js"></script>
    
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
    
    <script>
    
    $(function () {
    $( '#table' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: 'td',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
    
    
    </script>
    
    <script>
    
    function Deleteqry(id)
{ 
  if(confirm("Are you sure you want to delete this row?")==true)
           window.location="workouts.php?del="+id;
    return false;
}
    
    
    </script>





  </body>
</html>

