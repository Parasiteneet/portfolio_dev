<?php

namespace Tests\Feature;

use Auth;
use App\User;
use App\Book;
use Tests\TestCase;
use App\Mail\BookSendmail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReserveTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void 
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    /** @test */
    public function only_logged_in_users_can_see_the_reserve_page() 
    {
        $response = $this
            ->get('/book')
            ->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_users_can_see_the_reserve_page()
    {
        $response = $this
            ->actingAs($this->user)
            ->get('/book')
            ->assertOk()
            ->assertViewIs('.book.reserve');
    }


    /** @test */    
    public function users_completed_reservation_can_see_the_confirm_page()
    {
        $this->withoutExceptionHandling();

        $response = $this
            ->actingAs($this->user)
            ->post('/book/confirm', 
            [
                'booking-name' => 'reserve',
                'booking-tel' => '08012345678',
                'booking-date' => '2021-09-05',
                'scheduled-time' =>'17:30',
                'user_id' => '1',
            ])
            ->assertOk();
        
            $response->assertViewIs('.book.confirm');
    }

    /** @test */    
    public function users_can_store_booking_form()
    {
        $this->withoutExceptionHandling();

        $response = $this
            ->actingAs($this->user)
            ->post('/book/thanks',   
            [
                'action' => 'submit',
                'booking-name' => 'reserve',
                'booking-tel' => '08012345678',
                'booking-date' => '2021-09-05',
                'scheduled-time' =>'17:30',
                'user_id' => '1',                
            ])
            ->assertOk()
            ->assertDatabaseHas('books', [
                "name" => 'reserve',
            ]);

        $response->assertViewIs('.book.thanks');
    }
}
