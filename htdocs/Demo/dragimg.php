<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drag Demo</title>

<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.container {
    margin-top: 50px;
    cursor:move;
}
#screen {
    overflow:hidden;
    width:500px;
    height:500px;
    clear:both;
    border:1px solid black;
}
-->
</style>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript">
$(function() {
    $("#draggable").draggable();
});
</script>
</head>

<body>

<div class="container">

    <div id="screen">
        <img src="images/211.jpg" class="drag-image" id="draggable"/>
    </div>

</div>

</body>
</html>