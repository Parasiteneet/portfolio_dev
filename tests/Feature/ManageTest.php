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

    public function setUp(): void 
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->rsv = factory(Book::class)->create(['user_id' => $this->user->id]);
    }

    /** @test */
    public function only_logged_in_users_can_see_the_management_page() 
    {
        $response = $this->get('/management/manage')
        ->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_users_can_see_the_management_page()
    {
        $response = $this->actingAs($this->user)
            ->get('/management/manage')
            ->assertOk()
            ->assertViewIs('.management.manage');
    }

        /** @test */
        public function users_have_a_reservation_can_see_the_edit_page() 
        {
            $response = $this->actingAs($this->user)
                ->get('/management/edit')
                ->assertOk();
        }

    /** @test */
    public function a_user_can_update_the_booking_form()
    {
        // $this->withoutExceptionHandling();

        $this->actingAs($this->user);
        
        $response = $this
            ->from('/mypage')
            ->post('/management/update',
                [
                    'name' => 'update',
                    'tel' => '08012345678',
                    'date' => '2021-09-05',
                    'time' =>'17:30',
                    'user_id' => '1',
                ]);
        
            $response->assertRedirect('/mypage');
    }

        /** @test */
    public function users_have_a_reservation_can_see_the_delete_page() 
    {

        $response = $this->actingAs($this->user)
        ->get('/management/delete')
        ->assertOk();
    }

     /** @test */
     public function a_user_can_delete_the_booking_form() 
     {

         $this->withoutExceptionHandling();

         $this->actingAs(factory(User::class)->create());

         $rsv = factory(Book::class)->create();
         $response = $this->get('/management/delete', ['user_id' => $rsv->user_id]);
         $response->assertRedirect('/');
        
        
     }
}
