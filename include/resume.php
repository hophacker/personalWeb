<?php
/**
 * Created by PhpStorm.
 * User: joker_000
 * Date: 11/12/13
 * Time: 8:30 PM
 */

require_once("config.php");
class resume {
    public static $projects = array(
        array("title" => "Distributed social network evaluating",
            "people" => "Jie Feng",
            "time" => "2013.9-Now",
            "abstract" => "",
            "detailUrl" =>  "html/projects/distributed-social-network-evaluating/index.php"
        ),
        array("title" => "PHP Driven Databse",
            "people" => "Jie Feng, Frank Wang, Sungjin chung, Scott Zhang",
            "time" => "2013.11-Now",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "Software vulnerability analysis.",
            "people" => "Jie Feng",
            "time" => "2013.9-Now",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "Universal online examination system.",
            "people" => "Jie Feng, Lin Chen, Fangzhou zhu",
            "time" => "2011.7-Now",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "Searchable cryptographic storage system design",
            "people" => "Jie Feng, Dr.Luo, Zhen Wang",
            "time" => "",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "NDS Console Cracking",
            "people" => "Hui Wang, Yichen Zhou, Jie Feng, Shuhua You",
            "time" => "",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "Algorithm analysing, programming & teaching",
            "people" => "",
            "time" => "",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "Othello game and its AI",
            "people" => "Jie Feng",
            "time" => "",
            "abstract" =>  "",
            "detailUrl" => ""
        ),
        array("title" => "Simplified Email Client for Wangyi",
            "people" => "Jie Feng",
            "time" => "",
            "abstract" =>  "",
            "detailUrl" => ""
        )
    );
    public static function projects(){
        global $web_name;
        $out =
<<<EOF
<div id="projectExperience" class="section">
    <div class="sectionText">
        Projects
    </div>
EOF;
        foreach (self::$projects as $p){
            $out .=
<<<EOF
    <div class="project">
        <div class="title">{$p["title"]}</div>
        <a href="/$web_name/{$p["detailUrl"]}">Detail</a>
    </div>\n
EOF;
        }
        $out .= "</div>\n";
        print $out;
    }
}
