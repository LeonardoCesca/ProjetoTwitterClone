<?php
	
	require_once('db.class.php');
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	//query
	
	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$resultado_id = mysqli_query($link, $sql);
	
	if($resultado_id){
		//executar consulta
		
	$dados_usuario = mysqli_fetch_array($resultado_id);
	
	//var_dump($dados_usuario); //Mostra informações sobre o registro do usuario
	
		if(isset($dados_usuario['usuario'])){
			echo 'usuario existente';
		}else{
			//forçando redirecionamento
			header('Location: index.php?erro=1');
		}
		
	}else{
		echo 'Erro na execucao da consulta';
	}
	
	
?>