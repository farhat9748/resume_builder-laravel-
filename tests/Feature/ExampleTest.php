<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Build a resume that gets noticed.');
    }

    public function test_home_alias_redirects_to_the_landing_page(): void
    {
        $this->get('/home')
            ->assertRedirect('/');
    }

    public function test_auth_pages_are_reachable_and_dashboard_requires_login(): void
    {
        $this->get('/login')->assertOk();
        $this->get('/register')->assertOk();
        $this->get('/dashboard')->assertRedirect('/login');
    }
}
