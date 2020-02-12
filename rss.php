<?php
	
	$object = new DOMDocument();
	$object->load("https://xmll.herokuapp.com/");
	
	
	$content = $object->getElementsByTagName("item");
	
	foreach($content as $data){
			$id = $data->getElementsByTagName("id")->item(0)->nodeValue;
			$firstname = $data->getElementsByTagName("firstname")->item(0)->nodeValue;
			$age = $data->getElementsByTagName("age")->item(0)->nodeValue;
			$gender = $data->getElementsByTagName("gender")->item(0)->nodeValue;
			
	
		echo "<ul>
    <li>Id: <strong>$id</strong></li>
    <li>Firstname: <strong>$firstname</strong></li>
    <li>Age: <strong>$age</strong></li>
    <li>Gender: <strong>$gender</strong></li>
    </ul>";
	}
