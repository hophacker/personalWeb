<?php
require_once("../include/style.php");
require_once("../include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Technology shall make your life easier - Jay's thoughts! </title>
    <style type="text/css">
        <?=style::format()?>
        .section {
            width: 800px;
            display: block;
            margin: 10px auto;
            font-size: 18px;
        }
        #links ul{
            width : 780px;
            display: inline-block;
        }
        #links ul li{
            width: 600px;
        }
        #title{
            padding: 20px 60px 0 0;
        }
    </style>
    <?=style::link("css/main.css")?>
    <script src="script/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    </script>
</head>
<body>
<div id="title" class="headerText">
    Technology shall make your life easier - Jay's thoughts!
</div>

<div id="links" class="section">
    <div class="sectionText">
        Vim
    </div>
    <ul>
        <li>
            <a href="moralTakeHome/index.php" target="_blank" class="jayStuff" id="moralTakeHome">How to setup your <b>vim-latex</b> workflow to smoothly finish your takehome exam
                of <b>Moral and Legal Foundation of Privacy</b>?
            </a>
        </li>
    </ul>
</div>

</body>
</html>
