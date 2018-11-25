<?php
class CompradeProduto {

  public $idCompra;
  public $idProduto;
  public $unidade;
  public $quantidade;
  public $precoUnitario;

  public function Construcao($idCompra, $idProduto, $unidade, $quantidade, $precoUnitario){
    $this->idCompra = $idCompra;
    $this->idProduto = $idProduto;
    $this->unidade = $unidade;
    $this->quantidade = $quantidade;
    $this->precoUnitario = $precoUnitario;
  }
}
?>