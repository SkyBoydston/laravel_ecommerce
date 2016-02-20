<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class registrationFormTest extends TestCase
{
    /**
     * Tests whether the registration form is functioning. Does not check to see if the 
     * database will accept multiple checkboxes being checked from the form.
     *
     * @return void
     */
    public function testRegistrationForm()
    {
        $this->visit('/register')
        	 ->type('test', 'business_name')
        	 ->type('test', 'business_type')
        	 ->type('test', 'business_status')
        	 ->type('test', 'business_address')
        	 ->type('test', 'city')
        	 ->type('test', 'state')
        	 ->type('12345', 'zip_code')
        	 ->check('brands_of_interest')  // Laravel doesn't appear to have a viable way to check both/all boxes.
        	 ->type('test name', 'first_name')
        	 ->type('test name', 'last_name')
        	 ->type('test', 'title')
        	 ->type('303-888-8888', 'primary_phone')
        	 ->type('3038888888', 'secondary_phone')
        	 ->select('phone', 'contact_me_via')
        	 ->type('test@test.com', 'email')
        	 ->type('test', 'how_heard_about')
        	 ->type('aaaaaa', 'password')
        	 ->type('aaaaaa', 'password_confirmation')
        	 ->press('Register')
        	 ->seePageIs('/home');
    }
}
