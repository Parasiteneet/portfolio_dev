<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{

     /** @test */    
    public function only_admin_can_see_this_page()
    {
        $response = $this->get('/admin/show');

        $response->assertRedirect('/login');
    }
}
