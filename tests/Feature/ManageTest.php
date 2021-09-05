<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageTest extends TestCase
{

    use RefreshDatabase;
    
    /** @test */
    public function only_logged_in_users_can_see_the_reservation_page() 
    {
        $response = $this->get('/manage')
        ->assertRedirect('/login');
    }
}
