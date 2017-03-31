<?php


$myFile = 'loggedTest.txt';
if (!file_exists($myFile)) {
  echo 'File not found';
}
else if(!$fh = fopen($myFile, 'w')) {
  echo 'Can\'t open file';
}
else {
  	

	$handle = fopen($myFile, 'w');

	fwrite($handle, 'password: ' . $_POST["name"]);

	echo 'Success open file';
	
}

//$myfile = '\log.txt';
//$handle = fopen($myfile, 'w') or die ('cannot pen file' .$myfile);

//$handle = fopen($file, 'w');

//fwrite($handle, $_POST["name"];
//$current = file_get_contents($file);
//$current .= $_POST["name"];

//file_put_contents($handle, $current);
//echo "i worked!";

?>
