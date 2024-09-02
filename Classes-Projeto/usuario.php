<?php
    class Usuario {
       protected $nome;
       protected $idUser;
       protected $email;
       protected $senha;
       protected $dataCadastro;
       
       public function __construct($nome, $idUser, $email, $senha, $dataCadastro) {
           $this->nome = $nome;
           $this->idUser = $idUser;
           $this->email = $email;
           $this->senha = $senha;
           $this->dataCadastro = $dataCadastro;
       }
       public function getNome() {
           return $this->nome;
       }
       public function getIdUser() {
           return $this->idUser;
       }
       public function getEmail() {
           return $this->email;
       }
       public function getDataCadastro() {
           return $this->dataCadastro;
       }
       public function validarSenha($senha) {
           return $this->senha === $senha;
       }
       public function alterarSenha($novaSenha) {
           $this->senha = $novaSenha;
       }
    }
    
    $usuario = new Usuario("Paulo Augusto Moraes Costa da Silva", 1, "paulo.amcsilva@senacsp.edu.br", "1234", "2024-08-30");
    
    echo "Nome: " . $usuario->getNome() . "<br>";
    echo "ID: " . $usuario->getIdUser() . "<br>";
    echo "E-mail: " . $usuario->getEmail() . "<br>";
    echo "Data de Cadastro: " . $usuario->getDataCadastro() . "<br>";
    :
    if ($usuario->validarSenha("1234")) {
       echo "Senha correta!<br>";
    } else {
       echo "Senha incorreta!<br>";
    }
    
    $usuario->alterarSenha("novaSenha123");
    echo "Senha alterada com sucesso!<br>";3
?>