<?php
namespace Step\Acceptance;
use Page\Acceptance\FirstPage as FirstPage;

class LoginAsAdmin extends \AcceptanceTester
{
    public function loginAsAdmin($name, $password)
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField(FirstPage::$userNameField, $name );
        $I->click(FirstPage::$continueButton);
        $I->fillField(FirstPage::$passwordField, $password);
        $I->click(FirstPage::$loginButton);
    }


}