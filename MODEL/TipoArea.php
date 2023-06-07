<?php 
namespace MODEL; 

class TipoArea {
    private ?int $id; 
    private ?string $descricao; 
    private ?int $quantidade; 

    public function __construct(){ }
    
   
    public function getId(){
        return $this->id; 
    }
    
    public function setId(int $id){
        $this->id = $id; 
    }


    public function getDescricao(){
        return $this->descricao; 
    }
    
    public function setDescricao(string $descricao){
        $this->descricao = $descricao; 
    }
    public function getQuantidade(){
        return $this->quantidade; 
    }
    
    public function setQuantidade(int $quantidade){
        $this->quantidade = $quantidade; 
    }
        

}

?>
