<?php
/**
 * Created by PhpStorm.
 * User: joker_000
 * Date: 11/13/13
 * Time: 4:00 PM
 */
$root =  $_SERVER["DOCUMENT_ROOT"];
require_once("$root/include/style.php");
$header = "Universal online examination system";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$header?></title>
    <link href="../projects.css" type="text/css" rel="stylesheet"/>
    <link href="../../../css/main.css" type="text/css" rel="stylesheet"/>
    <style type="text/css">
        <?=Style::format()?>
    </style>
</head>
<body>
<div class="headerText">
    <?=$header?>
</div>
<div class="section">
    <div class="sectionText">
        Description
    </div>
    Due to my laziness, I haven't thought a proper way to describe this giant project.<br/>
    Generally, it's built by me and some of my friends.
    The original reason to build this application was that one of my friend's father
    needed a web based examination system which could serve the whole university he belongs to(he is one of the top managers of that universities).<br/>
    We started this project from 18th, July, 2011 just after I talked with my friend's father and we reached general plan.<br/>
    For the first round of design, we used Jsp as the scripting language, Tomcat as the server, Oracle 9i as the database.
    The first work was just sucks since the database always got blocked when hundreds of students took an exam at a time.<br/>
    Description continuing....
</div>
<div class="section">
    <div class="sectionText">
        Source Code
    </div>
    <p/>
    <a href="https://github.com/yangda/universal-online-exam" target="_blank">https://github.com/jokerfeng2010/universal-online-exam</a>
</div>
<div class="section">
    <div class="sectionText">
        Demo
    </div>
    <p/>
    <a href="http://universal-online-exam.com" target="_blank">http://universal-online-exam.com</a>
</div>

<div class="section">
    <div class="sectionText">
        Languages & Techniques
    </div>
    <ul>
        <li><span><span class="language">LAMP Design</span></span></li>
        <li><span class="language">Ubuntu Server(Desktop) 12.04</span></li>
        <li><span class="language">Bash</span></li>
        <li><span class="language">MySQL</span></li>
        <li><span class="language">Apache 2.0</span></li>
        <li><span class="language">PHP</span></li>
        <li><span class="language">CakePHP</span>(MVC Framework)</li>
        <li><span class="language">Smarty</span>(Light-Weight PHP Template Engine)</li>
        <li><span class="language">KoolPHPSuite</span>(PHP UI Components suite)</li>
        <li><span class="language">jqSuite</span>(Another PHP UI Components sutie)</li>
        <li><span class="language">Javascript</span></li>
        <li><span class="language">JS plugins(jtable, DebugKit, ckeditor)</span></li>
        <li><span class="language">JQuery</span></li>
        <li><span class="language">Html</span></li>
        <li><span class="language">Css</span></li>
    </ul>
</div>

</body>
</html>
