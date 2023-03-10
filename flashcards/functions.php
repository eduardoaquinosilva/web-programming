<?php
	session_start();
	function loadCards() {
		$_SESSION['cards'] = array();
		$document = simplexml_load_file('cards.xml');
		$total = array();
		foreach ($document->card as $card) {
			$id = explode('.', strval($card->file));
			$id = $id[0];
			$total[] = array('id' => $id, 'img' => strval($card->file), 'term' => strval($card->term));
		}
		
		$_SESSION['cards'] = $total;
		$_SESSION['score'] = array();
	}

	function tryCard() {
		$term = '';
		foreach($_SESSION['cards'] as $card) {
			if ($_POST['id'] == $card['id']) {
				$term = $card['term'];
				
			}
		}

		if (strtolower($term) == strtolower($_POST['term'])) {
			$_SESSION['score'][$_POST['id']] = true;
			print true;
		} else print false;
	}

	function nextCard() {
		$keyPost = '';
		foreach($_SESSION['cards'] as $key=>$card) {
			if ($_POST['id'] == $card['id']) {
				$keyPost = $key;
				break;
			}
		}

		if (count($_SESSION['cards']) > ($keyPost + 1)) {
			$next = array_slice($_SESSION['cards'], $key);
			$next = next($next);
		} else $next = $_SESSSION['cards'][0];

		print json_encode($next);
	}

	function getScore() {
		$score = count($_SESSION['score']);
		$total = round(($score / 18) * 100);
		print $total;
	}
?>
