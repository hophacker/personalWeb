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
        "passion" => "#DC4632"
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
    private static $generalStyle = "%class{ color: %color; font-size: %font-size ; font-weight: %font-weight;}";
    private static $search = array("%class", "%color", "%font-size", "%font-weight");
    public static function headerClass()
    {
        $replace = array(".header", self::$color["life"], self::$size["BIG"], "bold");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
    public static function labelClass()
    {
        $replace = array(".label", self::$color["passion"], self::$size["big"], "bold");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
    public static function sectionClass()
    {
        $replace = array(".section", self::$color["section"], self::$size["big"], "bold");
        echo str_replace(self::$search, $replace, self::$generalStyle);
    }
}
