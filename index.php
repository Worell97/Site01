<?php
#Base de dados
	include 'db.php';
	
#Cabeçalho	
	include 'header.php';
	
#Conteudo da Pagina
if(isset($_GET['pagina'])){
	$pagina= $_GET['pagina'];
}else{
	$pagina = 'home';
}
@$pagina=$_GET['pagina'];
if($pagina=='experiencias'){
	include 'views/experiencias.php';
}elseif($pagina == 'tecnologias'){
	include 'views/tecnologias.php';
}elseif($pagina == 'contato'){
	include 'views/contato.php';
}elseif($pagina == 'reservado'){
	include 'views/reservado.php';	
}elseif($pagina == 'cadastros'){
	include 'views/cadastros.php';	
}else{
	include 'views/home.php';
}
#Rodapé
	include 'footer.php';