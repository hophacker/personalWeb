<?php
/**
 * Created by PhpStorm.
 * User: joker_000
 * Date: 11/13/13
 * Time: 4:00 PM
 */
$root =  $_SERVER["DOCUMENT_ROOT"];
require_once("$root/include/style.php");
$header = "Social network evaluating";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$header?></title>
    <link href="../projects.css" type="text/css" rel="stylesheet"/>
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
        The goal of this research project has two folds:
    </div>
    <ol>
        <li>
            Building a crawler which can gather information efficiently when social networking platform
            putting strict restrictions there. There are several issues related to it:
            <ul>
                <li>
                    Is there any method to bypass such restrictions? For example, if the social networking platform limits our
                    ability of gathering some specific information(like user information) from one group of APIs, can we get that
                    information by using other APIs(the API designer did not even know these APIs can be used to get such information)
                    which has weaker limitation? What if our crawler crawl directly on the web page, thus avoid using APIs.
                    Then, will it be more efficient to get that kind of information?
                </li>
                <li>
                    If such restrictions can not be bypassed, how to optimize the crawler's efficiency? That is, for instance,
                    if the social networking platform has a limitation of the number of user's profile information the API can get in a single request,
                    how to make our crawler get as much information as possible from long time period of view?
                    What technique can we use to optimize such work?
                </li>
                <li>
                    Since social networking platform always has IP restriction, which limits the number of requests one IP can do in a period of time.
                    This largely deteriorates the efficiency of our crawler.
                    The most obvious solution to make more requests is to use more IPs and to deploy distributed crawlers.
                    Here comes the issue that how to synchronize the work of crawlers from different IPs?
                    For example, if the API getFriends is used to get some user's friends, then if two crawlers of different IPs request this API for the same person, their work will be duplicated thus efficiency is lost.
                    The problem actually is much more complicated in real situation.
                    One naive implementation is to let all IPs use one centralized database for all database operations.
                    Programming work for this implementation is fairly easy, but the database become blocked if the requests
                    of all the IPs exceed the processing capability of this centralized database.
                    Our group looked for several new techniques,one technique we have found but haven't fully implemented is what we
                    call  "multi-level-crawler".<br/>
                    Generally, in this technique, all the IPs are divided into different levels.<br/>
                    On top of the level, there is the "Master", whose task is to divide the work and then send each piece
                    of the work to different IPs one level down. All the IPs at the this level are named "Slave-1".
                    Each "Slave-1" divides the work received from "Master" and sends each piece of the work to "Slave-2" at the third level.<br/>
                    And so on...
                    The IPs in the last level do the real crawling work. <br/>
                    It's obvious to see that the IPs in the last level will receive different piece of work, thus avoid duplicating.<br/>
                    One thing to mention is that, the work the upper IP sends to lower level is a combined group of data, which is different
                    from normal SQL query one at a time, thus boost the efficiency of communication between different levels of IPs.<br/>

                    Upon last level of IPs receiving new work, they will crawl new data. When the newly crawled
                    data approaches some threshold, these IPs will pack the data and send the data back to upper level
                    IPs. When upper level IPs get new data, they will combine them and send back to IPs one level up, and so on.<br/>
                    Upon master IP receiving new data, it will divide the data and send them to all the "Slave-1"s again<br/>


                    Here is one picture which describes the workflow of all the IPs.<br/>
                    <img src="master-slave.png" alt="malti-level-cooperation"/>
                </li>
            </ul>
            To date, we have implemented a distributed crawler with the ability to crawl more than 400,000 rows of user data on the
            social networking platform, <a href="working distributely ">Sina Weibo</a>,  in one hour.
            However, there are still many issues in this project remain unsolved.
        </li>
        <li>
            The second task of this project is to evaluate existing social networking platform, including the ability to
            gather personal information, the prevalence of attacks, and the identification and classification
            of bad actors/profiles and threats, with the help of <a href="http://avirubin.com/">Pro.Avi Rubin</a> and staff from the startup company <a hreggf='//riskive.com/'>Riskive</a>.
        </li>
    </ol>

</div>
<div class="section">
    <div class="sectionText">
        Source Code
    </div>
    <p/>
    <a href="https://github.com/hophacker/evaluateSN" target="_blank">https://github.com/hophacker/evaluateSN</a>
</div>

<div class="section">
    <div class="sectionText">
        Languages
    </div>
    <p/>
    <span class="language">Java</span>,
    <span class="language">Perl</span>,
    <span class="language">Bash</span>,
    <span class="language">SQL</span>
</div>

</body>
</html>
