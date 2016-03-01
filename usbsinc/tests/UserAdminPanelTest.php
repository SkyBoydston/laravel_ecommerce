<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAdminPanelTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * Tests that the user/company admin panel is showing data and able to save changes.
     *
     * @return void
     */
    public function testUserAdminPanel()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
             ->withSession(['foo' => 'bar'])
             ->visit('/company')
             ->type('useradminpaneltest', 'business_name')
             ->press('Update')
             ->visit('/home')
             ->visit('/company')
             ->see('useradminpaneltest');

    }
}
