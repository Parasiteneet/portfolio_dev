<?php

namespace Tests\Unit;


use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class LoginTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;

    // protected $user;

    // public function setUp(): void 
    // {
    //     parent::setUp();

    //     $this->user= factory(User::class)->create();
    // }

    // public function setUp(): void 
    // {
    //     dd(env('APP_ENV'), env('DB_HOST'));
    //     parent::setUp();
    // }



    /**
     * ログイン画面を表示
     *
     *
     */
    public function testloginPage(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $this->assertGuest();
    }

    /**
     * マイページ表示->認証失敗ログインページへリダイレクト
     *
     *  @test
     */
    public function testMypage():void
    {

        $this->withoutExceptionHandling();
        $response = $this->get('/mypage');
        $response->assertStatus(302)->assertRedirect('/login');
        $this->assertGuest();
    }

    /**
     * ログイン認証
     *
     */
    public function testLogin(): void
    {
        $user = factory(User::class)->create();

        $response = $this
            ->from('home')
            ->post('/login',[
            'email' => $user->email,
            'password' => $user->password,
        ]);
        
        
        $response->assertStatus(302)->assertRedirect('/home');
        
        $this->actingAs($user);
    }

        /**
     * ログアウト
     *
     */
    public function testLogout(): void
    {   
        $user = factory(User::class)->create();
        $this->actingAs($user);

        //ユーザー認証されてるか
        $response = $this->post('/logout');
        $this->assertGuest();


        // vendor/bin/phpunit tests/Unit/LoginTest.php
    }
}
