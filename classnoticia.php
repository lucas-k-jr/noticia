<?php
    class Noticia
    {
        private $titulo;
        private $resumo;
        private $materia;
        private $foto;

        public function __construct($t,$r,$m,$f)
        {
            $this->titulo  = $t;
            $this->resumo  = $r;
            $this->materia = $m;
            $this->foto    = $f;
        }

        public function get_titulo()
        {
            return($this->titulo);
        }
        
        public function get_meteria()
        {
            return($this->materia);
        }

        public function get_resumo()
        {
            return($this->resumo);
        }

        public function get_foto()
        {
            return($this->foto);
        }
    }




















?>