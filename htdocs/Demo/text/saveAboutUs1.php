<?php
$myFile = fopen ("aboutus1.txt", "w");
$text = $_POST['newText'];

fwrite ($myFile, $text);

?>