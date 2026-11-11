<?php

use Tests\TestCase;

uses(TestCase::class);

it('submits the login form to the login route and displays validation errors', function () {
    $this->get(route('login'))
        ->assertOk()
        ->assertSee('action="'.route('login.store').'"', false);

    $this->from(route('login'))
        ->post(route('login.store'), [])
        ->assertRedirect(route('login'));

    $this->get(route('login'))
        ->assertOk()
        ->assertSee('The email field is required.')
        ->assertSee('The password field is required.');
});
