<?php
    class Triangulo{
        private $base;
        private $altura;

        public function Triangulo($a, $b){
            $this->altura = $a;
            $this->base = $b;
        }

        public function getBase(){
            return $this->base;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setBase($b){
            $this->base = $b;
        }

        public function setAltura($a){
            $this->altuta = $a;
        }

        public function area(){
            return (($this->base * $this->altura)/2);
        }

        public function imprime(){
            echo "O triângulo de base " . $this->base . " e altura " . $this->altura . " possui area de ";
        }
    }
