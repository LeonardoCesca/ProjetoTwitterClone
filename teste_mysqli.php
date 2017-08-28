<?php


	require_once('db.class.php');

	$sql = " SELECT * FROM usuarios";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = array();

			//CONSULTA COM RETORNO DE N REGISTROS..
			
		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){//recuperando todos os registros;
			$dados_usuario[] = $linha;
		}//MYSQLI_NUM usado para fazer relatórios, MYSQLI_ASSOC DADOS PARA UM FORMULARIO..
		
		foreach($dados_usuario as $usuario){
			echo $usuario['email'];
			echo '<br /><br />';
		}
	}else{
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

?>