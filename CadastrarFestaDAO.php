<?php

class CadastrarFestaDAO {

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function cadastrarFesta(Festa $festa) {
        try {
            $sql = $this->pdo->prepare("
                INSERT INTO festas (nomePacote, descricao, valor)
                VALUES (?, ?, ?)
            ");

            $sql->execute([
                $festa->getNomePacote(),
                $festa->getDescricao(),
                $festa->getValor()
            ]);

            echo "Pacote de festa cadastrado com sucesso!<br>";

        } catch(PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    
    // CARREGA PLANOS PADRÃO E INSERE NO BANCO
    public function cadastrarFestasPadrao() {

        $planos = [
            ["Plano Kids Básico", "4 horas de festa, decoração simples, 2 brinquedos infláveis, mesa de doces e som ambiente.", 1200.00],
            ["Plano Kids Intermediário", "5 horas de festa, decoração temática, 3 brinquedos infláveis, mesa de doces completa e DJ básico.", 2000.00],
            ["Plano Kids Premium", "6 horas de festa, decoração premium com tema, 5 brinquedos infláveis, mesa de doces gourmet, DJ e iluminação.", 3500.00],
            ["Festa Teen", "5 horas de evento, decoração moderna, DJ profissional, iluminação de pista e buffet completo para 40 pessoas.", 4000.00],
            ["Festa Adulto Premium", "6 horas de festa, buffet completo, bebidas inclusas, bar de drinks e DJ profissional.", 6800.00],
        ];

        foreach ($planos as $p) {
            $festa = new Festa($p[0], $p[1], $p[2]);
            $this->cadastrarFesta($festa);
        }
    }
}
