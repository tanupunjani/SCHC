<?php
$myFile = fopen ("box1-txt.txt", "w");
$text = $_POST['newText'];

fwrite ($myFile, $text);

?>