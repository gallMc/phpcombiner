<?php
/**
 * Created by PhpStorm.
 * User: gallMc
 * Date: 16.08.14
 */

class page
{
    public static $headerStyle = '';
    public static $headerScript = '';
    public static $headerTitle = '';
    public static $speak;
    public static $language;

    public function __construct($language)
    {
        page::add_style("/tpl/css/bootstrap.min.css");
        page::add_style("/tpl/css/bootstrap-theme.min.css");
        page::add_script("http://code.jquery.com/jquery-1.11.0.min.js");
        page::add_script("/tpl/js/bootstrap.min.js");

        self::$language = $language;

        $this->constructor($_SERVER["REQUEST_URI"]);
    }

    private function constructor($thisUrl)
    {
        $url = explode("?", $thisUrl);
        $allListCategories = explode("/", $url[0]);
        $categoriesList = array_diff($allListCategories, array(''));

        if ($categoriesList[1] == "")
        {
            $categoriesList[1] = "home";
        }
        self::$speak = self::$language["page"][$categoriesList[1]];

        $this->load_tpl($categoriesList[1]);
    }

    public static function get_language($text)
    {
        return self::$speak[$text];
    }

    public function load_tpl($templateName)
    {
        include "tpl/templates/".$templateName.".php";
    }

    public static function get_head()
    {
        return self::$headerStyle.
               self::$headerTitle.
               self::$headerScript;
    }

    public static function add_style($url)
    {
        self::$headerStyle .= '<link rel="stylesheet" href="'.$url.'">';
    }

    public static function add_script($url)
    {
        self::$headerScript .= '<script type="text/javascript" src="'.$url.'"></script>';
    }

    public static function set_title($title)
    {
        self::$headerScript .= '<title>'.$title.'</title>';
    }
}