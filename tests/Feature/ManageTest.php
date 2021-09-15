<?php

namespace Tests\Feature;

use Auth;
use App\User;
use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function only_logged_in_users_can_see_the_management_page() 
    {
        $response = $this->get('/management/manage')
        ->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_users_can_see_the_management_page()
    {
        $this->actingAs(factory(User::class)->create());
        
        $response = $this->get('/management/manage')
        ->assertOk();
    }

    /** @test */
    public function a_user_can_update_the_booking_form()
    {
        // $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());
        
        $response = $this
            ->from('/management/manage')
            ->post('/management/update',
                [
                    'name' => 'taro',
                    'tel' => '08012345678',
                    'date' => '2021-09-05',
                    'time' =>'17:30',
                    'user_id' => '1',
                ]
            );

            $response->assertRedirect('/management/manage');
        }
}
