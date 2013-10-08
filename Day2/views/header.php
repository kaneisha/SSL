<html>
	<head>
		<title>Shoe Runway</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<header>
		<a href="#" id="logo"><h1>Shoe Runway</h1></a>
		<div class="clearfix"></div>
		<div id="login"> <!--style="margin-left:800px;"-->
			<form action="?action=login" method="post">
			<input type="text" name="username_login" class="login" placeholder="Username">
			<input type="password" name="password_login" id="username_pwd" class="login" placeholder="Password">
			<input type="submit" id="login_button" value="Login">
			
			</form>
			
			<div style="color: #f00" id="error"><?php echo $loginErr;?></div>

			
		</div>
		<div class="clearfix"></div>


	</header>
