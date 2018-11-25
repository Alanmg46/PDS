<?php
class Venda {

  public $id;
  public $idCliente;
  public $desconto;
  public $data;
  
  public function Construcao($id, $idCliente, $data, $desconto) {
    $this->id = $id;
    $this->idCliente = $idCliente;
    $this->data = $data;
    $this->desconto = $desconto;
    $this->data = $data;
  }
}
?>