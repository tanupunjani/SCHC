<?php
$myFile = fopen ("box2-txt.txt", "w");
$text = $_POST['newText'];

fwrite ($myFile, $text);

?>