<?php

it('registers a user with valid data', function () {
    $page = visit('/dashboard');

    $page
        ->assertPathIs('/login')
        ->click('@register-link')
        ->assertPathIs('/register')
        ->fill('firstname', 'John')
        ->fill('lastname', 'Doe')
        ->fill('email', 'johndoe@example.com')
        ->fill('password', 'password')
        ->fill('password_confirmation', 'password')
        ->click('@registration-submit')
        ->assertPathIs('/dashboard')
        ->assertPresent('@logout-btn');

    $this->assertDatabaseHas('users', [
        'email' => 'johndoe@example.com',
        'firstname' => 'john',
        'lastname' => 'doe',
    ]);

});
