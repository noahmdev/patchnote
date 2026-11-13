<?php

use App\Models\User;

it('logs a user in with valid credentials', function () {
    User::factory()->create([
        'firstname' => 'john',
        'lastname' => 'doe',
        'email' => 'johndoe@example.com',
        'password' => bcrypt('password'),
    ]);

    $page = visit('/dashboard');

    $page
        ->assertUrlIs(route('login'))
        ->fill('email', 'johndoe@example.com')
        ->fill('password', 'password')
        ->click('@login-btn');

    $page->assertPathIs('/dashboard');

    $page->assertPresent('@logout-btn');
});
