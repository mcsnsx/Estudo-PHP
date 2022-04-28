<?php

//Raiz das informações
namespace Cliente;

//usar a contra-barra '\' significa "volte da raiz"
class Cadastro extends \Cadastro{
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente " . $this-> getNome();
    }
}

?>