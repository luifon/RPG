<?php 

require_once('conexao.php');

if(isset($_POST['cadastrarPersonagem'])){
  $nome_personagem = $_POST['nome_personagem'];
  $hero_class = $_POST['hero_class'];
  $alin = $_POST['alin'];
  $race = $_POST['race'];
  $hp = $_POST['hp'];
  $armor = $_POST['armor'];
  $init = $_POST['init'];
  $stre = $_POST['stre']; 
  $agi = $_POST['agi'];
  $inte = $_POST['inte'];
  $const = $_POST['const'];
  $wis = $_POST['wis'];
  $car = $_POST['car'];



  //verifica se existe
  $queryuser = "select * from personagem where nome_personagem = '".$nome_personagem."'";
  mysqli_query($conexao, $queryuser);
  if(mysqli_affected_rows($conexao) > 0){
    print_r("personagem ja existe");
    echo "<br>rip";
  } else
    //não existe -> realiza cadastro
    $query = "INSERT INTO personagem (nome_personagem, hero_class, alin, race, hp, armor, init, stre, agi, inte, const, wis, car) VALUES ('".$nome_personagem."', '".$hero_class."', '".$alin."', '".$race."', '".$hp."', '".$armor."', '".$init."', '".$stre."', '".$agi."', '".$inte."', '".$const."', '".$wis."', '".$car."');";
    if(mysqli_query($conexao, $query)){
      echo"sucesso";
      echo "<script>window.location = 'projeto_personagem.php'</script>";
    }else{
      print_r($query);
    }
  }

  if(isset($_POST['updatePersonagem'])){
    $nome_personagem = $_POST['nome_personagem'];
    $hero_class = $_POST['hero_class'];
    $alin = $_POST['alin'];
    $race = $_POST['race'];
    $hp = $_POST['hp'];
    $armor = $_POST['armor'];
    $init = $_POST['init'];
    $stre = $_POST['stre']; 
    $agi = $_POST['agi'];
    $inte = $_POST['inte'];
    $const = $_POST['const'];
    $wis = $_POST['wis']; 
    $car = $_POST['car'];



  //verifica se existe
    $queryuser = "select * from personagem where nome_personagem = '".$nome_personagem."'";
    mysqli_query($conexao, $queryuser);
    if(mysqli_affected_rows($conexao) != 1){
      print_r("personagem nao existe");
      echo "<br>rip";
    } else{
    $query = "UPDATE personagem SET nome_personagem='".$nome_personagem."', hero_class='".$hero_class."', alin='".$alin."', race='".$race."', hp='".$hp."', armor='".$armor."', init='".$init."', stre='".$stre."', agi='".$agi."', inte='".$inte."', const='".$const."', wis='".$wis."', car='".$car."' WHERE nome_personagem='".$nome_personagem."';";
      if(mysqli_query($conexao, $query)){
        echo"sucesso";
        echo "<script>window.location = 'projeto_personagem.php'</script>";
      }else{
        print_r($query);
      }
    }
  }
  if(isset($_POST['deletePersonagem'])){
    $nome_personagem = $_POST['nome_personagem'];
    $queryuser = "select * from personagem where nome_personagem = '".$nome_personagem."';";
    mysqli_query($conexao, $queryuser);
    if (mysqli_affected_rows($conexao) != 1){
      print_r("personagem nao existe");
      echo"<br> rip";
    } else {
      $query = "DELETE FROM personagem WHERE nome_personagem = '".$nome_personagem."';";
      if (mysqli_query($conexao, $query)){
        echo "sucesso";
        echo "<script> window.location = 'projeto_personagem.php' </script>";
      } else {
        print_r($query);
      }
    }
  }
?> 