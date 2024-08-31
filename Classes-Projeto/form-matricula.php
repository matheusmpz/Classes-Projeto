<?php
class formularioMatricula {
    private $nomeCliente;
    private $endereco;
    private $email;
    private $idUser;

    public function getNomeCliente() {
        return $this->nomeCliente;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getIdUser() {
        return $this->idUser;
    }

    public function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    public function enviarFormulario() {
        echo "Nome do Cliente: " . $this->nomeCliente . "<br>";
        echo "Endereço: " . $this->endereco . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "ID do Usuário: " . $this->idUser . "<br>";
        return true;
    }
}

    // Exemplo
    $formulario = new formularioMatricula();
    $formulario->setNomeCliente("João");
    $formulario->setEndereco("Rua ABC, 123");
    $formulario->setEmail("joao@example.com");
    $formulario->setIdUser(1);
    $formulario->enviarFormulario();
?>