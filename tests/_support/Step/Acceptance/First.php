<?php
namespace Step\Acceptance;
use Page\Acceptance\First as First;
class First extends \AcceptanceTester
{
    public function loginAsAdmin($name)
    {
        $I = $this;
        $I->amOnPage(First::$URL);
        $I->fillField(First::$userNameField, $name );
        $I->click(First::$continueButton);
    }


}