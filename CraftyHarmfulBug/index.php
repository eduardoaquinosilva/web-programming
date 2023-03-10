<?php
	class Car {
		public $marca = "";
		public $modelo = "";
		public $cor = "";
		public $placa = "";

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

	$car1 = new Car();
	$car2 = new Car();

	$car1->marca = "Tesla";
	$car1->modelo = "Roadster";
	$car1->cor = "Vermelho";
	$car1->placa = "MARTE01";

	$car2->marca = "Volkswagen";
	$car2->modelo = "Fusca";
	$car2->cor = "Azul";
	$car2->placa = "HERBIE53";

	print $car1->marca;
	print $car2->marca;

	$car1->desligar();
	$car2->acelerar();

	class Pessoa {
		public $nome;
		public $idade;
		
		function __construct($nome, $idade) {
			$this->nome = $nome;
			$this->idade = $idade;
			print "Um objeto foi criado <br/>";
		}

		function perfil() {
			print "Eu sou " . $this->nome . "<br/>";
			print "Eu tenho " . $this->idade . " anos de idade.<br/>";
		}
	}

	$p1 = new Pessoa('Maria', 22);
	$p1->perfil();

	//$p2 = new Pessoa();

	class FahrenheitToCelsius {
		public $temperatura;

		function __construct($temp) {
			$this->setTemperatura($temp);
		}

		function setTemperatura($temp) {
			if ($temp >= -459.67) {
				$this->temperatura = $temp;
			} else {
				throw new Exception("Não existe temperatura inferior a -459.67");
			}
		}

		function getTemperatura() {
			return 5.0 / 9.0 * ($this->temperatura - 32.0);
		}
	}

	$x = new FahrenheitToCelsius(-500);
	print $x->getTemperatura() . "<br/>";

	class Romano {
		private $_numero;

		function getNumero() {
			return $this->_numero;
		}

		function setNumero($value) {
			if ($value >= 1 && $value <= 5) {
				$this->_numero = $value;
			} else throw new Exception('Número incorreto.');
		}

		function getRomano() {
			$numero2romano = array(1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V');
			return $numero2romano[$this->_numero];
		}

		function setRomano($value) {
			$romano2numero = array('I' => 1, 'II' => 2, 'III' => 3, 'IV' => 5, 'V' => 5);
			if (array_key_exists($value, $romano2numero)) {
				$this->_numero = $romano2numero[$value];
			} else throw new Exception('Número romano incorreto.');
		}
	}

	$x = new Romano();

	$x->setNumero(3);
	print $x->getNumero() . "<br/>";
	print $x->getRomano() . "<br/>";

	$x->setRomano('V');
	print $x->getNumero() . "<br/>";
	print $x->getRomano() . "<br/>";

	class Usuario {
		private $_nome;
		private $_idade;

		function __construct($nome, $idade) {
			$this->setNome($nome);
			$this->setIdade($idade);
			print "Novo usuário criado. <br/>";
		}

		function getNome() {
			return $this->_nome;
		}

		function setNome($value) {
			if ($value != '') {
				$this->_nome = $value;
			} else throw new Exception('O nome é obrigatório.');
		}

		function getIdade() {
			return $this->_idade;
		}

		function setIdade($value) {
			if ($value > 0) {
				$this->_idade = $value;
			} else throw new Exception('Idade tem que ser maior que zero.');
		}
	}

	class Professor extends Usuario {
		private $_salario;

		function __construct($nome, $idade, $salario) {
			parent::__construct($nome, $idade);
			$this->setSalario($salario);
			print "Novo professor criado. <br/>";
		}

		function getSalario() {
			return $this->_salario;
		}

		function setSalario($value) {
			if ($value >= 0) {
				$this->_salario = $value;
			} else throw new Exception('Salário não pode ser negativo.');
		}
	}

	class Estudante extends Usuario {
		private $_notas;

		function __construct($nome, $idade, $notas) {
			parent::__construct($nome, $idade);
			$this->setNotas($notas);
			print "Novo estudante criado. <br/>";
		}

		function getNotas() {
			return $this->_notas;
		}

		function setNotas($value) {
			if ($value >= 0) {
				$this->_notas = $value;
			} else throw new Exception('Notas não podem ser negativas.');
		}
	}

	$professor1 = new Professor('João', 20, 3500);
	$professor2 = new Professor('Maria', 50, 4000);

	$estudante1 = new Estudante('Ana', 14, [70, 85, 62]);
	$estudante2 = new Estudante('Rodrigo', 13, [72, 67, 84]);

	print 'Professor: ' . $professor1->getNome() . ', ';
	print $professor1->getIdade() . ' anos, Salário: R$ ';
	print $professor1->getSalario() . '<br/>';

	print 'Estudante: ' . $estudante2->getNome() . ', ';
	print $estudante2->getIdade() . ' anos <br/>';
	print 'Notas: <br/>';
	foreach ($estudante2->getNotas() as $k => $nota) {
		print $nota . '<br/>';
	}
?>
