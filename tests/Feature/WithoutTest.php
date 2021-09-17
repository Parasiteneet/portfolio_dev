<?php

namespace Tests\Feature;

use Auth;
use App\User;
use App\Book;
use Tests\TestCase;
use App\Mail\BookSendmail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WithoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_not_logged_in_users_can_see_the_without_page() 
    {
        $response = $this
            ->get('/without/input')
            ->assertOk();
    }

    /** @test */
    public function authenticated_users_reject_to_see_the_without_page()
    {
        $response = $this
            ->actingAs(factory(User::class)->create())
            ->get('/without/input')
            ->assertRedirect('/mypage');
    }


    /** @test */    
    public function users_completed_reservation_can_see_the_check_page()
    {
        $this->withoutExceptionHandling();

        $response = $this
            ->post('/without/check', 
            [
                'booking-name' => 'without',
                'booking-tel' => '08012345678',
                'booking-date' => '2021-09-05',
                'scheduled-time' =>'17:30',
                'user_id' => '1',
            ])
            ->assertOk();
        
            $response->assertViewIs('.without.check');
    }

    /** @test */    
    public function not_logged_in_users_can_store_booking_form()
    {
        $this->withoutExceptionHandling();

        $response = $this
            ->post('/without/done',   
            [
                'action' => 'submit',
                'booking-name' => 'reserve',
                'booking-tel' => '08012345678',
                'booking-date' => '2021-09-05',
                'scheduled-time' =>'17:30',
                'user_id' => '1',                
            ])
            ->assertOk();

        $response->assertViewIs('without.done');
    }
}
