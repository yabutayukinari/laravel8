<?php

namespace Tests\Feature\Controller\Admin\Auth;

use Tests\TestCase;

class AdminSignInControllerTest extends TestCase
{
    /**
     *
     */
    public function test()
    {
        $response = $this->get('/admin/sign-in');

        $response->assertStatus(200);
    }
}
