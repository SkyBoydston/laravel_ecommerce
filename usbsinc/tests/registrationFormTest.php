<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class registrationFormTest extends TestCase
{

    use DatabaseMigrations;
    
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
             ->type('test', 'business_address_line1')
        	 ->type('test', 'business_address_line2')
        	 ->type('test', 'business_city')
        	 ->type('test', 'business_state')
        	 ->type('12345', 'business_zip_code')
             ->check('brands_of_interest')  // Laravel doesn't appear to have a viable way to check both/all boxes.
        	 ->type('test name', 'business_contact_first_name')
        	 ->type('test name', 'business_contact_last_name')
        	 ->type('test', 'business_contact_title')
        	 ->type('303-888-8888', 'business_primary_phone')
        	 ->type('3038888888', 'business_secondary_phone')
        	 ->select('phone', 'contact_me_via')
        	 ->type('test@test.com', 'business_contact_email')
        	 ->type('test', 'how_heard_about')
        	 ->type('aaaaaa', 'password')
        	 ->type('aaaaaa', 'password_confirmation')
        	 ->press('Register')
        	 ->seePageIs('/home');
    }



}
    