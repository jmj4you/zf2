<?php

/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 8/7/16
 * Time: 4:04 PM
 */
namespace Hello\Model;
class MyName
{

    function sayHi($name = null)
    {
        
        return "Welcome " . ($name ? $name : " nameless wonder......!!!");

    }
}