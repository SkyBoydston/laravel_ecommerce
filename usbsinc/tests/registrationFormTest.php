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
        	 ->type('test', 'website')
        	 ->type('test', 'type')
        	 ->type('test', 'status')
             ->type('test', 'address_line_1')
        	 ->type('test', 'address_line_2')
        	 ->type('test', 'city')
        	 ->type('test', 'state')
        	 ->type('12345', 'zip_code')
             ->check('brands_of_interest')  // Laravel doesn't appear to have a viable way to check both/all boxes.
        	 ->type('test name', 'first_name')
        	 ->type('test name', 'last_name')
        	 ->type('test', 'title')
        	 // ->type('303-888-8888', 'primary_phone')
        	 // ->type('3038888888', 'secondary_phone')
             ->type('303-888-8888', 'contact_primary_phone')
             ->type('3038888888', 'contact_secondary_phone')
        	 ->select('phone', 'contact_me_via')
        	 ->type('test@test.com', 'email')
        	 ->type('test', 'how_heard_about')
        	 ->type('aaaaaa', 'password')
        	 ->type('aaaaaa', 'password_confirmation')
        	 ->press('Register')
        	 ->seePageIs('/home');
    }



}
    