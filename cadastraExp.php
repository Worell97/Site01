<?php
	$endereco = "localhost:3306";
	$usuariobanco = "root";
	$senhabanco = "";
	$nomedobanco = "projeto1";
	
	$conexao = mysqli_connect($endereco,$usuariobanco,$senhabanco,$nomedobanco);
	
	if(!$conexao){
		die("Falha na conexão : ".mysqli_connect_error());
	}

    $empresa=$_POST['empresa'];
    $cargo=$_POST['cargo'];
    $cidade=$_POST['cidade'];
    $desc=$_POST['msg'];
    $periodoi=$_POST['periodoi'];
    $periodof=$_POST['periodof']; 
    $comando = $conexao->prepare("insert into experiencias (empresa, cargo, descricao, entrada, saida)values(?,?,?,?,?)"
    $comando->bind_param("sssdd",$empresa,$cargo,$desc,$periodoi,$periodof);
    
    $comando->execute();
    $comando->close();
    $conexao->close();

    header('location:CadUser.php');
    $resposta = "Informações gravadas com sucesso!";
    header('location:cadastros.php?resultado='.$resposta);
    header('Refresh:0');
?>
