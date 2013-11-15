<?php
require_once("include/Style.php");
require_once("include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jie's Personal Website</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"/> -->

    <style type="text/css">
        <?=style::format()?>
        .section {
            width: 800px;
            display: block;
            margin: 10px auto;
            font-size: 18px;
        }
        #info {
            height: 275px;
        }
        #textinfo {
            width: 400px;
            float: left;
        }

        #photoinfo {
            float: right;
            height: 225px;
            margin-top: 0;
            padding-right: 30px;
        }

        #photoinfo img {
            margin: 20px 0;
            height: inherit;
        }

        #textinfo ul li {
            padding-bottom: 5px;
        }

        .language {
            font-size: <?=Style::$size['SMALL']?>;
            color: <?=Style::$color['muse']?>;
        }
        .name {
            font-size: <?=Style::$size['SMALL']?>;
            color: <?=Style::$color['muse']?>;
            font-style: italic;
            font-weight: bold;
        }

        .string {
            font-size: <?=Style::$size['SMALL']?>;
            color: <?=Style::$color['muse']?>;
        }
    </style>
    <script src="script/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        var imageNum = 0;
        var imageTotal = 7;
        function changeImage(){
            $("#photoinfo img").prop("src","image/jie" + imageNum + ".jpg");
            imageNum = (imageNum + 1) % imageTotal;
            setTimeout(function(){
                changeImage();
            }, 5000);
        }
        $(document).ready(function () {
            var b = Math.random();
            var src;
            if (b < 0.3) {
                src = "image/jie1.jpg";
            } else {
                src = "image/jie2.jpg";
            }
            changeImage();
        });
    </script>
</head>
<body>
<div id="name" class="headerText">
    Jie(John) Feng
</div>

<div id="info" class="section">
    <div id="textinfo" >
        <div class="sectionText">
            Contact
        </div>
        <ul>
            <li>Currently graduate student of:<br/>
                <a href="//isi.jhu.edu">Information Security Institute </a><br/>
                <a href="//www.jhu.edu">Johns Hopkins University</a><br/>
            </li>
            <li>Marylander, Room 736<br/> 3501, Saint Paul Street 3501<br/> Baltimore, MD 21218-2682</li>
            <li>Phone &ndash; (443) 996-2046</li>
            <li>JHU Email &ndash; <a class="email" href="mailto:jfeng17@jhu.edu">jfeng17@jhu.edu</a></li>
            <li>Gmail &ndash; <a class="email" href="mailto:jokerfeng2010@gmail.edu">jokerfeng2010@gmail.com</a></li>
        </ul>
    </div>
    <div id="photoinfo">
        <img src="" alt="Am I handsome?"/>
    </div>
</div>
<div id="researchinterest" class="section">
    <div class="sectionText">Research Interests</div>
    <div>
        My research interests include systems, database, security, cryptography. I have finished or currently work on a variety of projects, including:
    </div>
</div>
<div id="hobby" class="section">
    <div class="sectionText">
        Hobbies
    </div>
    <div>
        I definitely love programming and it's always my pleasure to try every aspect of it.<br/>
        To date, I've programmed with
        <span class="language">Pascal,</span>
        <span class="language">C,</span>
        <span class="language">Bash,</span>
        <span class="language">C++,</span>
        <span class="language">Java,</span>
        <span class="language">C#,</span>
        <span class="language">PHP,</span>
        <span class="language">Javascript,</span>
        <span class="language">Python,</span>
        <span class="language">Lisp,</span>
        <span class="language">Perl</span>(Listed in time sequence,pascal is my first programming language which I first
        played in junior school). <br/>
        The list is growing... <br/>
        My most loved among them are <span class="language">C</span>, <span class="language">Perl</span> and <span
            class="language">PHP</span>, the reasons are:
        <ul>
            <li>The omnipotence and simplicity of <span class="language">C</span> given by
                <span class="name">Dennis Ritchie</span> and <span class="name">Brian Kernighan</span>.
            </li>
            <li>Perl is super convenient, you can even use sequence like <span class="string">$res=`mysql -u $DB_ID -p$DB_PW $DB_NAME -e "select ..."`</span>
                to do database work and save the result without establishing connection in your code. <br/>
                Damn, It's cool! Besides, it's powerful too.
            </li>
            <li>
                Hacking web stuff without <span class="language">PHP</span> is really not fun at all... I'm writing this
                piece of code with <span class="language">PHP</span> now.
            </li>
        </ul>
        I define my life task be to extract value from data and to protect data.
    </div>
</div>


<br/>


<div id="links" class="section">
    <div class="sectionText">
        Links
    </div>
    <ul>
        <li>
            <a href="html/welcome.html"> Welcome </a>
        </li>
        <li>
            <a href="html/seminarsAndSessions.html"> Sessions &amp; Seminars</a>
        </li>
        <li>
            <a href="html/modern-cryptography-homework.html"> Homework Modern Cryptography</a>
        </li>
        <li>
            <a href="html/TooDoList.html"> Jie's Too-Doo List</a>
        </li>
        <li>
            <a href="html/personal-info.html"> Personal Information </a>
        </li>
        <li>
            <a href="html/Courses%20of%20Fall%20Semester,%202013.html"> Courses of Fall Semester 2013</a>
        </li>
    </ul>
</div>
</body>
</html>