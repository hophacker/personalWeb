<?php
/**
 * Created by PhpStorm.
 * User: joker_000
 * Date: 11/12/13
 * Time: 8:30 PM
 */

class resume {
    public static $projects = array(
        array("title" => "Distributed social network evaluator",
            "people" => "Jie Feng",
            "time" => "2013.9-Now",
            "abstract" => "",
            "detailUrl" => ""
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
        foreach (self::$projects as $p){
            print  <<<EOF
<div class='project'>
    <div class="title">{$p["title"]}</div>
    <a href='{$p["detailUtl"]}'>Detail</a>
</div>\n
EOF;

        }
    }
}
