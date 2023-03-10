<?php
	switch($_POST['fruta']) {
		case 'maca':
			echo "<img src='https://icons.iconarchive.com/icons/alex-t/splash-of-fruit/96/button-apple-icon.png'>";
			break;
		case 'pera':
			echo "<img src='https://icons.iconarchive.com/icons/alex-t/splash-of-fruit/96/button-pear-icon.png'>";
			break;
		case 'uva':
			echo "<img src='https://icons.iconarchive.com/icons/alex-t/splash-of-fruit/96/button-grape-icon.png'>";
			break;
		default:
			echo "<img src='https://icons.iconarchive.com/icons/delacro/id/96/Help-icon.png'>";
			break;
	}
?>
