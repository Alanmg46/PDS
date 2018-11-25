<?php
class VendadeProduto {

  public $idVenda;
  public $idProduto;
  public $peso;
  public $precoUnit;

   public function Construcao($idVenda, $idProduto, $peso, $precoUnit) {
    $this->idVenda = $idVenda;
    $this->idProduto = $idProduto;
    $this->peso = $peso;
    $this->precoUnit = $precoUnit;
  }
}
?> 