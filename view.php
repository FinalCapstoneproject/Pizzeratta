<!DOCTYPE html>
<?php
    $name='';
$msg='';
    include("function.php");

    $contactid = $_GET['contactid'];

    $query ="UPDATE `customers` SET `Status` = 'read' WHERE `id` = $contactid;";
    performQuery($query);

    $query = "SELECT * from `customers` where `id` = '$contactid';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $i){
            if($i['type']=='Order'){
				$name=$i['fname'];
				$msg=$i['comments'];
                
            }
        }
    }
    
?>
<html>

<!------ Include the above in your HEAD tag ---------->


<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
	<style>
		/*notification*/
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url(images/background1.jpg);
background-size: cover;
background-repeat: no-repeat;
height: 100%;
    
    
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.card-header h3{
color: white;
}

.input-group-prepend span{
width: 50px;
background-color: #4863A0;
color: white;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.Back_btn{
color: black;
background-color: #4863A0;
	color: white;
width: 100px;
}

.Back_btn:hover{
color: steelblue;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
/*notification end*/
	</style>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Notification</h3>
				
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text"  class="form-control" readonly value="<?php echo $name;?>">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-comment"></i></span>
						</div>
						<input type="Comment" class="form-control" readonly value="<?php echo $msg;?>">
					</div>
					
					<div class="form-group">
				
						<a href="admin.php" class="btn float-right Back_btn" >Back</a>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>