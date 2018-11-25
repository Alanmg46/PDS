<?php

class Cliente{
	public $id;
	public $nome;
	public $datanasc;
	public $telefone;
	public $cep;
	public $endereco;
	public $cpf;
	public $cnpj;
	public $email;

	public function Construcao($id, $nome, $datanasc, $telefone, $cep, $endereco, $cpf, $cnpj, $email){
		$this->id = $id;
		$this->nome = $nome;
		$this->datanasc = $datanasc;
		$this->telefone = $telefone;
		$this->cep = $cep;
		$this->endereco = $endereco;
		$this->cpf = $cpf;
		$this->cnpj = $cnpj;
		$this->email = $email;
	}
}
?>