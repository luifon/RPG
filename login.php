<?php

require_once('conexao.php');


if (isset($_POST['entrar'])) {
    
	$user = $_POST['user'];
	$senha = md5($_POST['senha']);

	$query = "select * from usuario where user = '".$user."' AND senha = '".$senha."'";
	$verifica = mysqli_query($conexao, $query); 
	$contagem = mysqli_num_rows($verifica);
	if ($contagem == 1){
		session_start();
		$_SESSION['user'] = $user;
		echo"sucesso";
		echo "<script>window.location = 'projeto_personagem.php'</script>";
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location = 'projeto_login.html'</script></script>";
		die();
	}
		
}
if (isset($_POST['logout'])){
	unset($_SESSION);
	echo "<script>window.location = 'projeto_login.html'</script>";
}