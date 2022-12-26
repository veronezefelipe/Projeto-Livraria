<?php
    class ItensCompra{
        private int $id;
        private int $produtoId;
        private string $valor;
        private int $quantidade;
        private int $compraId;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of produtoId
         */ 
        public function getProdutoId()
        {
                return $this->produtoId;
        }

        /**
         * Set the value of produtoId
         *
         * @return  self
         */ 
        public function setProdutoId($produtoId)
        {
                $this->produtoId = $produtoId;

                return $this;
        }

        /**
         * Get the value of valor
         */ 
        public function getValor()
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @return  self
         */ 
        public function setValor($valor)
        {
                $this->valor = $valor;

                return $this;
        }

        /**
         * Get the value of quantidade
         */ 
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         *
         * @return  self
         */ 
        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of compraId
         */ 
        public function getCompraId()
        {
                return $this->compraId;
        }

        /**
         * Set the value of compraId
         *
         * @return  self
         */ 
        public function setCompraId($compraId)
        {
                $this->compraId = $compraId;

                return $this;
        }
    }
?>