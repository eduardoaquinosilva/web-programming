<?php
	// Singleton
	class Conexao {
		private static $instance;

		private function __construct() {}

		public static function getInstance() {
			if (empty(self::$instance)) {
				self::$instance = new Conexao();
				print '<p> Nova Conexão </p>';
			} else {
				print '<p> Conexão Existente </p>';
			}

			return self::$instance;
		}
	}

	$conA = Conexao::getInstance();
	$conB = Conexao::getInstance();
	$conC = Conexao::getInstance();

	//Adapter e SlackApi
	interface Notificacao {
		public function send(string $titulo, string $mensagem);
	}

	class EmailNotificacao implements Notificacao {
		private $adminEmail;

		public function __construct(string $adminEmail) {
			$this->adminEmail = $adminEmail;
		}

		public function send(string $titulo, string $mensagem) {
			print "Email enviado: '$titulo' para '{$this->adminEmail} com a mensagem '$mensagem'.";
		}
	}

	class SlackApi {
		private $login;
		private $apiKey;

		public function __construct(string $login, string $apiKey) {
			$this->login = $login;
			$this->apiKey = $apiKey;
		}

		public function logIn() {
			print "Logado no Slack: '{$this->login}'.</br>";
		}

		public function sendMessage(string $chatId, string $mensagem) {
			print "Mensagem enviada para o chat '$chatId': '$mensagem'.</br>";
		}
	}

	class SlackNotificacao implements Notificacao {
		private $slack;
		private $chatId;

		public function __construct(SlackApi $slack, string $chatId) {
			$this->slack = $slack;
			$this->chatId = $chatId;
		}

		public function send(string $titulo, string $mensagem) {
			$slackMenssagem = "#" . $titulo . "#" . $mensagem;
			$this->slack->logIn();
			$this->slack->sendMessage($this->chatId, $slackMenssagem);
		}
	}

	print "Código cliente funciona com notificações por e-mail:</br>";
	$notificacao = new EmailNotificacao("admin@admin.com");
	$notificacao->send("O website está fora do ar!", "Nosso website não responde. Help!");

	print "</br></br>";

	print "O mesmo código Cliente funciona com outras classes via adaptador:</br>";
	$slackApi = new SlackApi("login", "senha");
	$notificacao = new SlackNotificacao($slackApi, " Desenvolvedores ");
	$notificacao->send("O website está fora do ar!", "Nosso website não responde. Help!");
?>
