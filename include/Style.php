<?php
/**
 * Created by PhpStorm.
 * User: joker_000
 * Date: 11/10/13
 * Time: 9:29 PM
 */
class Style
{
    public static $color = array(
        "muse" => "#196EEF",
        "happy" => "#FFB801",
        "life" => "#009855",
        "passion" => "#DC4632",
        "header" => "#009855",
        "section" => "#DC4632",
        "secsec" => "#009855",
        "label" => "#009855"
    );
    public static $size = array(
        "small" => "12px",
        "Small" => "16px",
        "SMALL" => "20px",
        "big" => "24px",
        "Big" => "28px",
        "BIG" => "32px",
        "large" => "40x",
        "Large" => "60px",
        "LARGE" => "80px"
    );
    private static $generalStyle = <<<EOF
        %class{
        color: %color;
        font-size: %font-size ;
        font-weight: %font-weight;
        text-align: %text-align;
        %addition;
        }\n
EOF;
    private static $search = array("%class", "%color", "%font-size", "%font-weight", "%text-align", "%addition");
    public static function headerClass()
    {
        $replace = array(".headerText", self::$color["header"], self::$size["BIG"], "bold", "center", "margin: 20px 0");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
    public static function sectionClass()
    {
        $replace = array(".sectionText", self::$color["section"], self::$size["big"], "bold", "left");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
    public static function secsecClass()
    {
        $replace = array(".secsecText", self::$color["secsec"], self::$size["SMALL"], "bold", "left");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
    public static function labelClass()
    {
        $replace = array(".paraText", self::$color["secsec"], self::$size["Small"], "bold", "left");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
    public static function format(){
        self::headerClass();
        self::sectionClass();
        self::secsecClass();
    }
}
