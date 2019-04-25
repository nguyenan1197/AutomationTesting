<?php

use Step\Acceptance\First as FirstStep;
class FirstCest

{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param AcceptanceTester $I
     * Check 'enter" button function
     */

    // tests
    public function checkDefaultFocus(FirstStep $I)
    {
        $I->loginAsAdmin('nguyenxuanan1197@gmail.com');
        $I->waitForElementVisible('//input[@name="password"]',3);
        
    }
}
