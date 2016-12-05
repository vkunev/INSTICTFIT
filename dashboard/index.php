<?php
	session_start();

if (isset($_SESSION['username'])) {
    header("location: http://ptaa.gq/home.php");
}



    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and '$password'='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: home.php"); // Redirect user to home.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Main Navigation-->
<nav class="fixed-nav-bar">
<!--<nav class="navbar navbar-inverse">-->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ActiveAesthetic</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#section1">How it works</a></li>
                <li><a href="#section2">Features</a></li>
                <li><a href="#section3">Pricing</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <!---End Main Navigation-->



                <!--- Login form ----->
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="loginmodal-container">
                            <h1>Login to Your Account</h1><br>
                            <form class="form-signin" name="form1" method="post" action="login/checklogin.php">
                                <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
                                <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
                                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            </form>

                            <div class="login-help">
                                <a href="login/signup.php">Register</a> <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Login end-->
                <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
<!--</nav>-->
</nav>



<!-- Container Header-->
<div class="header-container">




    </div>






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<!-- Section 1 -->
<div class = "section1" id="section1">
    <h1>How it works</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique diam quis turpis vehicula, a efficitur ligula viverra. Fusce commodo eu odio vel volutpat. Mauris elementum efficitur enim non egestas. Quisque vitae lectus vel ante feugiat dignissim. Vestibulum tortor nibh, pellentesque ac facilisis sed, tristique ac libero. Integer accumsan lobortis tempus. Integer tristique dui mauris, id ornare massa aliquam semper. Fusce auctor leo id est consectetur, vel luctus nisl efficitur. Ut tortor elit, egestas elementum pretium eget, tristique efficitur neque. Mauris augue urna, bibendum non risus eu, porta placerat orci.</p>
    <p>Nulla magna dolor, malesuada nec massa ac, feugiat vehicula magna. Mauris eros purus, lobortis vitae egestas non, commodo ac quam. Donec nec massa in enim condimentum pulvinar. Maecenas nec libero non ligula accumsan vestibulum quis et magna. Curabitur varius sapien sed tellus tincidunt dignissim. Quisque scelerisque turpis nisi. Vestibulum sit amet neque in purus volutpat posuere sit amet at neque. Morbi iaculis eros a aliquet malesuada. Sed lobortis pharetra urna, vitae vehicula tortor bibendum sed. Sed suscipit accumsan ipsum. Maecenas nunc risus, condimentum non dolor in, luctus venenatis nibh. Curabitur lacinia ligula sapien, in dictum elit sodales in. Proin lorem augue, commodo a mauris sit amet, pulvinar efficitur nisl.</p>
    <p>Aliquam porta neque tristique lectus scelerisque molestie. Praesent imperdiet sollicitudin tempor. Fusce nulla turpis, rutrum venenatis justo id, dictum venenatis quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut rutrum rhoncus sapien, sit amet tincidunt leo. Nam imperdiet sagittis urna, id volutpat mauris. Integer eu porttitor dui. Ut tincidunt tortor lorem, ac mattis elit accumsan ut. Nullam sed finibus risus. Quisque non sapien mauris. Aliquam lorem risus, suscipit ut quam eget, volutpat pretium velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec eleifend diam, sed rutrum diam. Etiam scelerisque orci nec massa dictum, a accumsan dolor scelerisque. Aliquam leo risus, imperdiet eget turpis sit amet, euismod auctor leo. Morbi non tempus erat.</p>
    <p>Aenean imperdiet lacinia turpis nec aliquet. Phasellus placerat nulla cursus nisi gravida imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas a nibh lacinia, suscipit sem vel, fringilla orci. Phasellus commodo pellentesque iaculis. Duis interdum laoreet sapien ut eleifend. Curabitur faucibus commodo leo. Cras mollis mauris quis felis pretium, quis rutrum magna euismod. Mauris viverra lorem justo, sit amet ullamcorper tellus porta ut. Nullam sit amet purus sapien.</p>
</div>



