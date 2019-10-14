<?php
	session_start();
	$usuario = $_POST['usuario'];
	$senha= $_POST['senha'];
	
    $servidor = "185.27.134.10";
    $user = "epiz_24275505";
    $senha = "oscar1234";
    $base = "epiz_24275505_projeto1";
        
	$conexao = mysqli_connect($endereco,$usuariobanco,$senhabanco,$nomedobanco);
	
	if(!$conexao){
		die("Falha na conexão : ".mysqli_connect_error());
	}
	
	$consulta = "Select * From user Where username = '".$usuario."' and password = '".$senha."'";
	
	$resultado = mysqli_query($conexao,$consulta);
	
	if(mysqli_num_rows($resultado) > 0){
			while($linha = mysqli_fetch_assoc($resultado)){
					$usuariologado = $linha['nome'];
					$perfillogado = $linha['id_perfil'];
			}
			$_SESSION['usuario'] = $usuariologado;
			$_SESSION['perfil'] = $perfillogado;
			header('location:index?pagina=cadastros');
	}else{
		$resposta = "Usuário ou senha incorretos!  ";
		header('location:index?pagina=reservado&resultado='.$resposta);
		header('Refresh:0');
	}
?>