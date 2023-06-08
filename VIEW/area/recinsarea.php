<?php        
 
 include_once '../../MODEL/Area.php'; 
 include_once '../../BLL/bllarea.php';
 include_once '../../BLL/bllTipoArea.php';

 //capturar dados oriundos do formulário insOperador.php
 $area = new \MODEL\Area; 

 
 $area->setNome($_POST['txtNome']);
 $area->setTipo($_POST['slcTipoArea']); 
 $area->setHectares($_POST['txtHectares']); 
   
 $bllArea= new \BLL\bllArea();
 $bllArea->Insert($area); 

 header("location: lstarea.php"); 

// echo "nome: ".  $operador->getNome() . "</br>";
//  echo "aniversario: ". $operador->getAniversario(). "</br>";
// echo "salario: " . $operador->getSalario() . "</br>";

?>