<?php 

require_once('conexao.php');

if(isset($_POST['cadastrar'])){
  $email = $_POST['email']; 
  $user = $_POST['user'];
  $senha = MD5($_POST['senha']);
}


  //verifica se existe
  $queryuser = "select * from usuario where user = '".$user."'";
  $queryemail = "select *from usuario where email ='".$email."'";
  mysqli_query($conexao, $queryuser);
  mysqli_query($conexao, $queryemail);
  if(mysqli_affected_rows($conexao) > 0){
    print_r("aqui");
    echo "rip";
  } else {
    //não existe -> realiza cadastro
    $query = "INSERT INTO usuario (email, user, senha) VALUES ('".$email."', '".$user."', '".$senha."')";
    if(mysqli_query($conexao, $query)){
      echo"sucesso";
      echo "<script>window.location = 'projeto_login.html'</script>";
    }else{
      print_r($query);
    }
  }
  ?>