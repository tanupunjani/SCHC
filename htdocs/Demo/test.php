<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<!---LINKS TO STYLESHEETS, SCRIPTS AND FUCNTIONS-->

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<link rel="stylesheet" type="text/css" href="styles/style.css"> <!--Link to main style sheet-->
<link rel="stylesheet" type="text/css" href="dropzone.css"> <!--Link to picture drop style sheet-->
<link rel="stylesheet" type="text/css" href="http://www.google.com/webfonts/specimen/Open+Sans"> <!--Link to fonts-->
<link href="alloy-editor/assets/alloy-editor-ocean-min.css" rel="stylesheet"> <!--Link to text editor style-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="styles/animate.css">
<link rel="stylesheet" type="text/css" href="styles/hover.css">
<link rel="stylesheet" type="text/css" href="jquery-ui.css">
<script src="alloy-editor/alloy-editor-all-min.js"></script> <!--Link to text editor program-->
<script type="text/javascript" src="dropzone.js"></script> <!--Link to picture drop program script-->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script> <!--Link to jquery library-->
<link rel="stylesheet" type="text/css" href="test.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="/resources/demos/style.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<title>Demo Site</title> <!--tab title of website-->

    <script type="text/javascript">
            $(document).ready(function() {
                $('.slideoutbtn').click(function(){
                    $('.container').toggleClass('active');
                    $('.slideoutbtn').toggleClass('toggle');
                })
            })
    </script>

<!-->
   <script>

        $(function(){

        var sPositions = localStorage.positions || "{}",

            positions = JSON.parse(sPositions);

        $.each(positions, function (id, pos) {

            $("#" + id).css(pos)

        })

        $("#draggable").draggable({

            scroll: false,

            stop: function (event, ui) {

                positions[this.id] = ui.position

                localStorage.positions = JSON.stringify(positions)

            }

        });

        $("#second-wrapper").draggable({

            scroll: false,

            stop: function (event, ui) {

               positions[this.id] = ui.position

                localStorage.positions = JSON.stringify(positions)

            }

        });

    });

</script>

<!-->

<script>

    var size = JSON.parse(localStorage.size || "{}");

   $(function () {
        var d = $("[id=secon-wrapper]").attr("id", function (i) {
            
            return "draggable_" + i
        })
        $.each(size, function (id, siz) {
        $("#" + id).css(siz)
        
        })

        $("#second-wrapper").resizable({

            scroll: false,

            stop: function (event, ui) {

            size[this.id] = ui.size

            localStorage.size = JSON.stringify(size)

            }

        });
    });
</script>

<script>
    var positions = JSON.parse(localStorage.positions || "{}");

    $(function () {
            var d = $("[id=draggable]").attr("id", function (i) {
                return "draggable_" + i
            })

            $.each(positions, function (id, pos) {
                $("#" + id).css(pos)
            })

            d.draggable({
                scroll: false,
                stop: function (event, ui) {
                    positions[this.id] = ui.position
                    localStorage.positions = JSON.stringify(positions)
             }
        });
    });
</script>

<script>
    var size = JSON.parse(localStorage.size || "{}");

    $(function () {
            var s = $("[id=second-wrapper]").attr("id", function (i) {
                return "draggable_" + i
            })

            $.each(positions, function (id, siz) {
                $("#" + id).css(pos)
            })

            s.draggable({
                scroll: false,
                stop: function (event, ui) {
                    positions[this.id] = ui.position
                    localStorage.positions = JSON.stringify(positions)
             }
        });
    });
</script>



    <script type="text/javascript">
        function myFunction() {
                            var xr = new XMLHttpRequest();
                            var url= "text/saveNewText.php";
                            var text = document.getElementById("main-wrapper").innerHTML;
                            var vars = "newText="+text;
                            
                            xr.open("POST",url, true);
                            xr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                            xr.send(vars);
                            }
    </script>

    <script type="text/javascript">

        function writetxt() {
                            var xr = new XMLHttpRequest();
                            var url= "text/saveNewText2.php";
                            var text = document.getElementById("second-wrapper").innerHTML;
                            var vars = "newText="+text;
                            
                            xr.open("POST",url, true);
                            xr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                            xr.send(vars);
                            }
    </script>

<!--Functions above will send server request to save the new text written in the text box. Need to make seperate functions for each DIV that needs to be editable-->

</head>

<header>
    <div class="container">
        <a href="index.php"><img src="pictures/shspnlogo.png" class="logo hvr-back-pulse" alt="YOUR LOGO HERE"></a> <!--menu bar logo here-->
        <nav>
            <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='aboutus.php'>About Us</a></li>
            <li><a href='members.php'>Members</a></li>
            <li><a href='resources.php'>Resources</a></li>
            <li><a href='homelessness.php'>Ending Homelessness</a></li>
            <li><a href='contactus.php'>Contact Us</a></li>
            </ul>
<!--menu items-->
            <button class='slideoutbtn'>
            <span></span>
            </button>
<!--slide out button, not visable if just regular screen-->
        <div class="nav-login">
        <?php
            if (isset($_SESSION['u_id'])) {
                echo '<form action="includes/logout.php" method="POST">
                <button type="submit" name="submit">Log Out</button></form>';
        }
        ?>
<!--php function will display a log out button only if the user is already logged in-->
        </div>
        </nav>
    </div>
</header>

<body>

<section class="banner">
    <div class="banner-wrapper">
        <img class="banner-pic" src="pictures/banner5.jpg">
    </div>
</section>

<!--Banner image-->

<div class="margin-wrapper">

<hr class="top-line">

<!--horizontal line-->

<h1 class="banner-text fadeInDown animated"><span>Welcome to Demo.com!</span></h1>

<!--Website title-->

<h1 class="title">Example Text and Image displayed below</h1>

<!--sub title text-->

<section>

<div class="text-picture-wrapper">

    <div id="draggable" class="ui-widget-content">
      <form action='upload.php' class='dropzone'> 
        <div class='fallback'>
            <input type='file' name='file'>
        </div>
     </form>
    </div>

    <div class="ui-widget-content" id="second-wrapper" <?php if (isset($_SESSION['u_id'])) {echo "onblur='writetxt()'";}?> > <!--checking if user is logged in, if logged in editable text function will be ran-->
        <p><?php include ("text/second-wrapper-txt.txt"); ?></p> <!--displaying text that is stored in local txt file-->
    </div>

</div>

</section>

</body>

    <?php if (isset($_SESSION['u_id'])) {echo "<script src='edit/editor.js'></script>";}?> <!--link to alloy rich text editor, link neeeds to be established for each text section that needs to be editable-->
    <?php if (isset($_SESSION['u_id'])) {echo "<script src='edit/editor2.js'></script>";}?> <!--link to alloy rich text editor, link neeeds to be established for each text section that needs to be editable-->

<hr class="footer-line">
<!--horizontal lines-->

</div>

<!--footer section starting-->
<footer class="footer1">
<div class="footer-container">  
    <div class="icons">
        <h1 class="footer-font">Check out our social media!<br>Example Text</h1>
        <hr class="footer-seperator">   
        <a href="#" class="fb"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="#" class="linked"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#" class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <!--footer icons using font awesome icons-->
        </div>
    </div>
</div>
</footer>

</html>