<?php
class db{
	
	//host
	private $host = 'localhost';
	
	//usuario
	private $usuario = 'root';
	
	//senha
	private $senha = '';
	
	//banco de dados
	private $database = 'twitter_clone';
	
	//funcao que vai executar a conexao entre php e mysql
	
	public function conecta_mysql(){
		
		//criar conexao
		mysqli_connect()//espera 4 parametros(localizacao do bd, usuario de acesso, senha, banco de dados)//
	}
	
}
?>