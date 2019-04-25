<?php
namespace Step\Acceptance;
use Page\Acceptance\First as FirstPage;
class First extends \AcceptanceTester
{
    public function loginAsAdmin($name)
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField(FirstPage::$userNameField, $name );
        $I->click(FirstPage::$continueButton);
    }


}