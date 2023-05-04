<?php 
   namespace MODEL; 

   class Operador{
        private ?int $id; 
        private ?string $nome; 
        private ?string $aniversario; 
        private ?float $salario;
        
        public function __construct() 
        {
            
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getNome() {
            return $this->nome; 
        }

        public function setNome(string $nome){
            $this->nome = $nome; 
        }


        public function getAniversario() {
            return $this->aniversario; 
        }

        public function setAniversario(string $aniversario){
            $this->aniversario = $aniversario; 
        }

        public function getSalario() {
            return $this->salario; 
        }

        public function setSalario(float $salario){
            $this->salario = $salario; 
        }

   }

?>