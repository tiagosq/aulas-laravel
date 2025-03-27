<?php
	class Tarefa {
		// Atributos
		// Encapsulamento -> Quem pode ver e alterar um atributo
		private $descricao;
		private $status;

		// Método
		public function exibeTarefa() {
			echo "Tarefa: " . $this->descricao . " - Status: " . (($this->status) ? 'Pronto' : 'Pendente');
		}

		//!Eu posso chamar outros métodos dentro deste método.
		//!Eu posso criar objetos de outras classes dentro de uma classe
		public function defineTarefa($texto) {
			$this->descricao = $texto;
			$this->status = false;
		}

		public function alteraStatus() {
			$this->status = !$this->status;
		}
	}
?>