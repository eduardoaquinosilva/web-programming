<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	//Load Composer's autoloader
	require 'vendor/autoload.php';
	
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = '590eba0f7983b3';                     //SMTP username
		$mail->Password   = 'bde0ce722d26f1';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom($_POST['email'], 'Mailer');
		//$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
		//$mail->addAddress('ellen@example.com');               //Name is optional
		$mail->addAddress('eduaquino1717@gmail.com', $_POST['name']);
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $_POST['subject'];
		$mail->Body    = $_POST['name'] . "<br/>" . $_POST['message'];
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
	  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>

<!--
https://mailtrap.io/
https://github.com/PHPMailer/PHPMailer
composer require phpmailer/phpmailer
-->

<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v1/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Contact V1</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v1/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="./email_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./email_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./email_files/animate.css">

<link rel="stylesheet" type="text/css" href="./email_files/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./email_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./email_files/util.css">
<link rel="stylesheet" type="text/css" href="./email_files/main.css">

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="./email_files/analytics.js" nonce="20b78a43-e726-4030-bd67-c6939db49538"></script><script defer="" referrerpolicy="origin" src="./email_files/s.js"></script><script nonce="20b78a43-e726-4030-bd67-c6939db49538">(function(w,d){!function(cM,cN,cO,cP){cM.zarazData=cM.zarazData||{};cM.zarazData.executed=[];cM.zaraz={deferred:[],listeners:[]};cM.zaraz.q=[];cM.zaraz._f=function(cQ){return function(){var cR=Array.prototype.slice.call(arguments);cM.zaraz.q.push({m:cQ,a:cR})}};for(const cS of["track","set","debug"])cM.zaraz[cS]=cM.zaraz._f(cS);cM.zaraz.init=()=>{var cT=cN.getElementsByTagName(cP)[0],cU=cN.createElement(cP),cV=cN.getElementsByTagName("title")[0];cV&&(cM.zarazData.t=cN.getElementsByTagName("title")[0].text);cM.zarazData.x=Math.random();cM.zarazData.w=cM.screen.width;cM.zarazData.h=cM.screen.height;cM.zarazData.j=cM.innerHeight;cM.zarazData.e=cM.innerWidth;cM.zarazData.l=cM.location.href;cM.zarazData.r=cN.referrer;cM.zarazData.k=cM.screen.colorDepth;cM.zarazData.n=cN.characterSet;cM.zarazData.o=(new Date).getTimezoneOffset();if(cM.dataLayer)for(const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_,da)=>({...c_[1],...da[1]})))))zaraz.set(cZ[0],cZ[1],{scope:"page"});cM.zarazData.q=[];for(;cM.zaraz.q.length;){const db=cM.zaraz.q.shift();cM.zarazData.q.push(db)}cU.defer=!0;for(const dc of[localStorage,sessionStorage])Object.keys(dc||{}).filter((de=>de.startsWith("_zaraz_"))).forEach((dd=>{try{cM.zarazData["z_"+dd.slice(7)]=JSON.parse(dc.getItem(dd))}catch{cM.zarazData["z_"+dd.slice(7)]=dc.getItem(dd)}}));cU.referrerPolicy="origin";cU.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));cT.parentNode.insertBefore(cU,cT)};["complete","interactive"].includes(cN.readyState)?zaraz.init():cM.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script><style>.windowPopup___n8cZo {
  height: 56px;
  width: 56px;
  border-radius: 7px 0px 0px 7px;
  overflow: hidden;
  transition: height 0.5s, width 0.5s;
  float: right;
  display: flex;
  flex-direction: column;
  margin-top: 6px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 1px 1px, rgba(0, 0, 0, 0.25) 0px 1.5px 6px, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
  font-family: Helvetica, Arial, sans-serif;
  border: 0;
}
.windowPopup___n8cZo.expanded___3DCOq {
  width: 350px;
  height: 250px;
}
.windowPopup___n8cZo.expanded___3DCOq .titleBar___rsA65 {
  cursor: default;
}
.windowPopup___n8cZo .titleBar___rsA65 {
  background-image: linear-gradient(45deg, #f4496f 0%, #ff4bcf 100%);
  height: 56px;
  width: 100%;
  display: flex;
  align-items: center;
  overflow: hidden;
  padding: 8px 4px 8px 8px;
  flex-shrink: 0;
  cursor: pointer;
}
.windowPopup___n8cZo .titleBar___rsA65 .shopifyIcon___3dKIq {
  height: 40px;
  width: 40px;
  -webkit-user-drag: none;
  margin-right: 12px;
  flex-shrink: 0;
}
.windowPopup___n8cZo .titleBar___rsA65 .titleBarText___1_z0U {
  color: white;
  font-size: 21px;
  font-weight: lighter;
  white-space: nowrap;
  flex-grow: 1;
  user-select: none;
}
.windowPopup___n8cZo .titleBar___rsA65 .closeButton___1bXCa {
  color: white;
}
.windowPopup___n8cZo .titleBar___rsA65 .closeButton___1bXCa:hover {
  background-color: rgba(0, 0, 0, 0.12);
}
.windowPopup___n8cZo .popupContent___2bnhz {
  background-color: white;
  flex-grow: 1;
  padding: 12px;
  display: flex;
  flex-direction: column;
}
.windowPopup___n8cZo .popupContent___2bnhz .shopInfo___2g-Ih {
  flex-grow: 1;
  font-size: 18px;
}
.windowPopup___n8cZo .popupContent___2bnhz .shopInfo___2g-Ih > * {
  min-width: 326px;
}
.windowPopup___n8cZo .popupContent___2bnhz .shopInfo___2g-Ih .popupContentText___2_KVy {
  margin-bottom: 12px;
}
.windowPopup___n8cZo .popupContent___2bnhz .shopInfo___2g-Ih .randomShopInfo___1l98f {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
.windowPopup___n8cZo .popupContent___2bnhz .checkOutMore___2QuSg {
  min-width: 326px;
  display: flex;
  align-items: center;
}
.windowPopup___n8cZo .popupContent___2bnhz .checkOutMore___2QuSg .checkOutMoreImage___fNBnT {
  width: 150px;
  margin-right: 8px;
}
.windowPopup___n8cZo .popupContent___2bnhz .checkOutMore___2QuSg .checkOutMoreText___3Hftj {
  font-size: 14px;
}
.windowPopup___n8cZo .popupContent___2bnhz .blockOptions___UAg6a {
  flex-shrink: 0;
  display: flex;
  justify-content: center;
  margin-top: 12px;
}
.windowPopup___n8cZo .popupContent___2bnhz .blockOptions___UAg6a .optionsButton___20NwV {
  padding-top: 4px;
  color: #b3b3b3;
  text-decoration: underline;
  cursor: pointer;
  width: fit-content;
}
.windowPopupIframe___2ztyD {
  width: 0px;
  height: 0px;
  z-index: 2147483647 !important;
  position: fixed !important;
  top: 285px !important;
  right: 0px !important;
  border: 0 !important;
}
</style><style>div[value="91691691"] { display: none; }</style></head>
<body data-new-gr-c-s-check-loaded="14.1088.0" data-gr-ext-installed="" cz-shortcut-listen="true">
<div class="contact1">
<div class="container-contact1">
<div class="contact1-pic js-tilt" data-tilt="">
<img src="./email_files/img-01.webp" alt="IMG">
</div>
<form class="contact1-form validate-form" method="post">
<span class="contact1-form-title">
Get in touch
</span>
<div class="wrap-input1 validate-input" data-validate="Name is required">
<input class="input1" type="text" name="name" placeholder="Name">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input1" type="text" name="email" placeholder="Email">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Subject is required">
<input class="input1" type="text" name="subject" placeholder="Subject">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Message is required">
<textarea class="input1" name="message" placeholder="Message"></textarea>
<span class="shadow-input1"></span>
</div>
<div class="container-contact1-form-btn">
<button class="contact1-form-btn">
<span>
Send Email
<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
</div>
</div>

<script src="./email_files/jquery-3.2.1.min.js"></script>

<script src="./email_files/popper.js"></script>
<script src="./email_files/bootstrap.min.js"></script>

<script src="./email_files/select2.min.js"></script>

<script src="./email_files/tilt.jquery.min.js"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async="" src="./email_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="./email_files/main.js"></script>
<script defer="" src="./email_files/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;775daa943c0c01a8&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


<script type="text/javascript" src="chrome-extension://hjbfbllnfhppnhjdhhbmjabikmkfekgf/windowscript.js"></script><div id="shadowMeasureIt"></div><div id="divCoordMeasureIt"></div><div id="divRectangleMeasureIt"><div id="divRectangleBGMeasureIt"></div></div></body><div id="ci-extension-div"></div><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>
