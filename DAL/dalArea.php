<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'C:\xampp\htdocs\lpbcct2php2023\MODEL\Area.php';

   // include_once '../../servicos/DAL/conexao.php';
  //  include_once '../MODEL/Area.php';

    class dalArea{

        public function Select(){
          $sql = "select * from area;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          
          //echo count ($result);
          
           //$lstAreas[] = new \MODEL\Area(); 
          foreach($result as $linha){
                        
            $area = new \MODEL\Area();
            
            $area->setId($linha['id']);
            $area->setNome($linha['nome']);  
            $area->setTipo($linha['tipo']);      
            $area->setHectares($linha['hectares']); 
    
            $lstAreas[] = $area; 

          }

         
          return  $lstAreas;
        }


        public function Insert(\MODEL\Area $area){
           
            //echo "nome: ".  $operador->getNome() . "</br>";
            //echo "aniversario: ". $operador->getAniversario(). "</br>";
            //echo "salario: " . $operador->getSalario() . "</br>";

            $con = Conexao::conectar(); 
            $sql = "INSERT INTO area (nome, tipo, hectares) VALUES  ('{$area->getNome()}', '{$area->getTipo()}','{$area->getHectares()}');";
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 
        }

       
    }

?> 