<?php
    class Conta{
        private $proprietario;
        private $saldo;
        private $dataCriacao;
        
        public function Conta($p, $s, $d){
            $this->proprietario = $p;
            $this->saldo = $s;
            $this->dataCriacao = $d;
        }

        public Function getProprietario(){
            return $this->proprietario;
        }

        public Function setProprietario($p){
            $this->proprietario = $p;
        }

        public Function getSaldo(){
            return $this->saldo;
        }

        public Function setSaldo($s){
            $this->saldo = $s;
        }

        public Function getdataCriacao(){
            return $this->dataCriacao;
        }

        public Function setdataCriacao($d){
            $this->dataCriacao = $d;
        }

        public function checarProcedência($valorRetirado)
        {
            if($this->saldo - $valorRetirado < 0){
                return false;
            }else{
                return true;
            }
        }
        
        public function sacar($valorSacado){
            $confirmação = $this->checarProcedência($valorSacado);
            if($confirmação == true){
                $this->saldo -= $valorSacado;
                echo "<br/>Transação executada com sucesso";
            }else{
                echo "<br/>Transação não aceita pelo saldo ser insuficiente ";
            }
        }
        
        public function deposito($valorDepositado)
        {
            $this->saldo += $valorDepositado;
            echo "<br/>Transação executada com sucesso";
        }

        public function transferir($valorTransferido){
            $confirmação = $this->checarProcedência($valorTransferido);
            if($confirmação == true){
                $this->saldo -= $valorTransferido;
                echo "<br/>Transação executada com sucesso";
            }else{
                echo "<br/>Transação não aceita pelo saldo ser insuficiente";
            }
        }

    }
?>