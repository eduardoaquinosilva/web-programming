<?php
	class GoogleBooksSearch {
		public $search;
		public $start;
		public $count;
		public $type;
		
		function __construct($search, $start, $count, $type) {
			$this->search = $search;
			$this->start = $start;
			$this->count = $count;
			$this->type = $type;
		}

		function getResults() {
			$results = array();
			$url = 'http://books.google.com/books/feeds/volumes?' . 'q=' . rawurlencode($this->search) . '&start-index=' . $this->start . '&max-results=' . $this->count . '&min-viewability=' . $this->type;
			$xml = file_get_contents($url);
			if (!strlen($xml)) return array(FALSE);

			$xml = str_replace('dc:', 'dc', $xml);
			$sxml = simplexml_load_string($xml);

			foreach ($sxml->entry as $item) {
				$title = $item->title;
				$author = $item->dccreator;
				$pub = $item->dcpublisher;
				$date = $item->dcdate;
				$desc = $item->dcdescription;
				$thumb = $item->link[0]['href'];
				$info = $item->link[1]['href'];
				$preview = $item->link[2]['href'];

				if (!strlen($pub)) $pub = $author;
				if (!preview == 'http://www.google.com/books/feeds/users/me/volumes') $preview = FALSE;
				if (!strlen($desc)) $desc = '(No description)';
				if (!strstr($thumb, '&img=1')) $thumb = 'http://books.google.com/googlebooks/' . 'images/no_cover_thumb.gif';
				$results[] = array($title, $author, $pub, $date, $desc, $thumb, $info, $preview);
			}

			return array(count($results), $results);
		}
	}
?>
