<?php
    namespace BLL; 
    use DAL\dalOperador; 
    include_once '../../DAL/dalOperador.php';
    
    class bllOperador {
        public function Select (){
            $dal = new \Dal\dalOperador(); 
            //linhas de código com regras de negócio
           
           
           
            return $dal->Select();
        }
    }




?>