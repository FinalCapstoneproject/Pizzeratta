<!DOCTYPE html>
<?php

session_start();
 include("function.php");
require ("mysqli_connect.php");//connect to mysql

if(empty($_SESSION["username"]))
{
header('location:index.php');
}


$pizzaid=0;
$update=false;
$pizzaname='';
$description='';
$price='';



if(!empty($_GET['pizzaid'])){
	$update=true;
	$q= 'SELECT * FROM products where  id ="'.$_GET['pizzaid'].'"';
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	 while ($row=mysqli_fetch_array($r)){
			 
			  
			$pizzaname=$row['product_name'];
			  $image=$row['image'];
               $description=$row['description'];
               $price=$row['price'];
}
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
    
    //create two variables
 $pizzaname = $_POST['pizzaname'];
 $description = $_POST['description'];
 $price = $_POST['price'];
	 $image = mysqli_real_escape_string($dbc,($_FILES['image']['name']));


       $target_file=basename($_FILES['image']['name']);
	
	
	
	
	$q= "SELECT * FROM products where  product_name ='$pizzaname'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
	
	
	if((isset($_FILES['image'])) ||!empty($pizzaname) || !empty($description)|| !empty($price))
	    
		{
		 if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) 		 
    {
			 if($update==true)
		{
			$pizzaid= $_GET['pizzaid'];

$pizzaname = $_POST['pizzaname'];
 $description = $_POST['description'];
 $price = $_POST['price'];
$image = mysqli_real_escape_string($dbc,($_FILES['image']['name']));
$q= "UPDATE  products set product_name='$pizzaname',image='$image',description='$description' where id='$pizzaid'";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
echo $q;


	header('location:admin.php');
		}
		else{
//		insert the data to database
    	$q="insert into products(product_name,image,description,price)values('$pizzaname','$image','$description','$price')";
	
			 
//		print msg f successfully done otherwise print failure
		if ($dbc->query($q) === TRUE) 
		{
    		echo ' <div class="alert alert-primary container" style="width:100%;" role="alert">New record created successfully</div>';
		}
		else
		{
				echo ' <div class="alert alert-danger container" style="width:100%;" role="alert">Failure</div>';
		}
		}
		 }
		}	
	else
	{
		
		echo ' <div class="alert alert-primary container" style="width:500px;" role="alert"><h3>All fields are mandatory</h3></div>';
	}
	
			
	

       }
	
       

?>


<html>

<head>
<title>Home::Pizzeratta</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="recipes, canada recipes, burger, pizza" />
<meta name="description" content="Find Traditional Cooking Recipes to Cook & Serve Delicious Best Foods" />


	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<meta name="audience" CONTENT="all">
<meta name="copyright" CONTENT="by The Food Recipes">
<meta name="country" CONTENT="canada, india">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>

<link href="style/bootstrap.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style/main.css" />

</head>
<style>
	/*loader*/
.loader{
	border: 16px solid #f3f3f3;
	border-radius: 50%;
	border-top: 16px solid #3498db;
	align-content: center;
	position: absolute;
	left: 25%;
	top: 40%;
	width: 100px;
	height: 100px;
	margin-left: 22%;
	-webkit-animation: spin 2s linear infinite;
	/* Safari */
	animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
	0% {
		-webkit-transform: rotate(0deg);
	}

	100% {
		-webkit-transform: rotate(360deg);
	}
}

@keyframes spin {
	0% {
		transform: rotate(0deg);
	}

	100% {
		transform: rotate(360deg);
	}
}

.containerload {
	display: none;
}

/*end loader*/


	</style>
<!--    loader-->

<script>
    $(window).on('load', function() {
		
        setTimeout(function() {
			//debugger;
            $('.loader').css('display', 'none');
            $('.containerload').css('display', 'block');
        }, 1000);
    });

