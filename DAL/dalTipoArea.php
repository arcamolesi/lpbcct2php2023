<?php
    namespace DAL; 
    include_once __DIR__. '\conexao.php';
    include_once  'C:\xampp\htdocs\lpbcct2php2023\MODEL\TipoArea.php';

   // include_once '../../servicos/DAL/conexao.php';
  //  include_once '../MODEL/Area.php';

    class dalTipoArea{

        public function Select(){
          $sql = "select * from tipoarea;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();
          
          //echo count ($result);
        
          foreach($result as $linha){
                        
            $tipoarea = new \MODEL\TipoArea();
            echo $linha['descricao'];
            $tipoarea->setId($linha['id']);
            $tipoarea->setDescricao($linha['descricao']);  
            $tipoarea->setQuantidade($linha['quantidade']);      

            $lsttipoarea[] = $tipoarea; 

          }

         
          return  $lsttipoarea;
        }


        public function SelectID(int $id){ 
          $sql = "select * from tipoarea where id=?;";
          $pdo = Conexao::conectar(); 
          $query = $pdo->prepare($sql);
          $query->execute (array($id));
          $linha = $query->fetch(\PDO::FETCH_ASSOC);
      
          Conexao::desconectar(); 
               
          $tipoarea = new \MODEL\TipoArea();
          $tipoarea->setId($linha['id']);
          $tipoarea->setDescricao($linha['descricao']);
          $tipoarea->setQuantidade($linha['quantidade']); 

          return  $tipoarea;

        }


        public function Update(\MODEL\TipoArea $tipoarea){
          $sql = "UPDATE tipoarea SET descricao=?, quantidade=? WHERE id=?";

          $pdo = Conexao::conectar(); 
          $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
          $query = $pdo->prepare($sql);
          $result = $query->execute(array($tipoarea->getDescricao(), $tipoarea->getQuantidade(), $tipoarea->getId()));
          $con = Conexao::desconectar();
          return  $result; 
      }

       
    }

?> 