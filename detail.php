<!DOCTYPE html>
<?php 

    require('mysqli_connect.php');
	$error = array();

	if(isset($_GET['id'])) {
     
		$pid = '';
        $pizza_name = '';
        $pizza_price = '';
        $pizza_img = '';
        $pizza_desc= '';
		$pid = $_GET['id'];
    
        
        $q = "SELECT * FROM store.products WHERE id = $pid";
		$r = mysqli_query($dbc, $q);
        echo mysqli_error($dbc);
		$db_form_query_results = mysqli_fetch_array($r);

		$pizza_name = $db_form_query_results['product_name'];
		$pizza_price = $db_form_query_results['price'];
        $pizza_desc = $db_form_query_results['description'];
		$pizza_img = $db_form_query_results['image']; 
	}

echo mysqli_error($dbc);
 ?>


<html>

<head>
    <title>Home::Pizzeratta</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                
           
            <div class="col-md-9">
               <main class="middle">
        <div class=" text-center">
            <div class='img_disp' style=" height: 20%; width: 100%; ">
                <img src="<?php echo $pizza_img; ?>" style=" height: 20%; width: 20%;">
            </div>


            <label class="control-label col-sm-4" >Pizza Name:</label>
            <div class="col-sm-4">
                <input type="text" style="margin-left:320px;" class="form-control" value="<?php echo $pizza_name; ?>" disabled="disabled">
            </div>

            <div>
                <label class="control-label col-sm-4">Pizza Price:</label>
                <div class="col-sm-4">
                    <input type="text" style="margin-left:320px;" class="form-control" value="<?php echo $pizza_price; ?>" disabled="disabled">
                </div>
               
                <div>
                    <label class="control-label col-sm-4">Pizza Description:</label>
                    <div class="col-sm-10">
                        <input type="text" style="height:100px;width:1000px" class="form-control" value="<?php echo $pizza_desc; ?>" disabled="disabled">
                    </div>
                </div>
            
            </div>
            <br>
            <div class='confirmation col-sm-12'>
                <br>

                <div class='form'>
                    <form class="form-horizontal" action='checkout.php?id="<?php echo $pid; ?>"' method='post' value="<?php echo $pid; ?>">

                        <?php if(isset($_POST['submit'])){
                            $pizzaid= $_POST[$pid];
                        }
                        ?>
                        <input type="hidden" name="id" value="<?php echo $pid; ?>">
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                                <button type="submit" class="btn btn-primary" name="submit" style="margin-left:440px;">Buy</button>
                                            </div>
                    </form>
                </div>
            </div>
        </div>
        </main>
            </div>
        </div>
    </main>



<!--?php
require('mysqli_connect.php');
?>
<content>
<h1><!--?php echo $row['product_name'] ?></h1>
<h3><!--?php echo $row['product_desc'] ?></h3>
<h4><!--?php echo $row['price'] ?></h4>
<img src="images/<!--? echo $row['image' ] ?>" id ='mainImg'>
</content-->
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
