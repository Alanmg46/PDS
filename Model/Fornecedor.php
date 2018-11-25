<?php

class Fornecedor{
	public $id;
	public $nome;
	public $telefone;
	public $cidade;
	public $estado;
	public $endereco;
	public $cpf;
	public $cnpj;
	public $email;

	public function Construcao($id, $nome, $telefone, $cidade, $estado, $endereco, $cpf, $cnpj, $email){
		$this->id = $id;
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->cidade = $cidade;
		$this->estado = $estado;
		$this->endereco = $endereco;
		$this->cpf = $cpf;
		$this->cnpj = $cnpj;
		$this->email = $email;
	}
}
?>