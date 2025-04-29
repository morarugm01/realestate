<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListingTest extends TestCase
{
    /**test */
    public function test_example(): void
    {
        $response = $this->get('/listings');

        $response->assertStatus(200);
    }
}
