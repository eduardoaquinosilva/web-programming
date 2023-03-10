<?php
	class Cambio {
		public $origem;
		public $destino;
		public $valor;

		function __construct($origem, $destino, $valor) {
			$this->origem = file_get_contents($origem);
			$this->destino = file_get_contents($destino);
			$this->valor = floatval($valor);
		}

		function converter() {
			$moeda_origem_Xml = simplexml_load_string($this->origem);
			$moeda_destino_Xml = simplexml_load_string($this->destino);
			$moeda_destino_upper = strtoupper($moeda_destino_Xml->baseCurrency);
			$nomeDstino;
			$nomeOrigem;
			$total = 0;

			foreach ($moeda_origem_Xml->item as $moeda) {
				if (!strcmp($moeda->targetCurrency, $moeda_destino_upper)) {
					$nomeOrigem = $moeda->baseName;
					$nomeDestino = $moeda->targetName;
					$total = floatval($moeda->exchangeRate) * $this->valor;
				}
			}

			return array('valor' => $this->valor, 'nome_origem' => $nomeOrigem, 'nome_destino' => $nomeDestino, 'total' => round($total, 2));
		}
	}
?>
