<?php
	$endereco = "localhost:3306";
	$usuariobanco = "root";
	$senhabanco = "";
	$nomedobanco = "projeto1";
	
	$conexao = mysqli_connect($endereco,$usuariobanco,$senhabanco,$nomedobanco);
	
	if(!$conexao){
		die("Falha na conexão : ".mysqli_connect_error());
	}

    $nome=$_POST['empresa'];
    $desc=$_POST['msg'];
    $nivel=$_POST['periodoi'];
    $comando = $conexao->prepare("insert into tec_conhecidas (nome, descricao, nivel_conhecimento)values(?,?,?)"
    $comando->bind_param("sss",$nome,$desc,$nivel);
    
    $comando->execute();
    $comando->close();
    $conexao->close();

    header('location:CadUser.php');
    $resposta = "Informações gravadas com sucesso!";
    header('location:cadastros.php?resultado='.$resposta);
    header('Refresh:0');
?>
