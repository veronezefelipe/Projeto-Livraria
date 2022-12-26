<?php
require "src/ConexaoBD.php";

class CompraDAO{

    public function cadastrarCompra(array $sessao){

        $conexao = ConexaoBD::getConexao();

        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H-i');
        $sql = "insert into compras (clienteId, data, total) value
            (
                '{$sessao['clienteId']}',
                '{$data}',
                '{$sessao ['total']}'
            )";

        $conexao->exec($sql);
        $compraId = $conexao->lastInsertId();
        $carrinho = $sessao['carrinho'];

        foreach ($carrinho as $item) {
            $sql = "insert into itens_compra (compraId, livroId, quantidade, valor) value
                (
                    '{$compraId}',
                    '{$item['id']}',
                    '{$item['quantidade']}',
                    '{$item['valor']}'
                    
                )";

            $conexao->exec($sql);

        }

        return $compraId;
    }
}
?>