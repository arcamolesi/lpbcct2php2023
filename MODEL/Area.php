<?php 
namespace MODEL; 

class Area {
    private ?int $id; 
    private ?string $nome; 
    private ?int $tipo; 
    private ?float $hectares; 

    public function __construct(){ }
    
   
    public function getId(){
        return $this->id; 
    }
    
    public function setId(int $id){
        $this->id = $id; 
    }


    public function getNome(){
        return $this->nome; 
    }
    
    public function setNome(string $nome){
        $this->nome = $nome; 
    }
    public function getTipo(){
        return $this->tipo; 
    }
    
    public function setTipo(int $tipo){
        $this->tipo = $tipo; 
    }
        
    public function getHectares(){
        return $this->hectares;  
    }
    
    public function setHectares(float $hectares){
        $this->hectares = $hectares; 
    }

}

?>
