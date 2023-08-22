<?php
class Pessoa{
    public $nome;
    public $email;
    public $telefone;
    public $hora_do_dia;
  
    function mostrarInformação (){
      
      return "<br><br>Seu nome: $this->nome<br><br>Seu email: $this->email<br><br>Seu telefone: $this->telefone<br> <br>";
    }
    
    function hora($hora_do_dia){
    if ($hora_do_dia<6) echo 'Boa madrugada!';
    elseif ($hora_do_dia<12) echo 'Bom dia!';
    elseif ($hora_do_dia<18) echo 'Boa tarde!';
    elseif ($hora_do_dia<24) echo 'Boa noite!';
    }
  
    public function falar($p){
        echo "$this->nome esta falando com a $p->nome";
        $p->responder($this);


    }
  
    function responder($p){
      echo "<br>$this->nome respondendo  $p->nome";
    }
    
  }
?>