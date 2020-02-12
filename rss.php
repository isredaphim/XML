<?php
	
	$object = new DOMDocument();
	$object->load("https://exerxml.herokuapp.com/");
	
	
	$content = $object->getElementsByTagName("item");
	
	foreach($content as $data){
			$ID = $data->getElementsByTagName("id")->item(0)->nodeValue;
			$firstname = $data->getElementsByTagName("firstname")->item(0)->nodeValue;
			$age = $data->getElementsByTagName("age")->item(0)->nodeValue;
			$gender = $data->getElementsByTagName("gender")->item(0)->nodeValue;
			
	
		echo "$ID - $firstname - $age - $gender <br>";
	}
