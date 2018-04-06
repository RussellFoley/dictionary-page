<?php
	
	$langlist = ["en", "cy", "ga"];

	$browserLangs = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
	foreach($browserLangs as $lang)
	{
		$langcode = substr(explode(";",$lang)[0],0,2);//get only the first two characters of string code
		if (in_array($langcode, $langlist))
		{
			header("Location: " . $langcode . ".php");
			break;
		}
	}
	header("Location: en.php");