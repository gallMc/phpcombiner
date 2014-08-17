<?php
/**
 * Created by PhpStorm.
 * User: gallMc
 * Date: 16.08.14
 */

class initialization
{


    public function __construct()
    {
        $this->begin();
    }

    public function begin()
    {
        include_once ".settings.php";
        include_once "lang/".$settings["language"].".php";
        $page = new page($languageText);

    }
}