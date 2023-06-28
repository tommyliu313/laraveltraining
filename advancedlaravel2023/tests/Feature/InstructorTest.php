<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use ILluminate\Foundation\Testing\RefreshDatabase;

class InstructorTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_instructor_is_redirected_to_instructor_dashboard(){
        $user = User::factory()->create([
            'role' => 'instructor'
        ]);
        $response = $this->actingAs($user);
    }

    public function test_instructor_can_schedule_a_class(){
        $user = User::factory()->create([
            'role' => 'instructor'
        ]);
    }
    public function test_instructor_can_cancel_class(){
        $user = User::factory()->create([
            'role' => 'instructor'
        ]);

        $this->seed();
    }
}
