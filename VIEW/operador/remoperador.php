<?php
    include_once '../../BLL/blloperador.php';

    $id = $_GET['id'];

   $bll = new \BLL\bllOperador(); 
   $bll->Delete($id); 
   
   header("location: lstoperador2.php");
  
?>