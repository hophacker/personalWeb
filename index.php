<?php
require_once("include/style.php");
require_once("include/config.php");
require_once("include/resume.php")
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
        #links ul{
            width : 780px;
            display: inline-block;
        }
        #links ul li{
            width: 390px;
            float: left;
        }
        #socialNetwork{
            text-align: center;
            width: 800px;
            margin: 10px auto;
        }
        #socialNetwork img{
            width: 30px;
        }
    </style>
    <?=style::link("css/main.css")?>
    <script src="script/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        var imageNum = 0;
        var imageTotal = 3;
        function changeImage() {
            $("#photoinfo img").prop("src", "image/jie" + imageNum + ".jpg");
            imageNum = (imageNum + 1) % imageTotal;
            setTimeout(function () {
                changeImage();
            }, 5000);
        }
        $(document).ready(function () {
            var b = Math.random();
            changeImage();
        });
    </script>
</head>
<body>
<div id="name" class="headerText">
    Jie Feng
</div>
<div id="socialNetwork">
  <span class="twitter"><a href="https://twitter.com/VonJ2" title="jie/twitter" rel="me"><img alt="Twitter" src="image/SocialNetwork/twitter-48.png" /></a></span>
  <span class="facebook"><a href="https://www.facebook.com/jie.von.5" title="jie/facebook" rel="me"><img alt="Facebook" src="image/SocialNetwork/facebook-48.png" /></a></span>
  <span class="plus"><a href="https://plus.google.com/108552422334038717429/posts" title="jie/plus" rel="author me"><img alt="Google Plus" src="image/SocialNetwork/plus-48.png" /></a></span>
  <span class="linkedin"><a href="http://www.linkedin.com/pub/jie-feng/7a/a2a/194" title="jie/linkedin" rel="me"><img alt="LinkedIn" src="image/SocialNetwork/linkedin-48.png" /></a></span>
  <span class="github"><a href="https://github.com/hophacker" title="jie/github" rel="me"><img alt="GitHub" src="image/SocialNetwork/github-48.png" /></a></span>
</div>

<div id="info" class="section">
    <div id="textinfo">
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
            <li>Gmail &ndash; <a class="email" href="mailto:jiefeng.hopkins@gmail.edu">jiefeng.hopkins@gmail.com</a></li>
        </ul>
    </div>
    <div id="photoinfo">
        <img src="" alt="Am I handsome?"/>
    </div>
</div>


<div id="links" class="section">
    <div class="sectionText">
        Links
    </div>
    <ul>
        <li>
            <a href="TechMakeLifeEasy/index.php" target="_blank" class="jayStuff" id="TechMakeLifeEaxy"> Tech shall make life easier!</a>
        </li>
        <!--
        <li>
            Jay's <a href="files/Resume.pdf" target="_blank" class="jayStuff" id="resume"> Resume </a>
        </li>
        -->
<!--        <li>
            Jay's <a href="http://www.youtube.com/watch?v=ksop9eSAcDs" target="_blank" class="jayStuff" id="youtube"> guitar show! </a>.
        </li>-->
        <li>
            Jie's <a href="https://github.com/hophacker/Jie/blob/master/.vimrc" target="_blank" class="jayStuff" > .vimrc</a>.
        </li>
<!--        <li>
            Jay's <a href="html/TooDoList.html" class="jayStuff">Too-Doo List</a>
        </li>-->
<!--        <li>
            <a href="html/seminarsAndSessions.html"> Sessions &amp; Seminars</a>
        </li>-->
<!--        <li>
            <a href="html/modern-cryptography-homework.html"> Homework Modern Cryptography</a>
        </li>-->

<!--        <li>
            <a href="html/Courses%20of%20Fall%20Semester,%202013.html"> Courses of Fall Semester 2013</a>
        </li>-->
    </ul>
</div>


<div id="researchinterest" class="section">
    <div class="sectionText">Interests</div>
    <div>
        My interests include systems, web, database, security, cryptography.
    </div>
</div>

<?//= resume::projects() ?>

<div id="hobby" class="section">
    <div class="sectionText">
        Hobbies
    </div>
        <ul>
            <li>
                Hacking algorithm challenges and algorithm contests. I prefer algorithm contests from the following platforms:
                <ul>
                    <li><a href="http://www.topcoder.com/">Topcoder</a></li>
                    <li><a href="http://codeforces.com/">Codeforces</a></li>
                    <li><a href="http://www.hackerrank.com">Hackerrank</a></li>
                </ul>
                Besides, I'm currently participating <a href="https://code.google.com/codejam"><b>Google Codejam 2014</b></a>
            </li>
            <li>
                Killing time on <a hre="https://www.quora.com/Jie-Feng-7">Quora</a>
            </li>
            <li>
                Taking different hackthons for fun, like <a href="http://hophacks.com/">Hophacks</a>. I'm also registered for <a href="http://www.hackduke.org">hackduke</a>,
                which will be held in 29th, March.
            </li>
            <li>
                Building some small Apps, maintaining some websites(including this), servers.
            </li>
            <li>
                Hacking some new stuff for fun, now I'm playing with Laravel framework and MongoDB.
            </li>
            <li>
                Travelling. I have traveled to some cities in both east cost and west cost, and I want to travel more.
            </li>
            <li>
                Play Warcraft 3, Dota with my roommates.
            </li>
        </ul>
    </div>
</div>

<div id="education" class="section">
    <div class="sectionText">
        Education
    </div>
    <ul>
        <li>M.S. in Security Informatics, The <a href="http://www.jhu.edu/" class="school">Johns Hopkins University</a> , 2013-</li>
        <li>B.E. in Software Engineering, <a href="http://www.suda.edu.cn/" class="school">Soochow University(China)</a>, 2009-2013</li>
        <li><a href="http://www.yzzx.org/" class="school">Yangzhou High School of Jiangsu Province</a>, 2006-2009</li>
    </ul>
</div>

<br/>


</body>
</html>
