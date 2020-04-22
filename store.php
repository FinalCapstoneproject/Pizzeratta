<?php

session_start();


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
                <!--Product Display-->
                <div class="col-md-9">
                    <div class="middle">
                        <div class="container">
                            <div class="row">
                  <!--<div class="col-md-6 products-grid-left">-->
                                <div>
                                    <div class="products-grid-lft">
                                        <em>
                                            <h1 style="text-align:center; color:brown;font-style:italic;font-family: Times;padding-left:10%;font-size: 6em;">Menu</h1>
                                        </em><br><br>
                                        <?php
                                         require('mysqli_connect.php');
                        
                        $q =  "SELECT * FROM store.products";
                        $r  = mysqli_query($dbc, $q);
                        
						$pid = 'id';
						$pizza_name = 'product_name';
						$pizza_desc = 'description';
						$pizza_price = 'price';
						$pizza_img = 'image';

						$form = "";
						
						if(mysqli_num_rows($r) > 0) {

						while($row = mysqli_fetch_array($r)) {
								$pid = $row['id'];
								$pizza_name = $row['product_name'];
								$pizza_desc = $row['description'];
								$pizza_price = $row['price'];
								$pizza_img  = $row['image'];
                        


								
				        $form .= "<div class='products' style='width:60%; margin:auto;border:2px solid;'>
								<div class='pname' style='text-align:center;'>
				                <em><h4 style='font-weight:bold;color:brown;font-size:2em;'><strong>$pizza_name</strong></h4></em><br>
								</div>
								<div class='ppic' style='text-align:center;'>
								<img src=$pizza_img class='Img' style='height:80%; width:30%'>
								</div><br>
								<div class='pdesc' style='text-align:center;'>
				                <p style='font-weight:bold;color:brown;font-size:1.5em;'><b>Description:</b><br><p style='text-align:justify;color:brown;font-size:1.2em;padding-left:40px;padding-right:40px;'><em>$pizza_desc</em></p></p>
								</div><br>
                                                
                                <div class='pprice' style='text-align:center;'>
				                <p style='font-weight:bold;color:brown;font-size:1.5em;'>Price: $pizza_price</p><br>
								</div>
												
                                
												
								

				<div class='buyform' style='text-align:center;'>
				<a href='product.php?id=$pid'>
				<button type='submit' name='submit' value='Buy' class='btn btn-primary' style='padding: 20px;
				width: 200px;'>Buy Now</button>
				</a>
				</div><br>
				</div>
				<hr>";
       }
				echo $form;
       }
						?>
                                <div class='posts_area'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


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
