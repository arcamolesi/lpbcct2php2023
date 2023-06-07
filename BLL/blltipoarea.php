<?php

namespace BLL; 
USE DAL\dalTipoArea;
include_once 'C:\xampp\htdocs\lpbcct2php2023\DAL\daltipoarea.php'; 


class bllTipoArea{

    public function Select (){
        $dalTipoArea = new \DAL\dalTipoArea(); 
        return $dalTipoArea->Select();
    }
    
    public function SelectID(int $id){
        $dalTipoArea = new dalTipoArea(); 
        return $dalTipoArea->SelectID($id);
    }

    public function Update (\MODEL\TipoArea $tipoArea){
        $dal = new dalTipoArea(); 
        $dal->Update($tipoArea);   
    }
  

}

?>