<!DOCTYPE html>
<html>
	<head>
		<title> Dungeons and Dragons</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type = "text/css" href = "projeto_login_css.css"/>
		<script src="randomNumber.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
	</head>
	<div class="container-fluid">
		<body style="background-color: black">
			<div class="container">
				<div class="login-box row">
					<div class="col-sm-12">
						<p class="text-white" >
							<form method="POST" action="login.php"><p class="text-white" style="position: absolute; right:0;"><?php session_start(); echo $_SESSION['user'];?><button class="btn btn-primary" name="logout" value="logout" type="submit"> Logout</button></p></form>
						</p>
						<a href="projeto_login.html"><img class= "col-sm-4" style="width:25%;" src="Ampersand Transparent.png"></a>
						<h3 class=" text-center text-white" style="padding-bottom: 20px; margin-top: 50px;"> Dungeons and Dragons <p>Crie ou atualize seu personagem</p></h3>
					</div>
					<div class="row">
						<p class="col-sm-5 make-a-padding"> </p>
						<button onclick="randomNumber()" id="random" class="btn btn-primary">Randomize os atributos</button>
					</div>


					<form action="cadastroPersonagem.php" method="POST">
						<div class="personagem text-white col-sm-4">
							<p class="text-center">Nome do Personagem</p>
							<input id="nome_personagem" name="nome_personagem" placeholder="Luiz Fernando" required/>
						</div>
						<div class="personagem text-white col-sm-4">
							<p class="text-center">Classe</p>
							<select name="hero_class"	id="hero_class" class="col-sm-12">
								<option value = "Barbarian"> Barbarian </option>
								<option selected = "selected" value = "Bard"> Bard </option>
								<option value = "Cleric"> Cleric </option>
								<option value = "Druid"> Druid </option>
								<option value = "Fighter"> Fighter </option>
								<option value = "Monk"> Monk </option>
								<option value = "Paladin"> Paladin </option>
								<option value = "Ranger"> Ranger </option>
								<option value = "Rogue"> Rogue </option>
								<option value = "Sorcerer"> Sorcerer </option>
								<option value = "Warlock"> Warlock </option>
								<option value = "Wizard"> Wizard </option>
							</select>
						</div>
						<div class="personagem text-white col-sm-4">
							<p class="text-center"> Alinhamento Moral</p>
							<!-- <input name="alin"	id="alin" class="col-xs-12" placeholder="Chaotic Evil"/> -->
							<select name="alin"	id="alin" class="col-sm-12">
								<option value = "Lawfull Good"> Lawfull Good </option>
								<option value = "Neutral Good"> Neutral Good </option>
								<option value = "Chaotic Good"> Chaotic Good </option>
								<option value = "Lawfull Neutral"> Lawfull Neutral </option>
								<option value = "True Neutral"> True Neutral </option>
								<option value = "Chaotic Neutral"> Chaotic Neutral </option>
								<option value = "Lawfull Evil"> Lawfull Evil </option>
								<option value = "Neutral Evil"> Neutral Evil </option>
								<option selected="selected" value = "Chaotic Evil"> Chaotic Evil </option>
							</select>
							<p class="col-sm-3"></p>
						</div>
						<div class="personagem text-white col-sm-3">
							<p class="text-center col-xs-12"> HP</p>
							<input name="hp" id="hp" class="col-xs-12" placeholder="30" required />
						</div>
						<div class="personagem text-white col-sm-3">
							<p class="text-center col-xs-12"> Armor</p>
							<input name="armor" id="armor" class="col-xs-12" placeholder="30" required/>
						</div>
						<div class="personagem text-white col-sm-3">
							<p class="text-center col-xs-12"> Iniciativa</p>
							<input name="init" id="init" class="col-xs-12" placeholder="30" required/>
						</div>
						<div class="personagem text-white col-sm-3">
							<p class="text-center col-xs-12"> Race</p>
							<select name="race" id="race" class="col-xs-12">
								<option value="Humano"> Humano </option>
								<option value="Elfo"> Elfo </option>
								<option selected="selected" value="Anao"> Anao </option>
								<option value="Orc"> Orc </option>
								<option value="Halfling"> Halfling </option>
								<option value="Gnome"> Gnome </option>
							</select>
						</div>
						<div class="atributos margin-bottom">
							<div class="personagem text-white col-sm-4">
								<p class="text-center col-xs-12"> Strenght</p>
								<input name="stre" id="stre" class="col-xs-12 atri" placeholder="de 3 a 18" required/>
							</div>
							<div class="personagem text-white col-sm-4">
								<p class="text-center col-xs-12"> Agility</p>
								<input name="agi" id="agi" class="col-xs-12 atri" placeholder="de 3 a 18" required/>
							</div>
							<div class="personagem text-white col-sm-4">
								<p class="text-center col-xs-12"> Intelect</p>
								<input name="inte" id="inte" class="col-xs-12 atri" placeholder="de 3 a 18" required/>
							</div>
							<div class="personagem text-white col-sm-4">
								<p class="text-center col-xs-12"> Constitution</p>
								<input name="const" id="const" class="col-xs-12 atri" placeholder="de 3 a 18" required/>
							</div>
							<div class="personagem text-white col-sm-4">
								<p class="text-center col-xs-12"> Wisdom</p>
								<input name="wis" id="wis" class="col-xs-12 atri" placeholder="de 3 a 18" required/>
							</div>
							<div class="personagem text-white col-sm-4">
								<p class="text-center col-xs-12"> Charisma</p>
								<input name="car" id="car" class="col-xs-12 atri" placeholder="de 3 a 18" required/>
								<p class="make-a-padding"></p>
							</div>
							<div class="botoes">
								<button class="btn btn-primary col-sm-3" type="submit" name="cadastrarPersonagem" value="cadastrarPersonagem">Cadastrar Personagem</button>	
								<p class="col-sm-1"></p>
								<button class="btn btn-primary col-sm-3" type="submit" name="deletePersonagem" value="deletePersonagem">Delete Personagem</button>
								<p class="col-sm-1"></p>	
								<button class="btn btn-primary col-sm-3" type="submit" name="updatePersonagem" value="updatePersonagem">Update Personagem</button>	
							</div>
						</div> 
						
					</form>   
			</div>
		</body>
	</div>



</html>