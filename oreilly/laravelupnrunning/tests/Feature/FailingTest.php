<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FailingTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testExample(){
        $response = $this->get('/');
        $response->assertStatus(301);
    }
}
