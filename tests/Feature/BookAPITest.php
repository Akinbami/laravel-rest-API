<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class BookAPITest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    // use DatabaseMigrations;
    // use RefreshDatabase;
    
    public function test_can_get_all_external_books()
    {
        $response = $this->get('api/external-books');
        $response->assertStatus(200)
                ->assertJson([
                        'status' => 'success',
                    ]);
    }

}
