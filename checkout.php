<!DOCTYPE html>

<?php

session_start();
require ("mysqli_connect.php");
include("function.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
if(!empty($_POST['Fname'])){
	 $firstname = $_POST['Fname'];
	 $lastname = $_POST['Lname'];
	 $emailid = $_POST['Email'];
    $telephone = $_POST['Phone'];
    $Country = $_POST['country'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $Zipcode = $_POST['zipcode'];
   
	
//	query to select all the data from table
   $q= "SELECT * FROM customers";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
//	check if data is not empty then execute insert query
	
	if(!empty($firstname) || !empty($lastname)|| !empty($email)|| !empty($telephone)||!empty($Country) || !empty($City)|| !empty($State)|| !empty($Zipcode)){
		//insert the data to database
       $q="Insert into customers(fname,lname,phone,email,country,city,state,zipcode) values('$firstname','$lastname',
       '$telephone','$emailid','$Country','$City','$State','$Zipcode')";

		if ($dbc->query($q) === TRUE) 
		{
    		echo ' <div class="alert alert-success container" style="width:500px;" role="alert">New record created successfully</div>';
            	
		}
		else
		{
				echo ' <div class="alert alert-danger container" style="width:500px;" role="alert">Failure</div>';
		}
		}
}
	
}
/*<?php
session_start();

require ("mysqli_connect.php");//connect to mysql

if(isset($_POST['save'])){

  
    //create two variables
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $country = $_POST['country'];
 $city = $_POST['city'];
 $state = $_POST['state'];
 $zipcode = $_POST['zipcode'];

 
// sql query to select customer


$sql="INSERT into customers (id,fname,lname,phone,email,country,city,state,zipcode)
VALUE('','$fname','$lname','$phone','$email','$country','$city','$zipcode','$state')";

if($sql){
   echo "Data inserted successfully";
}else{
   echo "Failed to insert";
}
}
   
?>*/
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>Pizzeratta</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon2.png">
    <!-- Bootstrap core CSS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style/main.css" />
    <link href="style/osahan2.min.css" rel="stylesheet">
</head>

<body>
    <main class="container1" style="max-width:1170px; width:100%;">
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



<div class="col-md-8">
<main class="middle">
 <section class="checkout-page section-padding">
<div class="container2">
<div class="col-md-12">
<div class="checkout-step">
<div class="accordion" id="accordionExample">
<div class="card checkout-step-one">
 <div class="card-header" id="headingOne">
    <h5 class="mb-0">
    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <span class="number">1</span> Phone Number
    </button>
    </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
    <div class="card-body">
    <p>We need your phone number so that we can update you about your order.</p>
    <form>
    <div class="form-row align-items-center">
    <div class="col-auto">
    <label class="sr-only">phone number</label>
    <div class="input-group mb-2">
    <div class="input-group-prepend">
    <div class="input-group-text"><span class="mdi mdi-cellphone-iphone"></span></div>
    </div>
    <input type="text" class="form-control" placeholder="Enter phone number">
    </div>
    </div>
    <div class="col-auto">
 <button type="button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-secondary mb-2 btn-lg">NEXT</button>
 </div>
</div>
</form>
</div>
</div>
</div>
<div class="card checkout-step-two">
<div class="card-header" id="headingTwo">
<h5 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<span class="number">2</span> Customer Detail
</button>
 </h5>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
<form action="" method="post">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">First Name <span class="required">*</span></label>
<input class="form-control border-form-control" name="Fname" placeholder="First Name" type="text" value="<?php if (isset($Fname)) echo $Fname ?>">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Last Name <span class="required">*</span></label>
<input class="form-control border-form-control" name="Lname" placeholder="Last Name" type="text" value="<?php if (isset($Lname)) echo $Lname ?>">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Phone <span class="required">*</span></label>
<input class="form-control border-form-control" name="Phone" placeholder="123 456 7890" type="text" value="<?php if (isset($Phone)) echo $Phone ?>">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Email Address <span class="required">*</span></label>
<input class="form-control border-form-control " name="Email" placeholder="Email Address" type="email" value="<?php if (isset($Email)) echo $Email ?>">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Country <span class="required">*</span></label>
<input class="form-control border-form-control" name="country" type="text" value="<?php if (isset($Country)) echo $Country ?>">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">City <span class="required">*</span></label>
<input class="form-control border-form-control"name="city" type="text" value="<?php 
    if (isset($City)) echo $City ?>">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Zip Code <span class="required">*</span></label>
<input class="form-control border-form-control" name="zipcode" placeholder="123456" type="text" value="<?php 
        if (isset($zipcode)) echo $zipcode ?>">
         </div>
     </div>
     <div class="col-sm-6">
         <div class="form-group">
    <label class="control-label">State <span class="required">*</span></label>
    <input class="form-control border-form-control" name="state" type="text" value="<?php if (isset($state)) echo $state ?>">
     </div>
     </div>
    </div>
<div class="form-group">
<label class="control-label"><h3>Payment</h3></label>
</div>
<div class="form-group">
<label class="control-label">Card Number</label>
<input class="form-control border-form-control" value="" placeholder="0000 0000 0000 0000" type="text">
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label class="control-label">Month</label>
<input class="form-control border-form-control" value="" placeholder="01" type="text">
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label class="control-label">Year</label>
<input class="form-control border-form-control" value="" placeholder="15" type="text">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label class="control-label">CVV</label>
<input class="form-control border-form-control" value="" placeholder="135" type="text">
</div>
</div>
</div>
                                                       
<button type="submit" name="submit" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="btn btn-secondary mb-2 btn-lg">NEXT</button>
</form>
 </div>
</div>
</div>
<div class="card">
<div class="card-header" id="headingThree">
<h5 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
<span class="number">3</span> Order Complete
</button>
</h5>
</div>
<div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="card-body">
<div class="text-center">
<div class="col-lg-10 col-md-10 mx-auto order-done">
<i class="mdi mdi-check-circle-outline text-secondary"></i>
<h4 class="text-success">Congrats! Your Order has been Accepted..</h4>
<p>
<?php 

    
	$error = array();

	if(isset($_GET['id'])) {
     
		$pid = '';
        $pizza_name = '';
        $pizza_img = '';
        $pid = $_GET['id'];
    
        
        $q = "SELECT * FROM store.products WHERE id = $pid";
		$r = mysqli_query($dbc, $q);
        echo mysqli_error($dbc);
		$db_form_query_results = mysqli_fetch_array($r);

		$pizza_name = $db_form_query_results['product_name'];
		$pizza_img = $db_form_query_results['image']; 
	}

echo mysqli_error($dbc);
 ?>
<div class="col-md-9">
<main class="middle">
<div class=" text-center">
<div class='img_disp' style=" height: 20%; width: 100%; ">
<img src="<?php echo $pizza_img; ?>" style=" height: 20%; width: 20%;">
</div>
<label class="control-label col-sm-4"><?php echo $pizza_name; ?></label>
</p>
</div>
<div class="text-center">
<a href="mypizza.php"><button type="submit" class="btn btn-secondary mb-2 btn-lg">Continue</button></a>
</div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
</div>
</form>
</div>
    </main>

</body>

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
