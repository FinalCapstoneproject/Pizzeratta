
<!DOCTYPE html>
<html>
<head>
	<title> Nodues </title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="style/walk.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".lnk_menu").click(function(){
				title = $(this).attr('title');
				$(".hide").fadeIn(1000);
				$(".pop").fadeIn(1000);
				$(".dataa").load(title+'.php');
			});
		});
		$(document).ready(function(){	
			$(".notice_board_box").delay(1000).slideDown(4000);
			$(".closePop").click(function(){
				$(".pop,.hide").slideUp(1000);
			});
		});
	</script>
		<style>
		/*notification*/


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



.Back_btn{
color: black;
background-color: #4863A0;
	align-content: center;
	margin-top: 500px;
	margin-left: 600px;
	color: white;
width: 200px;
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
</head>
<body>
<div class="hide"></div>
<div class="pop">
	<div class="closePop"></div>
	<div class="dataa"></div>
</div>
	<!-- WAlking man design Starts here -->
		<div class="container_man">
			<div class="center">
				<div class="head_box">
					<div class="head">
						<!-- <div class="eyes left">
							<div class="eye "></div>
						</div>
						<div class="eyes right">
							<div class="eye"></div>
						</div>
						<div class="nose"></div>
						<div class="teeth"></div> -->
					</div>
				</div>
				<div class="body_box">
					<div class="body"></div>
					<div class="arm left">
						<div class="aadi lft"></div>
					</div>
					<div class="arm right">
						<div class="aadi rgt"></div>
					</div>
					<div class="notice_board_box">
						<div class="notice_board_center">
							<div class="notice_board" style="align-content: center; color: white; font-size: 28px; ">Enjoy Your Pizza!!!!!</div>
						</div>
					</div> 
					
				</div>
				<div class="fotter_box">
					<div class="leg lfts">
						<div class="hlf dil">
							<div class="foot lht"></div>
						</div>
					</div>
					<div class="leg rgts">
						<div class="hlf hil">
							<div class="foot rht"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- WALKING man design Ednz here -->
	<div class="form-group">
				
						<a href="index.php" class="btn Back_btn" >Return to Store</a>
					</div>
	
</body>
</html>