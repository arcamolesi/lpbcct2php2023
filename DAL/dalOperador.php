<?php
    namespace DAL; 
    include_once 'C:\xampp\htdocs\lpbcct2php2023\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\lpbcct2php2023\MODEL\Operador.php';
    
    
    class dalOperador{

        public function Select(){
          $sql = "select * from operador;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          //return $result;
       

          foreach($result as $linha){
               $operador = new \MODEL\Operador(); 

               $operador->setId($linha['id']); 
               $operador->setNome($linha['nome']);
               $operador->setAniversario($linha['aniversario']); 
               $operador->setSalario($linha['salario']);

              $lstOperador[]= $operador; 
          }

          return $lstOperador; 
             
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