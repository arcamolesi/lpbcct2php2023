<?php
    include_once '../../MODEL/Operador.php';
    include_once '../../BLL/blloperador.php';

   $operador = new \MODEL\Operador(); 
   
   $operador->setNome($_POST['txtNome']);
   $operador->setAniversario($_POST['txtAniversario']);
   $operador->setSalario($_POST['txtSalario']); 

   $bll = new \BLL\bllOperador(); 
   $bll->Insert($operador); 
   
   header("location: lstoperador2.php");
  
?>