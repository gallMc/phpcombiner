<?php
/**
 * Created by PhpStorm.
 * User: gallMc
 * Date: 16.08.14
 */

function __autoload($nameClass){
    include "/library/".$nameClass.".class.php";
}


$start = new initialization();
