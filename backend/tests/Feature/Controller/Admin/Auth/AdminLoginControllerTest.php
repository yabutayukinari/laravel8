<?php

namespace Tests\Feature\Controller\Admin\Auth;

use Tests\TestCase;

class AdminLoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }
}
