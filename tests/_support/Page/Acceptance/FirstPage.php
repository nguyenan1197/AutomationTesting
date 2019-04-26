<?php
namespace Page\Acceptance;

class FirstPage
{
    // include url of current page
    public static $URL = '/log-in';
    public static $userNameField = '//input[@class="form-text-input"]';
    public static $passwordField = '//input[@id="password"]';
    public static $continueButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';  //'Continue'
    public static $loginButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button'; //'Log In'
    public static $openEye = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[1]/div/div/span/svg/g/path';

    public static function route($param)
    {
        return static::$URL.$param;
    }
}
