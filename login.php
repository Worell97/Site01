<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<style type="text/css">
			body {
				background-color: black;
				color: white;
			}
			h3 {
				color:red;
			}
			a.home:link, a.home:visited{
				color:white;
			}
		</style>
	</head>
	<body>
		<div id="home" align="left" color="white"> <a href="home.php">Home</a> </div>
		<?php
			
			
			if(isset($_GET['resultado'])){
				$resultado = $_GET['resultado'];
			}
		?>
		<form method="post" action="verificaLogin.php">
			<fieldset>
					<legend>Login</legend>
					<table>
						<tr>
							<td><label>Usuário:</label></td>
							<td><input type="text" name="usuario"/></td>
						</tr>
						<tr>
							<td><label>Senha:</label></td>
							<td><input type="password" name="senha"/></td>
						</tr>
					</table>
					<br/>
					<input type="reset" value="Limpar" />
					<input type="submit" value="Enviar"/>
					<br />
					<h3> <?php if(!empty($resultado)){echo $resultado;} ?></h3>
			</fieldset>
		</form>
		
	</body>
</html>