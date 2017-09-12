<?php
$myFile = fopen ("main-wrapper-txt.txt", "w");
$text = $_POST['newText'];

fwrite ($myFile, $text);

?>