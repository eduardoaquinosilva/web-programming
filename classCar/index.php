<?php
	class Car {
		public $marca = "";
		public $modelo = "";
		public $cor = "";
		public $placa = "";

		function __construct($marca, $modelo, $cor, $placa) {
			$this->setMarca($marca);
			$this->setModelo($modelo);
			$this->setCor($cor);
			$this->setPlaca($placa);
		}

		function getMarca() {
			return $this->marca;
		}

		function setMarca($marca) {
			if (!empty($marca)) {
				$this->marca = $marca;
			} else throw new Exception('Não é possível atribuir valores vazios ao objeto.');
		}

		function getModelo() {
			return $this->modelo;
		}

		function setModelo($modelo) {
			if (!empty($modelo)) {
				$this->modelo = $modelo;
			} else throw new Exception('Não é possível atribuir valores vazios ao objeto.');
		}

		function getCor() {
			return $this->cor;
		}

		function setCor($cor) {
			if (!empty($cor)) {
				$this->cor = $cor;
			} else throw new Exception('Não é possível atribuir valores vazios ao objeto.');
		}

		function getPlaca() {
			return $this->placa;
		}

		function setPlaca($placa) {
			if (!empty($placa)) {
				$this->placa = $placa;
			} else throw new Exception('Não é possível atribuir valores vazios ao objeto.');
		}

		function ligar() {
			print "O carro está ligado\n";
		}

		function desligar() {
			print "O carro está desligado\n";
		}

		function acelerar() {
			print "O carro acelera\n";
		}
	}
?>
