<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type = "text/css" href = "projeto_login_css.css"/>
	</head>
	<div class="container-fluid">
		<body style="background-color: white">
			<div class="container">
				<div class="login-box row" style="border-color: black">
					<a href="projeto_login.php"><img class= "col-sm-4" style="width:25%;" src="Ampersand Transparent.png"></a>
					<h3 class=" text-center text-white" style="padding-bottom: 20px;"> Dungeons and Dragons <p> Login </p></h3>
					<div class="col-sm-8">
						<form action="login.php" method="post">
							<label class="text-white col-sm-4"><b>Username</b></label>
		    				<input type="text" placeholder="Enter Username" name="user" required>

		    				<label class="text-white col-sm-4"><b>Password</b></label>
		    				<input type="password" placeholder="Enter Password" name="senha" required>
		    				<div class="col-sm-4"></div>
		    				<div class="col-sm-8">
		    					<button class="btn btn-primary" name="entrar" value="entrar" type="submit">Login</button>
			    				<a href="projeto_registro.php" class="btn btn-primary" type="submit">Registro</a>
		    				</div>
		    			</form>
	    			</div>
	    			
    			</div>

    
			</div>
		</body>
	</div>



</html>