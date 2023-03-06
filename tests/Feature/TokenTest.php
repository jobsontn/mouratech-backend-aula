<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class TokenTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_create_token(){
        // Arrange
        Sanctum::actingAs(User::factory()->create());
        // Act
        $response = $this->json('POST', route('tokens.store'), [
            'device' => 'test'
        ]);
        // Assert
        $response
            ->assertOk()
            ->assertJsonStructure(['token']);
    }

    public function test_remove_token(){
        // Arrange
        Sanctum::actingAs($user = User::factory()->create());
        $token = $user->createToken('test');

        // Act
        $response = $this->json('DELETE', route('tokens.destroy', $token->accessToken->id));
        // Assert
        $response->assertNoContent();
    }

}
