<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanLoginWithValidCredentials()
        {
            // Create a user
            $user = User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password')
            ]);

            // Attempt to log in with valid credentials
            $response = $this->post('/api/auth/login', [
                'email' => 'test@example.com',
                'password' => 'password'
            ]);

            // Check if the response contains a token
            $response->assertJsonStructure(['access_token', 'token_type', 'expires_in']);
        }

    public function testUserCannotLoginWithInvalidCredentials()
        {
            // Attempt to log in with invalid credentials
            $response = $this->post('/api/auth/login', [
                'email' => 'test@example.com',
                'password' => 'wrongpassword'
            ]);

            // Check if the response contains an error message
            $response->assertJson(['error' => 'Unauthorized']);
        }

    // public function testAuthenticatedUserCanAccessTheirRecipes()
    //     {
    //         // Create a user
    //         $user = User::create([
    //             'name' => 'Test User',
    //             'email' => 'test@example.com',
    //             'password' => bcrypt('password')
    //         ]);
        
    //         // Act as the authenticated user
    //         $this->actingAs($user, 'api');
        
    //         // Call the myRecipes endpoint
    //         $response = $this->get('/api/auth/myRecipes');
        
    //         // Check if the response contains the user data
    //         $response->assertJson(['name' => 'Test User', 'email' => 'test@example.com']);
    //     }
}
