<?php
	require('cambio.php');
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
	
  <body>
  	<?php
			if ($_POST != NULL) {
				$cambio = new Cambio($_POST['currency_from'], $_POST['currency_to'], $_POST['valor']);
				$resultado = $cambio->converter();
		?>

		<h2>Resultado: </h2>
		
		<h2 style="border-style: dashed;">
		<?php
			print $resultado['valor'] . ' ' . $resultado['nome_origem'] . ' = ' . $resultado['total'] . ' ' . $resultado['nome_destino'];		
		?>
		</h2>

		<?php
			}		
		?>

		<form action="index.php" method="POST">
			<h2>Eu tenho</h2>
			<input type="text" name="valor"/>
			<select name="currency_from">
				<option value="http://www.floatrates.com/daily/usd.xml">U.S. Dollar (USD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/eur.xml">Euro (EUR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gbp.xml">U.K. Pound Sterling (GBP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/aud.xml">Australian Dollar (AUD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cad.xml">Canadian Dollar (CAD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/jpy.xml">Japanese Yen (JPY) XML Feed </option>
				<option value="http://www.floatrates.com/daily/chf.xml">Swiss Franc (CHF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kmf.xml">	Comoro franc (KMF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/afn.xml">Afghan afghani (AFN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/all.xml">Albanian lek (ALL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/dzd.xml">Algerian Dinar (DZD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/aoa.xml">Angolan kwanza (AOA) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ars.xml">Argentine Peso (ARS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/amd.xml">Armenia Dram (AMD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/awg.xml">Aruban florin (AWG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/azn.xml">Azerbaijan Manat (AZN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bsd.xml">Bahamian Dollar (BSD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bhd.xml">Bahrain Dinar (BHD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bdt.xml">Bangladeshi taka (BDT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bbd.xml">Barbadian Dollar (BBD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/byr.xml">Belarussian Ruble (BYR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/byn.xml">Belarussian Ruble (BYN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bzd.xml">Belize dollar (BZD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bob.xml">Bolivian Boliviano (BOB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bam.xml">Bosnia and Herzegovina convertible mark (BAM) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bwp.xml">Botswana Pula (BWP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/brl.xml">Brazilian Real (BRL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bnd.xml">Brunei Dollar (BND) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bgn.xml">Bulgarian Lev (BGN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bif.xml">Burundian franc (BIF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/khr.xml">Cambodian riel (KHR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cve.xml">Cape Verde escudo (CVE) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xaf.xml">Central African CFA Franc (XAF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xpf.xml">CFP Franc (XPF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/clp.xml">Chilean Peso (CLP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cny.xml">Chinese Yuan (CNY) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cop.xml">Colombian Peso (COP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cdf.xml">Congolese franc (CDF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/crc.xml">Costa Rican Colón (CRC) XML Feed </option>
				<option value="http://www.floatrates.com/daily/hrk.xml">Croatian Kuna (HRK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cup.xml">Cuban peso (CUP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/czk.xml">Czech Koruna (CZK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/dkk.xml">Danish Krone (DKK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/djf.xml">Djiboutian franc (DJF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/dop.xml">Dominican Peso (DOP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xcd.xml">East Caribbean Dollar (XCD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/egp.xml">Egyptian Pound (EGP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ern.xml">Eritrean nakfa (ERN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/etb.xml">Ethiopian birr (ETB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/fjd.xml">Fiji Dollar (FJD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gmd.xml">Gambian dalasi (GMD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gel.xml">Georgian lari (GEL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ghs.xml">Ghanaian Cedi (GHS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gip.xml">Gibraltar pound (GIP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gtq.xml">Guatemalan Quetzal (GTQ) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gnf.xml">Guinean franc (GNF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gyd.xml">Guyanese dollar (GYD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/htg.xml">Haitian gourde (HTG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/hnl.xml">Honduran Lempira (HNL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/hkd.xml">Hong Kong Dollar (HKD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/huf.xml">Hungarian Forint (HUF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/isk.xml">Icelandic Krona (ISK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/inr.xml">Indian Rupee (INR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/idr.xml">Indonesian Rupiah (IDR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/irr.xml">Iranian rial (IRR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/iqd.xml">Iraqi dinar (IQD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ils.xml">Israeli New Sheqel (ILS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/jmd.xml">Jamaican Dollar (JMD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/jod.xml">Jordanian Dinar (JOD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kzt.xml">Kazakhstani Tenge (KZT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kes.xml">Kenyan shilling (KES) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kwd.xml">Kuwaiti Dinar (KWD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kgs.xml">Kyrgyzstan Som (KGS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lak.xml">Lao kip (LAK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lvl.xml">Latvian Lats (LVL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lbp.xml">Lebanese Pound (LBP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lsl.xml">Lesotho loti (LSL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lrd.xml">Liberian dollar (LRD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lyd.xml">Libyan Dinar (LYD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ltl.xml">Lithuanian Litas (LTL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mop.xml">Macanese pataca (MOP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mkd.xml">Macedonian denar (MKD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mga.xml">Malagasy ariary (MGA) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mwk.xml">Malawian kwacha (MWK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/myr.xml">Malaysian Ringgit (MYR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mvr.xml">Maldivian rufiyaa (MVR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mro.xml">Mauritanian Ouguiya (MRO) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mru.xml">Mauritanian ouguiya (MRU) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mur.xml">Mauritian Rupee (MUR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mxn.xml">Mexican Peso (MXN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mdl.xml">Moldova Lei (MDL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mnt.xml">Mongolian togrog (MNT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mad.xml">Moroccan Dirham (MAD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mzn.xml">Mozambican metical (MZN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mmk.xml">Myanma Kyat (MMK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nad.xml">Namibian dollar (NAD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/npr.xml">Nepalese Rupee (NPR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ang.xml">Neth. Antillean Guilder (ANG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/twd.xml">New Taiwan Dollar  (TWD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tmt.xml">New Turkmenistan Manat (TMT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nzd.xml">New Zealand Dollar (NZD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nio.xml">Nicaraguan Córdoba (NIO) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ngn.xml">Nigerian Naira (NGN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nok.xml">Norwegian Krone (NOK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/omr.xml">Omani Rial (OMR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pkr.xml">Pakistani Rupee (PKR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pab.xml">Panamanian Balboa (PAB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pgk.xml">Papua New Guinean kina (PGK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pyg.xml">Paraguayan Guaraní (PYG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pen.xml">Peruvian Nuevo Sol (PEN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/php.xml">Philippine Peso (PHP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pln.xml">Polish Zloty (PLN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/qar.xml">Qatari Rial (QAR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ron.xml">Romanian New Leu (RON) XML Feed </option>
				<option value="http://www.floatrates.com/daily/rub.xml">Russian Rouble (RUB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/rwf.xml">Rwandan franc (RWF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/svc.xml">Salvadoran colon (SVC) XML Feed </option>
				<option value="http://www.floatrates.com/daily/wst.xml">Samoan tala (WST) XML Feed </option>
				<option value="http://www.floatrates.com/daily/stn.xml">São Tomé and Príncipe Dobra (STN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sar.xml">Saudi Riyal (SAR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/rsd.xml">Serbian Dinar (RSD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/scr.xml">Seychelles rupee (SCR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sll.xml">Sierra Leonean leone (SLL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sgd.xml">Singapore Dollar (SGD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sbd.xml">Solomon Islands dollar (SBD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sos.xml">Somali shilling (SOS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/zar.xml">South African Rand (ZAR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/krw.xml">South Korean Won (KRW) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ssp.xml">South Sudanese pound (SSP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lkr.xml">Sri Lanka Rupee (LKR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sdg.xml">Sudanese pound (SDG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/srd.xml">Surinamese dollar (SRD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/szl.xml">Swazi lilangeni (SZL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sek.xml">Swedish Krona (SEK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/syp.xml">Syrian pound (SYP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tjs.xml">Tajikistan Ruble (TJS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tzs.xml">Tanzanian shilling (TZS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/thb.xml">Thai Baht (THB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/top.xml">Tongan paʻanga (TOP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ttd.xml">Trinidad Tobago Dollar (TTD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tnd.xml">Tunisian Dinar (TND) XML Feed </option>
				<option value="http://www.floatrates.com/daily/try.xml">Turkish Lira (TRY) XML Feed </option>
				<option value="http://www.floatrates.com/daily/aed.xml">U.A.E Dirham (AED) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ugx.xml">Ugandan shilling (UGX) XML Feed </option>
				<option value="http://www.floatrates.com/daily/uah.xml">Ukrainian Hryvnia (UAH) XML Feed </option>
				<option value="http://www.floatrates.com/daily/uyu.xml">Uruguayan Peso (UYU) XML Feed </option>
				<option value="http://www.floatrates.com/daily/uzs.xml">Uzbekistan Sum (UZS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/vuv.xml">Vanuatu vatu (VUV) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ves.xml">Venezuelan Bolivar (VES) XML Feed </option>
				<option value="http://www.floatrates.com/daily/vef.xml">Venezuelan Bolivar (till 20 August 2018) (VEF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/vnd.xml">Vietnamese Dong (VND) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xof.xml">West African CFA Franc (XOF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/yer.xml">Yemeni rial (YER) XML Feed </option>
				<option value="http://www.floatrates.com/daily/zmw.xml">Zambian kwacha (ZMW) XML Feed </option>
			</select>

			<h2>Eu quero</h2>
			<select name="currency_to">
				<option value="http://www.floatrates.com/daily/usd.xml">U.S. Dollar (USD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/eur.xml">Euro (EUR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gbp.xml">U.K. Pound Sterling (GBP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/aud.xml">Australian Dollar (AUD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cad.xml">Canadian Dollar (CAD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/jpy.xml">Japanese Yen (JPY) XML Feed </option>
				<option value="http://www.floatrates.com/daily/chf.xml">Swiss Franc (CHF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kmf.xml">	Comoro franc (KMF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/afn.xml">Afghan afghani (AFN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/all.xml">Albanian lek (ALL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/dzd.xml">Algerian Dinar (DZD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/aoa.xml">Angolan kwanza (AOA) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ars.xml">Argentine Peso (ARS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/amd.xml">Armenia Dram (AMD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/awg.xml">Aruban florin (AWG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/azn.xml">Azerbaijan Manat (AZN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bsd.xml">Bahamian Dollar (BSD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bhd.xml">Bahrain Dinar (BHD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bdt.xml">Bangladeshi taka (BDT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bbd.xml">Barbadian Dollar (BBD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/byr.xml">Belarussian Ruble (BYR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/byn.xml">Belarussian Ruble (BYN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bzd.xml">Belize dollar (BZD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bob.xml">Bolivian Boliviano (BOB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bam.xml">Bosnia and Herzegovina convertible mark (BAM) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bwp.xml">Botswana Pula (BWP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/brl.xml">Brazilian Real (BRL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bnd.xml">Brunei Dollar (BND) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bgn.xml">Bulgarian Lev (BGN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/bif.xml">Burundian franc (BIF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/khr.xml">Cambodian riel (KHR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cve.xml">Cape Verde escudo (CVE) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xaf.xml">Central African CFA Franc (XAF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xpf.xml">CFP Franc (XPF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/clp.xml">Chilean Peso (CLP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cny.xml">Chinese Yuan (CNY) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cop.xml">Colombian Peso (COP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cdf.xml">Congolese franc (CDF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/crc.xml">Costa Rican Colón (CRC) XML Feed </option>
				<option value="http://www.floatrates.com/daily/hrk.xml">Croatian Kuna (HRK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/cup.xml">Cuban peso (CUP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/czk.xml">Czech Koruna (CZK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/dkk.xml">Danish Krone (DKK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/djf.xml">Djiboutian franc (DJF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/dop.xml">Dominican Peso (DOP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xcd.xml">East Caribbean Dollar (XCD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/egp.xml">Egyptian Pound (EGP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ern.xml">Eritrean nakfa (ERN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/etb.xml">Ethiopian birr (ETB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/fjd.xml">Fiji Dollar (FJD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gmd.xml">Gambian dalasi (GMD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gel.xml">Georgian lari (GEL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ghs.xml">Ghanaian Cedi (GHS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gip.xml">Gibraltar pound (GIP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gtq.xml">Guatemalan Quetzal (GTQ) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gnf.xml">Guinean franc (GNF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/gyd.xml">Guyanese dollar (GYD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/htg.xml">Haitian gourde (HTG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/hnl.xml">Honduran Lempira (HNL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/hkd.xml">Hong Kong Dollar (HKD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/huf.xml">Hungarian Forint (HUF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/isk.xml">Icelandic Krona (ISK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/inr.xml">Indian Rupee (INR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/idr.xml">Indonesian Rupiah (IDR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/irr.xml">Iranian rial (IRR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/iqd.xml">Iraqi dinar (IQD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ils.xml">Israeli New Sheqel (ILS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/jmd.xml">Jamaican Dollar (JMD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/jod.xml">Jordanian Dinar (JOD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kzt.xml">Kazakhstani Tenge (KZT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kes.xml">Kenyan shilling (KES) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kwd.xml">Kuwaiti Dinar (KWD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/kgs.xml">Kyrgyzstan Som (KGS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lak.xml">Lao kip (LAK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lvl.xml">Latvian Lats (LVL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lbp.xml">Lebanese Pound (LBP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lsl.xml">Lesotho loti (LSL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lrd.xml">Liberian dollar (LRD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lyd.xml">Libyan Dinar (LYD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ltl.xml">Lithuanian Litas (LTL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mop.xml">Macanese pataca (MOP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mkd.xml">Macedonian denar (MKD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mga.xml">Malagasy ariary (MGA) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mwk.xml">Malawian kwacha (MWK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/myr.xml">Malaysian Ringgit (MYR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mvr.xml">Maldivian rufiyaa (MVR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mro.xml">Mauritanian Ouguiya (MRO) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mru.xml">Mauritanian ouguiya (MRU) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mur.xml">Mauritian Rupee (MUR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mxn.xml">Mexican Peso (MXN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mdl.xml">Moldova Lei (MDL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mnt.xml">Mongolian togrog (MNT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mad.xml">Moroccan Dirham (MAD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mzn.xml">Mozambican metical (MZN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/mmk.xml">Myanma Kyat (MMK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nad.xml">Namibian dollar (NAD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/npr.xml">Nepalese Rupee (NPR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ang.xml">Neth. Antillean Guilder (ANG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/twd.xml">New Taiwan Dollar  (TWD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tmt.xml">New Turkmenistan Manat (TMT) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nzd.xml">New Zealand Dollar (NZD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nio.xml">Nicaraguan Córdoba (NIO) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ngn.xml">Nigerian Naira (NGN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/nok.xml">Norwegian Krone (NOK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/omr.xml">Omani Rial (OMR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pkr.xml">Pakistani Rupee (PKR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pab.xml">Panamanian Balboa (PAB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pgk.xml">Papua New Guinean kina (PGK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pyg.xml">Paraguayan Guaraní (PYG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pen.xml">Peruvian Nuevo Sol (PEN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/php.xml">Philippine Peso (PHP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/pln.xml">Polish Zloty (PLN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/qar.xml">Qatari Rial (QAR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ron.xml">Romanian New Leu (RON) XML Feed </option>
				<option value="http://www.floatrates.com/daily/rub.xml">Russian Rouble (RUB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/rwf.xml">Rwandan franc (RWF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/svc.xml">Salvadoran colon (SVC) XML Feed </option>
				<option value="http://www.floatrates.com/daily/wst.xml">Samoan tala (WST) XML Feed </option>
				<option value="http://www.floatrates.com/daily/stn.xml">São Tomé and Príncipe Dobra (STN) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sar.xml">Saudi Riyal (SAR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/rsd.xml">Serbian Dinar (RSD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/scr.xml">Seychelles rupee (SCR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sll.xml">Sierra Leonean leone (SLL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sgd.xml">Singapore Dollar (SGD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sbd.xml">Solomon Islands dollar (SBD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sos.xml">Somali shilling (SOS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/zar.xml">South African Rand (ZAR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/krw.xml">South Korean Won (KRW) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ssp.xml">South Sudanese pound (SSP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/lkr.xml">Sri Lanka Rupee (LKR) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sdg.xml">Sudanese pound (SDG) XML Feed </option>
				<option value="http://www.floatrates.com/daily/srd.xml">Surinamese dollar (SRD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/szl.xml">Swazi lilangeni (SZL) XML Feed </option>
				<option value="http://www.floatrates.com/daily/sek.xml">Swedish Krona (SEK) XML Feed </option>
				<option value="http://www.floatrates.com/daily/syp.xml">Syrian pound (SYP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tjs.xml">Tajikistan Ruble (TJS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tzs.xml">Tanzanian shilling (TZS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/thb.xml">Thai Baht (THB) XML Feed </option>
				<option value="http://www.floatrates.com/daily/top.xml">Tongan paʻanga (TOP) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ttd.xml">Trinidad Tobago Dollar (TTD) XML Feed </option>
				<option value="http://www.floatrates.com/daily/tnd.xml">Tunisian Dinar (TND) XML Feed </option>
				<option value="http://www.floatrates.com/daily/try.xml">Turkish Lira (TRY) XML Feed </option>
				<option value="http://www.floatrates.com/daily/aed.xml">U.A.E Dirham (AED) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ugx.xml">Ugandan shilling (UGX) XML Feed </option>
				<option value="http://www.floatrates.com/daily/uah.xml">Ukrainian Hryvnia (UAH) XML Feed </option>
				<option value="http://www.floatrates.com/daily/uyu.xml">Uruguayan Peso (UYU) XML Feed </option>
				<option value="http://www.floatrates.com/daily/uzs.xml">Uzbekistan Sum (UZS) XML Feed </option>
				<option value="http://www.floatrates.com/daily/vuv.xml">Vanuatu vatu (VUV) XML Feed </option>
				<option value="http://www.floatrates.com/daily/ves.xml">Venezuelan Bolivar (VES) XML Feed </option>
				<option value="http://www.floatrates.com/daily/vef.xml">Venezuelan Bolivar (till 20 August 2018) (VEF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/vnd.xml">Vietnamese Dong (VND) XML Feed </option>
				<option value="http://www.floatrates.com/daily/xof.xml">West African CFA Franc (XOF) XML Feed </option>
				<option value="http://www.floatrates.com/daily/yer.xml">Yemeni rial (YER) XML Feed </option>
				<option value="http://www.floatrates.com/daily/zmw.xml">Zambian kwacha (ZMW) XML Feed </option>
			</select>

			<br/><br/>
			<input type="submit"/>
		</form>
  </body>
</html>
