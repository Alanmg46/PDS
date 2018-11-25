<?php

class Funcionario{
	public $id;
	public $nome;
	public $identidade;
	public $carteira;
	public $salario;
	public $funcao;
	public $datanasc;
	public $conta;
	public $telefone;
	public $cep;
	public $endereco;
	public $cpf;
	public $cnpj;
	public $email;
	public $observacao;

	public function Construcao($id, $nome, $identidade, $carteira, $salario, $funcao, $datanasc, $conta, $telefone, $cep, $endereco, $cpf, $cnpj, $email, $observacao){
		$this->id = $id;
		$this->nome = $nome;
		$this->identidade = $identidade;
		$this->carteira = $carteira;
		$this->salario = $salario;
		$this->funcao = $funcao;
		$this->datanasc = $datanasc;
		$this->conta = $conta;
		$this->telefone = $telefone;
		$this->cep = $cep;
		$this->endereco = $endereco;
		$this->cpf = $cnpj;
		$this->email = $email;
		$this->observacao = $observacao;
	}
}
?>