<?php
    class Aluno{

        private $nome;
        private $bimestre1;
        private $bimestre2;
        private $bimestre3;
        private $bimestre4;
        private $media;

        public function Aluno($nome, $n1, $n2, $n3, $n4){
            $this->nome = $nome;
            $this->bimestre1 = $n1;
            $this->bimestre2 = $n2;
            $this->bimestre3 = $n3;
            $this->bimestre4 = $n4;

            $this->media = ($this->bimestre1 + $this->bimestre2 + $this->bimestre3 + $this->bimestre4) / 4;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getBimestre1(){
            return $this->bimestre1;
        }

        public function getBimestre2(){
            return $this->bimestre2;
        }

        public function getBimestre3(){
            return $this->bimestre3;
        }

        public function getBimestre4(){
            return $this->bimestre4;
        }
        
        public function getMedia()
        {
            return $this->media;
        }

        public function setNome($n){
            $this->nome = $n;
        }
        
        public function setBimestre1($b1){
            $this->bimestre1 = $b1;
        }

        public function setBimestre2($b2){
            $this->bimestre2 = $b2;
        }

        public function setBimestre3($b3){
            $this->bimestre3 = $b3;
        }

        public function setBimestre4($b4){
            $this->bimestre4 = $b4;
        }
        
        public function setMedia($m)
        {
         $this->media = $m;   
        }

        public function converterMencao()
        {
            if ($this->media < 5) {
                return 'I';
            }elseif ($this->media < 7) {
                return 'R';
            }elseif ($this->media < 9) {
                return 'B';
            }else {
                return 'MB';
            }
        }
    }
?>