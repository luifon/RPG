<!DOCTYPE html>
<html>
	<head>
		<title> Dungeons and Dragons Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type = "text/css" href = "projeto_login_css.css"/>
	</head>
	<div class="container-fluid">
		<body style="background-color: white">
			<div class="container">
				<div class="login-box row" style="border-color: black">
					<a href="projeto_login.php"><img class= "col-sm-4" style="width:25%;" src="Ampersand Transparent.png"></a>
					<h3 class=" text-center text-white" style="padding-bottom: 20px;"> Dungeons and Dragons <p> Registro </p></h3>
					<div class="col-sm-9">
						<form method="POST" action="cadastro.php">
							<label class="text-white col-sm-4"><b>Username</b></label>
		    				<input type="text" placeholder="Enter Username" name="user" required>

		    				<br>

		    				<label class="text-white col-sm-4"><b>Password</b></label>
		    				<input type="password" placeholder="Enter Password" name="senha" required>
		    				<br>
		    				<label class="text-white col-sm-4"><b>E-mail</b></label>
		    				<input type="email" placeholder="Enter Email" name="email" required>
		    				<br>
		    				<p class="col-sm-4"></p> 
		    				<button class="col-sm-4 btn btn-primary" type="submit" name="cadastrar" value="cadastrar">Registrar</button>
	    				</form>
	    			</div>
    			</div>

    
			</div>
		</body>
	</div>



</html>