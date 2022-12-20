<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
     /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_invalid_password()
    {
        $response = $this->post('/login',[
            'email' => 'milayunita@gmail.com',
            'password' => '123457'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_email()
    {
        $response = $this->post('/login',[
            'email' => 'adminInvalid@gmail.com',
            'password' => '123456'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_email_password()
    {
        $response = $this->post('/login',[
            'email' => 'adminInvalid@gmail.com',
            'password' => '123457'
        ]);

        $response->assertStatus(302);
    }

    public function test_empy_form()
    {
        $response = $this->post('/login',[
            'email' => '',
            'password' => ''
        ]);

        $response->assertStatus(302);
    }

    public function test_unverified_account()
    {
        $response = $this->post('/login',[
            'email' => 'anonymous@gmail.com',
            'password' => '123457'
        ]);

        $response->assertStatus(302);
    }

    public function test_success()
    {
        $response = $this->post('/login',[
            'email' => 'milayunita@gmail.com',
            'password' => '123456'
        ]);

        $response->assertRedirect('/home');
    }
}
