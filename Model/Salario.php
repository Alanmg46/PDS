<?php
class Salario {

  public $id;
  public $idFuncionario;
  public $data;
  public $mes;
  public $ano;
  public $valor;

  public function Construcao($id, $idFuncionario, $data, $mes, $ano, $valor) {
    $this->id = $id;
    $this->idFuncionario = $idFuncionario;
    $this->data = $data;
    $this->mes = $mes;
    $this->ano = $ano;
    $this->valor = $valor;
  }
}
?>