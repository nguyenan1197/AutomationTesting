<?php 
use Step\Acceptance\LoginAsAdmin as Admin;
class DT_LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param Admin $I
     * @throws Exception
     * check Invalid EmailorUsername;
     */
    // tests
    public function checkInvalidEmailorUsername(Admin $I)
    {
        $I->loginAsAdmin('nguyenan25489'); //nhập bất kỳ tài khoản nào
        $I->waitForText('User does not exist',3);
    }
}
