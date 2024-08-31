<?php

class AccountManager {
    private $accounts;

    public function __construct() {
        $this->accounts = []; //Array vazio que irá armazenar as contas "cridas", enquanto não possui a base de dados
    }


    // Método para editar uma conta 
    // Busca a conta com o ID fornecido
    // Se a conta for encontrada, atualiza o nome e o email com os novos valores
    // Se a conta não for encontrada, exibe uma mensagem de erro

    public function editAccount($id, $newName, $newEmail) {
        if (isset($this->accounts[$id])) {
            $this->accounts[$id]['name'] = $newName;
            $this->accounts[$id]['email'] = $newEmail;
            echo "Conta editada com sucesso!<br>";
        } else {
            echo "Conta não encontrada!<br>";
        }
    }


    // Método para excluir uma conta
    // Busca a conta com o ID fornecido
    // Se a conta for encontrada, remove-a do array $accounts
    // Se a conta não for encontrada, exibe uma mensagem de erro

    public function deleteAccount($id) {
        if (isset($this->accounts[$id])) {
            unset($this->accounts[$id]);
            echo "Conta excluída com sucesso!<br>";
        } else {
            echo "Conta não encontrada.<br>";
        }
    }

    // Método para adicionar uma conta (para fins de teste)

    // Adiciona uma nova conta ao array $accounts, utilizando o ID fornecido como chave
    // Em um sistema real, o ID seria gerado automaticamente

    public function addAccount($id, $name, $email) {
        $this->accounts[$id] = ['name' => $name, 'email' => $email];
    }

    // Método para listar todas as contas (para fins de teste)
    // Percorre o array $accounts e exibe as informações de cada conta

    public function listAccounts() {
        foreach ($this->accounts as $id => $account) {
            echo "ID: $id, Nome: {$account['name']}, Email: {$account['email']}<br>";
        }
    }
}

    // Exemplo de uso da classe
    $accountManager = new AccountManager(); 
    $accountManager->addAccount(1, 'Matheus', 'matheus@email.com');
    $accountManager->addAccount(2, 'Roberto Oliveira', 'roberto@email.com');
    $accountManager->addAccount(3, 'Marta', 'marta@email.com');


    $accountManager->editAccount(1, 'Matheus Pereira', 'matheus.psoares@email.com');
    $accountManager->editAccount(4, 'Matheus Pereira', 'matheus.psoares@email.com'); //Testando o erro
    $accountManager->deleteAccount(2);

    $accountManager->listAccounts();
?>