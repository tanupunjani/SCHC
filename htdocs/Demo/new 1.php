<link rel="stylesheet" type="text/css" href="C:\Users\itvolunteer\Desktop\hello.css">





td {
    border: 1px solid black;



}






table, th, td {
    border: 3px;
	border-style: solid;
	border-color: #0ba382 ;
}


<style>
    li
    {
      position:  absolute;
    }
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>

function drag_start(event)
    {
    var style = window.getComputedStyle(event.target, null);
    var str = (parseInt(style.getPropertyValue("left")) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top")) - event.clientY)+ ',' + event.target.id;
    event.dataTransfer.setData("Text",str);
    }
 
    function drop(event)
    {
    var offset = event.dataTransfer.getData("Text").split(',');
    var dm = document.getElementById(offset[2]);
    dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';
    dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';
    event.preventDefault();
    return false;
    }
 
    function drag_over(event)
    {
    event.preventDefault();
    return false;
    }  
	
</script>