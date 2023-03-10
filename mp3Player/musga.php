<?php
function downloadFile($folder,$idYT){
  if ($folder=='jpg'){
    $to_download = 'http://img.youtube.com/vi/'.$idYT.'/mqdefault.jpg';
  }else{
    $result = file_get_contents('https://api.vevioz.com/api/button/mp3/'.$idYT);
    $links = explode('<a',$result);
    $mp364 = $links[5];
    $urls = explode("\"",$mp364);
    $to_download = $urls[1]; 
  }

  $downloaded = $folder.'/'.toURLFriendly(getTitleYT($idYT)).'.'.$folder;

  // File Handling
  
  $new_file = fopen($downloaded, "w") or die("cannot open" . $downloaded);
  
  // Setting the curl operations
  $cd = curl_init();
  curl_setopt($cd, CURLOPT_URL, $to_download);
  curl_setopt($cd, CURLOPT_FILE, $new_file);
  curl_setopt($cd, CURLOPT_TIMEOUT, 30); // timeout is 30 seconds, to download the large files you may need to increase the timeout limit.
  
  // Running curl to download file
  curl_exec($cd);
  if (curl_errno($cd)) {
    echo "the cURL error is : " . curl_error($cd);
  } else {
    $status = curl_getinfo($cd);
    //echo $status["http_code"] == 200 ? "The File is Downloaded" : "The error code is : " . $status["http_code"] ;
    // the http status 200 means everything is going well. the error codes can be 401, 403 or 404.
  }
  
  // close and finalize the operations.
  curl_close($cd);
  fclose($new_file);
}
function getTitleYT($idYT){
return explode('- YouTube',explode('</title>', explode('<title>', file_get_contents("https://www.youtube.com/watch?v=$idYT"))[1])[0])[0];
}

function getChannelYT($idYT){
  $str = file_get_contents('https://www.youtube.com/watch?v='.$idYT);
  $str = explode('itemprop',$str);
  return explode("\"",$str[11])[3]; 
}

function removeAccents( $str )
{
	$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð',
		'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã',
		'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ',
		'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ',
		'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę',
		'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī',
		'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ',
		'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ',
		'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť',
		'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ',
		'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ',
		'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');

	$b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O',
		'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c',
		'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u',
		'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D',
		'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g',
		'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K',
		'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o',
		'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S',
		's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W',
		'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i',
		'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
	return str_replace($a, $b, $str);
}

/**
 * @param  String $str The input string
 * @return String      The URL-friendly string (lower-cased, accent-stripped,
 *                     spaces to dashes).
 */
function toURLFriendly( $str )
{
	$str = removeAccents($str);
	$str = preg_replace(array('/[^a-zA-Z0-9 \'-]/', '/[ -\']+/', '/^-|-$/'), array('', '-', ''), $str);
	$str = preg_replace('/-inc$/i', '', $str);
	return strtolower($str);
}
function updateXML($idYT){
  $title = getTitleYT($idYT);
  $channel = getChannelYT($idYT);
  $name = 'lista-'.md5($_SERVER['HTTP_HOST']);

  if (!file_exists($name.'.xml')) {
    $xmlnew = simplexml_load_string('<playlist></playlist>');
      file_put_contents($name.'.xml',$xmlnew->asXml());
  } 
  
  $playlist = simplexml_load_file($name.'.xml');
  $playlist->addChild('name',$name);
  $playlist->addChild('urlxml',$_SERVER['HTTP_HOST'].'/'.$name.'.xml');
  $mp3 = $playlist->addChild('mp3');
  $mp3->addChild('title', $title);
  $mp3->addChild('channel', $channel);
  $mp3->addChild('jpg', $_SERVER['HTTP_HOST'].'/jpg/'.toURLFriendly($title).'.jpg');
  $mp3->addChild('url', $_SERVER['HTTP_HOST'].'/mp3/'.toURLFriendly($title).'.mp3');
  file_put_contents($name.'.xml',$playlist->asXml());  
}
$img = 'http://api.qrserver.com/v1/create-qr-code/?data='.urlencode($urlxml).'&size=100x100';
$id = 'BEEp4WBaD7w';
downloadFile('jpg',$id);
downloadFile('mp3',$id);
updateXML($id);
?>