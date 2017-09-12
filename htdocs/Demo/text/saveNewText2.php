<?php
$myFile = fopen ("second-wrapper-txt.txt", "w");
$text = $_POST['newText'];

fwrite ($myFile, $text);

?>