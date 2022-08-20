<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetVacanciesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_page_return_a_fail_validation_response()
    {
        $response = $this->json('GET', '/api/vacancy', ['page' => -1]);
        $response->assertStatus(422)->assertJson(['status' => 422]);
    }

    public function test_page_return_a_ok_validation_response()
    {
        $response = $this->withHeader('content-type', 'application/json')->call('GET', '/api/vacancy', ['page' => 1]);
        $response->assertStatus(200)->assertJson(['status' => 200]);
    }
}
