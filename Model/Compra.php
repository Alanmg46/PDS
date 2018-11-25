<?php
class Compra {

  public $id;
  public $idFornecedor;
  public $data;
  public $desconto;

  public function Construcao($id, $idFornecedor, $data, $desconto) {
    $this->id = $id;
    $this->idFornecedor = $idFornecedor;
    $this->data = $data;
    $this->desconto = $desconto;
  }
}
?>