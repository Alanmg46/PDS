<?php

 class Produto {
     public $id;
     public $descricao;

     public function Construcao($id, $descricao){
         $this->id = $id;
         $this->descricao = $descricao;
     }
 }
?>