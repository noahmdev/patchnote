<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'firstname' => strtolower($validated['firstname']),
            'lastname' => strtolower($validated['lastname']),
            'email' => strtolower($validated['email']),
            'password' => $validated['password'],
        ]);

        Auth::login($user);

        return redirect(route('release.index'));
    }
}
