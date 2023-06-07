<?php

namespace BLL; 
USE DAL\dalArea;
include_once 'C:\xampp\htdocs\lpbcct2php2023\DAL\dalArea.php'; 
include_once 'C:\xampp\htdocs\lpbcct2php2023\BLL\blltipoarea.php'; 
include_once 'C:\xampp\htdocs\lpbcct2php2023\MODEL\TipoArea.php'; 
include_once 'C:\xampp\htdocs\lpbcct2php2023\MODEL\Area.php'; 

class bllArea {

    public function Select (){
        $dalArea = new \DAL\dalArea(); 
        return $dalArea->Select();
    }
   

    public function Insert (\MODEL\Area $area){
        //recuperar TipoArea
        $bllTipoArea = new \bll\bllTipoArea(); 
        $tipoArea = new \MODEL\TipoArea(); 
        $tipoArea = $bllTipoArea->SelectID($area->getTipo()); 

        //atualizar o campo Quantidade do Tipo Area
        $novoValor = $tipoArea->getQuantidade() + 1; 
        $tipoArea->setQuantidade($novoValor);
        $bllTipoArea->Update($tipoArea); 

        //Abrir e gravar dados de area
        $dal = new dalArea(); 
        $dal->Insert($area);  

        header("location: lstArea.php"); 
    }

}

?>