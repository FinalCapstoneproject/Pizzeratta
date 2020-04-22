<!DOCTYPE html>
<?php
require ("mysqli_connect.php");//connect to mysql
session_start();

if(isset($_SESSION['errMsg'])){
    echo $_SESSION['errMsg'];
    echo $_SESSION['login'];
	
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    //create two variables
 $username = mysqli_real_escape_string($dbc, $_POST['username']);
 $password = mysqli_real_escape_string($dbc, $_POST['password']);
// sql query to select users

$q= "SELECT * FROM userinfo    where  username ='$username' and password= '$password'";
   
$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));// @ is used to display just errors

$num =mysqli_num_rows($r);

//
 if ($num== 1) {
     $row = mysqli_fetch_row($r);
     $_SESSION["login"]=true;
	 
    if($row[5]==1)
    {
		$_SESSION["username"]=$username;
		$_SESSION['errMsg'] = "Successfully login";
        header("Location:admin.php");
    }
     else
     {
		 $_SESSION["username"]=$username;
		//$_SESSION['errMsg'] = "Failed";
	
	 header("Location:index.php?userid=$username");
	 
     }
  } 
else 
{
    $_SESSION["login"]=false;//set session login to false
    $_SESSION['errMsg'] = "Invalid Login";
    //$_SESSION['errMsg'] = "Location:login.php";
     header("Location:login.php");
     
  }

}
?>

<!DOCTYPE html>
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
        <h1 class="header_main" >Login Here</h1>
        <form class="reg_form" action="login.php" method="post" id="login" name="fo">
            <p class="centers"><b>Username*</b></p>
        	<input type="text" name="username" placeholder="Enter Username" id="username" required>
        	<span></span><br>
            <p class="centers"><b>Password*</b></p>
            <input type="password" name="password" placeholder="Enter Password" id="password" required><br>
            <input type="submit" id="submit" name="submit" value="Login">
			
           
             <p class="center1"> <a href="register.php">Don't have an account> Register now </a></p>
            </form>
     
    </div>
        </div>
    </main>

    
    <!--footer-->
		
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


