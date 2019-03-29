<?php

	include("Noticia.php");

	class Revista
	{
		public $nome;
		public $noticias;

		public function __construct($n)
		{
			$this->nome = $n;
		}

		public function adicionar_noticia($t, $r, $m, $f)
		{
			$this->noticias[] = new Noticia($t, $r, $m, $f);
		}

		public function get_nome()
		{
			return($this->nome);
		}
	}

?>