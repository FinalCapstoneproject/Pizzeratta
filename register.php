<!DOCTYPE html>
<?php

require ("mysqli_connect.php");//connect to mysql


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    //create two variables
 $username = mysqli_real_escape_string($dbc, $_POST['username']);
 $password = mysqli_real_escape_string($dbc, $_POST['password']);
 $confirmpassword = mysqli_real_escape_string($dbc, $_POST['confirmpassword']);
 $email = mysqli_real_escape_string($dbc, $_POST['email']);
 
// sql query to select users

$q= "SELECT * FROM userinfo where  username ='$username'";
   
$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));// @ is used to display just errors

//now start the session
$num= mysqli_num_rows($r);
   echo $num;
if($num>1){
   
	echo ' <div class="alert alert-danger container" style="width:500px;" role="alert">Username Already Exists</div>';
    //$_SESSION['errMsg'] = "Username already exists";
     header("Location:register.php");
}
//    
    else{
        
        $reg= "insert into userinfo (username, password,confirmpassword,email,isadmin) values('$username', '$password','$confirmpassword','$email','0')";
        mysqli_query($dbc, $reg);
       echo ' <div class="alert alert-success container" style="width:500px;" role="alert">Registration Successful</div>';
    }
}
?>

<html>
<head>
    <title>Home::Pizzeratta</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="recipes, canada recipes, burger, pizza" />
    <meta name="description" content="Find Traditional Cooking Recipes to Cook & Serve Delicious Best Foods" />

    <meta name="audience" CONTENT="all">
    <meta name="copyright" CONTENT="by The Food Recipes">
    <meta name="country" CONTENT="canada, india">

<link href="style/bootstrap.min.css" rel="stylesheet">
 <link type="text/css" rel="stylesheet" href="style/main.css" />
</head>
<body>
		
<main class="container1" style="max-width:100%; width:100%;">
        <div class="row w-100">
            <div class="col-md-3">
                <header>
                    <A href="index.php" class="logo">PIZZERATTA</A>
                    <section class="nav mt-4">
                        <button class="nav-button" id="drop">
                            <hr>
                            <hr></button>
                        <nav class="w-100">

                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="store.php">Menu</a></li>
                            </ul>
                        </nav>

                    </section>

                </header>
            </div>
						
			
						
			
        <div class="loginbox">
        <h1 class="header_main" >SIGN UP</h1>
        <form class="reg_form" method="post" action="register.php" id="login">
      
        <input type="text" name="username" placeholder="Name" required value=""><span></span><br><br>
        <input type="text" name="email" placeholder="Email id" id="e" required><span id="show1"></span><br><br>
        <input type="password" name="password" placeholder="Password" id="pass" required><span></span><br><br>
        <input type="password" name="confirmpassword" placeholder="Confirm password" id="cpass" required><span id="show"></span><br><br>
		<input type="submit" name="submit" value="submit" id="sub"><br>
        
		<p class="message">Already Registered?&nbsp;<a href="login.php">LOGIN</a></p>  
    </form>
      
    </div>
	</div>
</main>
    
		
	 <footer class="footer">
        <div class="row">


            <div class="col-md-6">
                <nav>
                    <ul>
                        <li>
                            <h5 class="mb-3 mt-0"><a class="logo" href="index.html"><img src="images/logo21.png" alt="Pizza"></a></h5>
                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="store.php">Menu</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login/Register</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3">
                &copy; 2020 www.Pizzeratta.com
            </div>
            <div class="col-md-3">
                An elite food publisher<br>
                <span>Pizzeratta - Created for Pizzeratta</span>
            </div>
        </div>

    </footer>
</body>
</html>