<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

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
             ->visit('/')
             ->click('User')
             ->see('Edit')
             ->click('Edit')
             ->type('test business_name', 'business_name')
             ->type('www.business_website.com', 'website')
             ->type('test address line1', 'address_line_1')
             ->type('test address line2', 'address_line_2')
             ->type('test city', 'city')
             ->type('test state', 'state')
             ->type('55555', 'zip_code')
             ->type('test first_name', 'first_name')
             ->type('test last_name', 'last_name')
             ->type('test title', 'title')
             ->type('test primary_phone', 'primary_phone')
             ->type('test secondary_phone', 'secondary_phone')
             ->type('test contact primary_phone', 'contact_primary_phone')
             ->type('test contact secondary_phone', 'contact_secondary_phone')

    
             ->press('Update')
             ->visit('/home')
             ->visit('/user')
             ->see('test business_name')
             ->see('www.business_website.com')
             ->see('test business_address line1')
             ->see('test business_address line2')
             ->see('test city')
             ->see('test state')
             ->see('55555')
             ->see('test first_name')
             ->see('test last_name')
             ->see('test title')
             ->see('test primary_phone')
             ->see('test secondary_phone')
             ->see('test contact primary_phone')
             ->see('test contact secondary_phone');
    }
}
