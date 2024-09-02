<?php
    class FormVoluntário {

    protected $nomeCliente;

    protected $rua,$numero,$bairro,$cep;

    protected $idUser;

    protected $emailCliente;

    public function setNome($nomeCliente){
    $this->nomeCliente=$nomeCliente;
    }
    public function setEndereco($rua, $numero, $bairro, $cep){
    $this->enderecoCliente=[
    'rua'=> $rua,
    'numero'=>$numero,
    'bairro'=>$bairro,
    'cep'=>$cep
    ];
    }
    public function setEmail($emailCliente){
    $this->emailCliente=$emailCliente;
    }
    public function setIdUser($idUser){
    $this->idUser=$idUser;
    }
    public function getNome(){
    echo "<h1>Formulário de Voluntário</h1>"."Nome:".$this->nomeCliente."<br>";
    }
    public function getEndereco(){
        $enderecoFormatado = '';
        if (is_array($this->enderecoCliente)) {
            $enderecoFormatado = implode(', ', $this->enderecoCliente);
        }
        echo "Endereço: " . $enderecoFormatado . "<br>";
    }
    public function getEmail(){
    echo "Email:".$this->emailCliente."<br>";
    }
    public function getIdUser(){
    echo "IdUser:".$this->idUser."<br>";
    }
    public function verificarInfos(){
    //validar o nome
    if(empty($this->nomeCliente)){
    throw new Exception("O nome do cliente é obrigatório");
    }
    //validar do email
    if(!filter_var($this->emailCliente,FILTER_VALIDATE_EMAIL)){
    throw new Exception("O e-mail informado é inválido");
    }
    //validar o id//
    if(!is_numeric($this->idUser)){
    throw new Exception("O ID do usuário deve ser um número");
    }
    //validar o endereço
    if(is_array($this->enderecoCliente)&& !empty($this->enderecoCliente['rua'])&& !empty($this->enderecoCliente['numero'])&& !empty($this->enderecoCliente['bairro'])&& !empty($this->enderecoCliente['cep'])){
        return true;
    }else{
        echo "Endereço não definido.<br>";
        return false;
    }
    }
    }

    $meuFormulario = new FormVoluntário();
    $meuFormulario->setNome("Lorena");
    $meuFormulario->setEndereco('rua Benedito Alves Delfino',2160,'Distrito Industrial',17512043);
    $meuFormulario->setIdUser("100");
    $meuFormulario->setEmail("lorenahribeiroh@gmail.com");

    $meuFormulario->getNome();
    $meuFormulario->getEndereco();
    $meuFormulario->getIdUser();
    $meuFormulario->getEmail();
?>