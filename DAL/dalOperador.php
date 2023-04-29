<?php
    namespace DAL; 
    include_once 'C:\xampp\htdocs\lpadst1php2023\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\lpadst1php2023\MODEL\Operador.php';
    
    
    class dalOperador{

        public function Select(){
          $sql = "select * from operador;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          
        
          return $result; 
             
        }

        public function SelectID(int $id){

        }

        public function Insert(){

        }

        public function Update(){

        }

        public function Delete(){

        }   


    }

?> 