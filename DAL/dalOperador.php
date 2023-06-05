<?php
    namespace DAL;

use MODEL\Operador;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\lpbcct2php2023\MODEL\Operador.php';
    
    
    class dalOperador {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from operador;";

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
            $sql = "select * from operador where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $operador = new \MODEL\Operador(); 
            $operador->setId($linha['id']);
            $operador->setNome($linha['nome']); 
            $operador->setAniversario($linha['aniversario']); 
            $operador->setSalario($linha['salario']); 

            return $operador; 

        }

        public function SelectNome(string $nome){

            $sql = "select * from operador WHERE nome like  '%" . $nome .  "%' order by nome;";
         //   $sql = "select * from operador WHERE nome like  '%?%' order by nome;";
  
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $result = $pdo->query($sql); 
                      
            // echo count ($result);
            $lstOperador = null; 
            foreach($result as $linha){
                          
              $operador = new \MODEL\Operador();
      
              $operador->setId($linha['id']);
              $operador->setNome($linha['nome']);
  
              $date = date_create($linha['aniversario']);
              $operador->setAniversario(date_format($date, 'd-m-Y')); 
         
              $operador->setSalario($linha['salario']); 
      
              $lstOperador[] = $operador; 
  
            }
            return  $lstOperador;
  
          }


        public function Insert(\MODEL\Operador $operador){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO operador (nome, aniversario, salario) 
                   VALUES  ('{$operador->getNome()}', '{$operador->getAniversario()}',
                            '{$operador->getSalario()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Operador $operador){
            $sql = "UPDATE operador SET nome=?, aniversario=?, salario=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($operador->getNome(), $operador->getAniversario(), 
                                            $operador->getSalario(), $operador->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function DElete(int $id){
            $sql = "DELETE from operador WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 