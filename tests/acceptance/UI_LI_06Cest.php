<?php

use Step\Acceptance\LoginAsAdmin as FirstPage;
class UI_LI_06Cest

{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param AcceptanceTester $I
     * Check 'enter" button function
     */

    // tests
    public function checkContinueButton(FirstPage $I)
    {
        $I->loginAsAdmin('nguyenxuanan1197@gmail.com');
    }
}
