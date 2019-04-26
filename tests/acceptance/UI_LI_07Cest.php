<?php 
use Step\Acceptance\Admin as Admin;
class UI_LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param Admin $I
     * check hiden/show password button
     */

    // tests
    public function testEysButton(Admin $I)
    {
        $I->loginAsAdmin('nguyenxuanan1197@gmail.com','noname1197');
        $I->see('Eye open - you can see password');
    }
}
