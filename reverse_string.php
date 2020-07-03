<?php

	
$input = "My Name is Alok";
$output = "";

$word = "";
for ($i = 0; @$input[$i] != ""; $i++) {
	if ($input[$i] == " ") {
		$output = " " . $word . $output;
		$word = "";
	} else {
		$word = $word . $input[$i];
	}
}
$output = $word . $output;

echo $output;



?>