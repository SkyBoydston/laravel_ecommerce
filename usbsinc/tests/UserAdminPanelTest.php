<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAdminPanelTest extends TestCase
{

	// use DatabaseMigrations;

    /**
     * Tests that the user/company admin panel is showing data and able to save changes.
     *
     * @return void
     */
    public function testUserAdminPanel()
    {
        $this->visit('/company')
             ->type('useradminpaneltest', 'business_name')
             ->visit('/home')
             ->visit('/company')
             ->see('test business_nameuseradminpaneltest');

    }
}
