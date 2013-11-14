<?php
/**
 * Created by PhpStorm.
 * User: joker_000
 * Date: 11/13/13
 * Time: 4:00 PM
 */
$root =  $_SERVER["DOCUMENT_ROOT"];
require_once("$root/include/Style.php");
$header = "Distributed social network evaluator";
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
    The goal of this research project has two folds:
    <ol>
        <li>
            Evaluate existing social networking platform, including  the ability to
            gather personal information, the prevalence of attacks, and the identification and classification
            of bad actors/profiles and threats.
        </li>
        <li>
            Build a crawler which can gather information efficiently when social networking platform
            putting strict restrictions there. There are several issues related to it:
            <ul>
                <li>
                    Is there any method to bypass such restrictions? To be specific, if the social networking limits your
                    ability of gathering some specific information(like user information) from one API, can you get that
                    information by using other APIs which has weaker limitation? Is there any method which does not
                    use any API but still can get that information more efficiently?
                </li>
                <li>
                    If such restrictions can not be bypassed, how to optimize our crawler's work? That is, for example,
                    if the social platform has a limitation of the number of user data one can get in a single request,
                    how to make our crawler get as much new and valuable information as possible in a request by analysing
                    the data already got?
                </li>
                <li>
                    The issue is more difficult to solve. Since social networking platform always has IP restriction,
                    which limits the number of requests one IP can do in a period of time. The most obvious solution
                    to make more requests is to use more IPs and to deploy distributed crawlers. Here comes the issue
                    which is how to synchronize the work of distributed crawlers? For a simple case, if two IPs request
                    API request such as getFriends() for the same person, then their work duplicated thus efficiency is lost.
                    The problem actually is much more complicated in real situation.
                    One naive implementation is to let all IPs use one centralized database for all the query and insertion.
                    Programming work for this implementation is fairly easy,but the database become blocked if the requests
                    of all the IPs exceed the processing ability of this centralized database.
                    Our group looked for new techniques,one technique we have found but haven't implemented is what we
                    call  "multi-level-cooperation".<br/>
                    Generally, in this technique, all the IPs are divided into different levels.<br/>
                    On top of the level, there is the "Master" IP. It's task is to divide the work and then send each piece
                    of the work to different IPs one level down, named "Slave-1". Then "Slave-1" divide the work and
                    send each piece of the work to "Slave-2". The IPs in the last level do the real crawling job. <br/>
                    It's obvious to see the IPs in the last level will receive different piece of work, thus avoid duplicating.<br/>
                    One thing to mention is that, the work the upper IP sends is a combined group of data, which is different
                    from normal SQL query one at a time, thus boost the efficiency of communication between different levels
                    of IPs.<br/>
                    Upon last level of IPs receiving new work, they will crawl new information. When the newly crawled
                    information approaches some limit, these IPs will pack the data and send the data back to upper level
                    IPs. When upper level IPs get new data they will combine them and send back to IPs one level up, and so on.<br/>
                    Upon master IP receiving new data, it will divide the data and send them to all the slaves one level down.<br/>
                    Here is one picture which describe the workflow of all the IPs.<br/>
                    <img src="master-slave.png" alt="malti-level-cooperation"/>
                </li>
            </ul>
            To date, we have implemented a distributed crawler with the ability to crawl more than 400,000 rows of user data in the
            social networking platform, <a href="working distributely ">Sina Weibo</a>  in one hour. <b/>
            There are many issues in this project remain unsolved.
        </li>

        With the help of <a href='//avirubin.com/'>Pro.Avi Rubin</a> and staff from the startup company <a hreggf='//riskive.com/'>Riskive</a>.
        Our team designed this project aiming to

    </ol>

</div>
<div>

</div>

</body>
</html>
