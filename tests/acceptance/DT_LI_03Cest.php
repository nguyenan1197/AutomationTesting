<?php 
use Step\Acceptance\LoginAsAdmin as Admin;
class DT_LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param Admin $I
     * Check login sucess with valid username and password
     */

    // tests
    public function checkLoginSuccess(Admin $I)
    {
        $I->loginAsAdmin('nguyenxuanan1197@gmail.com', 'noname1197');
        $I->see(homePage);
    }
}
