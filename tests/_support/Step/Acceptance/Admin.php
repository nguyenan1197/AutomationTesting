<?php
namespace Step\Acceptance;
use Page\Acceptance\FirstPage as FirstPage;

class Admin extends \AcceptanceTester
{
    public function loginAsAdmin($name,$password)
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField(FirstPage::$usernameField, $name);
        $I->click(FirstPage::$continueButton);
        $I->fillField(FirstPage::$passwordField, $password);
        $I->click(FirstPage::$openEye);
    }

}