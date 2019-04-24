<?php
namespace Page\Acceptance;

class First
{
    // include url of current page
    public static $URL = '/log-in';
    public static $userNameField = '//input[@class="form-text-input"]';
    public static $continueButton = '//input[@class="button form-button is-primary"]';
    public static $loginButton = '//input[@class="form-text-input"]';
    public static function route($param)
    {
        return static::$URL.$param;
    }
}
