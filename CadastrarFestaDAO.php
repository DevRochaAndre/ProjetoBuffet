<?php

class CadastrarFestaDAO {

    private $pdo;

    // o __construct chama automaticamente a função quando utilizada novamente.
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrarFesta(Festa $festa) {
        try {
            $sql = $this->pdo->prepare(
                "INSERT INTO festas (nomePacote, descricao, valor) VALUES (?, ?, ?)"
            );

            $sql->execute([
                $festa->getNomePacote(),
                $festa->getDescricao(),
            ]);

            echo "Pacote de festa cadastrado com sucesso!";
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}