<!-- Section 2 -->
<div class = "section2" id="section2">
    <h1>Features</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique diam quis turpis vehicula, a efficitur ligula viverra. Fusce commodo eu odio vel volutpat. Mauris elementum efficitur enim non egestas. Quisque vitae lectus vel ante feugiat dignissim. Vestibulum tortor nibh, pellentesque ac facilisis sed, tristique ac libero. Integer accumsan lobortis tempus. Integer tristique dui mauris, id ornare massa aliquam semper. Fusce auctor leo id est consectetur, vel luctus nisl efficitur. Ut tortor elit, egestas elementum pretium eget, tristique efficitur neque. Mauris augue urna, bibendum non risus eu, porta placerat orci.</p>
    <p>Nulla magna dolor, malesuada nec massa ac, feugiat vehicula magna. Mauris eros purus, lobortis vitae egestas non, commodo ac quam. Donec nec massa in enim condimentum pulvinar. Maecenas nec libero non ligula accumsan vestibulum quis et magna. Curabitur varius sapien sed tellus tincidunt dignissim. Quisque scelerisque turpis nisi. Vestibulum sit amet neque in purus volutpat posuere sit amet at neque. Morbi iaculis eros a aliquet malesuada. Sed lobortis pharetra urna, vitae vehicula tortor bibendum sed. Sed suscipit accumsan ipsum. Maecenas nunc risus, condimentum non dolor in, luctus venenatis nibh. Curabitur lacinia ligula sapien, in dictum elit sodales in. Proin lorem augue, commodo a mauris sit amet, pulvinar efficitur nisl.</p>
    <p>Aliquam porta neque tristique lectus scelerisque molestie. Praesent imperdiet sollicitudin tempor. Fusce nulla turpis, rutrum venenatis justo id, dictum venenatis quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut rutrum rhoncus sapien, sit amet tincidunt leo. Nam imperdiet sagittis urna, id volutpat mauris. Integer eu porttitor dui. Ut tincidunt tortor lorem, ac mattis elit accumsan ut. Nullam sed finibus risus. Quisque non sapien mauris. Aliquam lorem risus, suscipit ut quam eget, volutpat pretium velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec eleifend diam, sed rutrum diam. Etiam scelerisque orci nec massa dictum, a accumsan dolor scelerisque. Aliquam leo risus, imperdiet eget turpis sit amet, euismod auctor leo. Morbi non tempus erat.</p>
    <p>Aenean imperdiet lacinia turpis nec aliquet. Phasellus placerat nulla cursus nisi gravida imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas a nibh lacinia, suscipit sem vel, fringilla orci. Phasellus commodo pellentesque iaculis. Duis interdum laoreet sapien ut eleifend. Curabitur faucibus commodo leo. Cras mollis mauris quis felis pretium, quis rutrum magna euismod. Mauris viverra lorem justo, sit amet ullamcorper tellus porta ut. Nullam sit amet purus sapien.</p>

</div>



<!-- Section 3 -->
<div class = "section3" id="section3">
    <h1>Pricing</h1>


<!--Pricing-->


        <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            <sup>$</sup>99
                            <small>per quarter</small>
                        </div>
                        <div class="type">
                            SMALL PLAN
                        </div>
                        <ul>

                            <li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
                            <li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
                            <li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
                        </ul>
                        <div class="pricing-footer">

                            <a href="#" class="btn db-button-color-square btn-lg">BOOK ORDER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-two popular">
                        <div class="price">
                            <sup>$</sup>159
                            <small>per quarter</small>
                        </div>
                        <div class="type">
                            MEDIUM PLAN
                        </div>
                        <ul>

                            <li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
                            <li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
                            <li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
                        </ul>
                        <div class="pricing-footer">

                            <a href="#" class="btn db-button-color-square btn-lg">BOOK ORDER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-three">
                        <div class="price">
                            <sup>$</sup>799
                            <small>per quarter</small>
                        </div>
                        <div class="type">
                            ADVANCE PLAN
                        </div>
                        <ul>

                            <li><i class="glyphicon glyphicon-print"></i>30+ Accounts </li>
                            <li><i class="glyphicon glyphicon-time"></i>150+ Projects </li>
                            <li><i class="glyphicon glyphicon-trash"></i>Lead Required</li>
                        </ul>
                        <div class="pricing-footer">

                            <a href="#" class="btn db-button-color-square btn-lg">BOOK ORDER</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- End Pricing   -->









</div>

<!---Scroll Spy Script-->

<script>
    $(document).ready(function(){
        // Add scrollspy to <body>
        $('body').scrollspy({target: ".navbar", offset: 50});

        // Add smooth scrolling on all links inside the navbar
        $("#myNavbar a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            }  // End if
        });
    });
</script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


    <!-- The AJAX login script -->
<!--    <script src="login/js/login.js"></script>-->

<!---End Scroll Spy Script-->
<?php } ?>
</body>
</html>
