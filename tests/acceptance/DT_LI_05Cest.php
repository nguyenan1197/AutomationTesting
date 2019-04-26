<?php 
use Step\Acceptance\LoginAsAdmin as Admin;
class DT_LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkEmtyFieldEmailorusername(Admin $I)
    {
        $I->loginAsAdmin(' ','noname1197');
        $I->waitForText('Please enter a username or email address.', 1);
    }
}
