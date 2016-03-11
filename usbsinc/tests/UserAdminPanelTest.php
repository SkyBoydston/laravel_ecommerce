<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

use Symfony\Component\DomCrawler\Crawler;



// $crawler = new Crawler('http://localhost/');
// $y = $crawler;
// dd($y);
// // ->visit('http://localhost/');

// $link = $crawler->filter('a')->eq(0);

// // $link = $crawler->filter('div#Company_address > a')->eq(1);
// $GLOBALS['uri'] = $link->link()->getUri();


class UserAdminPanelTest extends TestCase
{

    // public function experiment()
    // {
    //     $goodHtml = $this->visit('/');
    //     dd($goodHtml);
    // }

    /**
     * Tests that the user/company admin panel is showing data and able to save changes.
     *
     * @return void
     */
    public function testUserAdminPanel()
    {
        // $user = factory(App\User::class)->create();

        // $this->actingAs($user)
        //      ->withSession(['foo' => 'bar'])
        

        $html = $this->visit('/')
             ->click('Register')   // Register a user
                 ->type('test business_name', 'business_name')
                 ->type('www.business_website.com', 'website')
                 ->type('test address line1', 'address_line_1')
                 ->type('test address line2', 'address_line_2')
                 ->type('test city', 'city')
                 ->type('test state', 'state')
                 ->type('55555', 'zip_code')
                 ->check('brands_of_interest')
                 ->type('test first_name', 'first_name')
                 ->type('test last_name', 'last_name')
                 ->type('test title', 'title')
                 ->type('test contact primary_phone', 'contact_primary_phone')
                 ->type('test contact secondary_phone', 'contact_secondary_phone')
                 ->type('test test', 'how_heard_about')
                 ->type('test@email.com', 'email')
                 ->type('111111', 'password')
                 ->type('111111', 'password_confirmation')
             ->press('Register')
             ->visit('/admin_panel');

        $html = $html->response->getContent();
        // $htmlType = gettype($html);
        // dd($htmlType);
        // dd($html);     
        $crawler = new Crawler($html);
        $link = $crawler->filter('a')->eq(13);
        $uri = $link->link()->getUri();
        // echo $uri;

        // dd($uri);



        $this->visit('/')
             // ->Click('Register')   // Register a user
             //     ->type('test business_name', 'business_name')
             //     ->type('www.business_website.com', 'website')
             //     ->type('test address line1', 'address_line_1')
             //     ->type('test address line2', 'address_line_2')
             //     ->type('test city', 'city')
             //     ->type('test state', 'state')
             //     ->type('55555', 'zip_code')
             //     ->check('brands_of_interest')
             //     ->type('test first_name', 'first_name')
             //     ->type('test last_name', 'last_name')
             //     ->type('test title', 'title')
             //     ->type('test contact primary_phone', 'contact_primary_phone')
             //     ->type('test contact secondary_phone', 'contact_secondary_phone')
             //     ->type('test test', 'how_heard_about')
             //     ->type('test2@email.com', 'email')
             //     ->type('111111', 'password')
             //     ->type('111111', 'password_confirmation')
             // ->press('Register')

             ->visit('/admin_panel')    // Edit the user's email address
                 ->seePageIs('/admin_panel')
                 ->click('Edit')
                 ->type('test', 'email')
                 ->press('Update')
                 ->visit('/home')
                 ->visit('/admin_panel')
                 ->see('test')

             ->click('Create')      // Add a user phone number
                 ->type('3333', 'primary_phone')
                 ->press('Save')
                 ->see('3333')

             // ->click('Company addresses')  // Create an address (now the highest 'Create' link on the page)
             // ->click('Company addresses')  // Create an address (now the highest 'Create' link on the page)
                 ->click('Create')
                 ->type('4444', 'address_line_1')
                 ->type('6666', 'address_line_2')
                 ->type('7777', 'city')
                 ->type('8888', 'state')
                 ->type('9999', 'zip_code')
                 ->press('Save')
                 // ->click('Company addresses')
                 ->see('4444')
                 ->see('6666')
                 ->see('7777')
                 ->see('8888')
                 ->see('9999')
             ->visit($uri)
             // ->click('div#Company_address > a:last-of-type')        // Edit an address
                 // ->seePageIs('/address*')
                 ->see('test address line1')
                 ->see('test address line2')
                 ->see('test city')
                 ->see('test state')
                 ->see('55555')
                 ->type('9999', 'zip_code')
                 ->press('Update')
                 // ->click('Company addresses')
                 ->see('9999');


                 
             
             
    }
    use DatabaseMigrations;
    
}