</script>


	
						<head>
    

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
						<div class="loader"></div>
	<div class="containerload">
	
	<div class="col-md-9">
               <main class="middle">
        <div class=" text-center">
								
								<!--notification-->
								<div style="float:right; margin-top:100px;">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
											Notifications &nbsp;<i class="fa fa-bell"></i>
											<?php
                $query = "SELECT * from `customers` where `Status` = 'unread' order by `date` DESC";
                if(count(fetchAll($query))>0){
				               ?>
					<span class="badge badge-light"><?php echo count(fetchAll($query)); ?></span>
				<?php
                }
                    ?>


										</button>
										<!--									fetch dropdown list-->

										<div class="dropdown-menu" aria-labelledby="dropdown01">
											<?php
                $query = "SELECT * from `customers` order by `date` DESC";
                 if(count(fetchAll($query))>0){
                     foreach(fetchAll($query) as $i){
                ?>
				<a style="
                         <?php
                            if($i['Status']=='unread'){
                                echo "font-weight:bold;";
                            }
                         ?>
                         " class="dropdown-item" href="view.php?contactid=<?php echo $i['id'] ?>">
										<small><i><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></i></small><br />
												<?php 
                  
                if($i['type']=='Order'){
                    echo $i['fname'];
                }
                  
                  ?>
											</a>
											<div class="dropdown-divider"></div>
											<?php
                     }
                 }else{
                     echo "No Records yet.";
                 }
                     ?>
										</div>
									</div>
								</div>

							</div>

						</div>

                    </section>

                </header>
            </div> 

										


            <div class="col-md-9">


                <main class="middle">
	
		<div class="addpizza">
			<h1>Add Pizza</h1>
			<form method="post" enctype="multipart/form-data">

				<input type="hidden" name="pizzaid" value="<?php echo $pizzaid; ?>">

				<label>Pizza Name</label>
				<input type="text" class="form-control" id="pizzaname" placeholder="Enter Name" name="pizzaname" value="<?php echo $pizzaname; ?>">

				<label>Add Image</label>
				<input type="file" class="form-control" id="image" value="<?php echo $image; ?>" name="image" required>

			

				<label>Description:</label>
				<textarea rows="4" cols="50" type="textfield" class="form-control" id="description" placeholder="Enter Description" name="description"><?php echo $description; ?></textarea>

				<label>Price:</label>
				<input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo $price; ?>">
				<br>
				<?php
	   if($update == true):
	   ?>
				<center> <button type="submit" class="btn btn-primary" name="update">Update Pizza</button></center>
				<?php else: ?>
				<center> <button type="submit" name="add" class="btn btn-primary">Add Pizza</button></center>
				<?php endif;?>
			</form>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr class="bg-primary">
					<th>Pizza Name</th>
					<th>Image</th>
					<th>Description</th>
					<th>price</th>
					<th>Action</th>
				</tr>
			</thead>


			<?php
					$results_per_page=10;
                  $q= "SELECT * FROM products ";
   
	$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
			$number_of_results = mysqli_num_rows($r);

//		determine number of total pages available
			$number_of_pages = ceil($number_of_results/$results_per_page);
//			determine which page number visitor is currently on
			if(!isset($_GET['page']))
			{
				$page=1;
			}
			else{
				$page=$_GET['page'];
			}
//			determine the sql limit starting number for the results on the displaying page
			$this_page_first_result = ($page-1)*$results_per_page;
//			retrieveselected results from the datbase and display them on page
			$q="select* from products LIMIT " . $this_page_first_result . ',' .$results_per_page;
			$r= @mysqli_query($dbc, $q) or die(mysqli_error($dbc));
//			fetch the data
			    while ($row=mysqli_fetch_array($r)){
			  
              $pizzaname=$row['product_name'];
			  $image=$row['image'];
               $description=$row['description'];
               $price=$row['price'];
			
          echo '<tr>';
          echo '<td>'.$pizzaname.'</td>';
			       echo '<td>';
			  		
				   echo '<img src='.$image.' height="200" width="200">';
				   echo '</td>';
          
          echo '<td>'.$description.'</td>';
          echo '<td>$'.$price.'</td>';
        echo '<td>'; 
			 echo '<a href="admin.php?pizzaid='.$row['id'].'" class="btn btn-primary">Edit</a>';
			echo '&nbsp';
			 echo '<a href="delete.php?pizzaname='.$row['product_name'].'" class="btn btn-danger">Delete</a>';
				  echo'</td>';
          echo '</tr>';
          }
//			display the link to the pages
			for($page=1;$page<=$number_of_pages;$page++)
			{
				echo '<a href="admin.php?page=' .$page .'">'."   " .$page .  '</a>';
			}
          ?>
		</table>
	</div>
</main>
</div>
 
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
