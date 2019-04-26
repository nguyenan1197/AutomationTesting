<?php 
use Step\Acceptance\LoginAsAdmin as Admin;
class DT_LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Admin $I)
    {
        $I->loginAsAdmin(' nguyenxuanan1197@gmail.com', 'noname1197'); //email có khoảng trắng ở đầu
        $I->waitForText('User does not exist.',1);
    }
}
