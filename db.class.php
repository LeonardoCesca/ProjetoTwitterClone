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
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database)//espera 4 parametros(localizacao do bd, usuario de acesso, senha, banco de dados)//$this faz referencia a propriedade existente dentro da propria classe.
		
		//ajustar o charset de comunicacao entre a aplicacao e o BD.
		mysqli_set_charset($con, 'utf8');
		
		//verificar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar no Banco de Dados: ' .mysqli_connect_error();//ajuda no debugg...
			
		}
		
		return $con;
	}
	
}
?>