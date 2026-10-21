<x-layout>
    <form method="POST" action="{{ route('register.store') }}" class="flex flex-col">
        <label>
            <span>Fistname</span>
            <input type="text" placeholder="Alex" name="firstname">
        </label>

        <label>
            <span>Lastname</span>
            <input type="text" placeholder="Kim" name="lastname">
        </label>

        <label>
            <span>Email address
            <input type="email" placeholder="you@example.com" name="email">
        </label>

        <label>
            <span>Password</span>
            <input type="password" placeholder="At least 8 characters" name="password">
        </label>

        <label>
            <span>Confirm password</span>
            <input type="password" placeholder="Repeat your password" name="password_confirmation">
        </label>

        <button type="submit">
            Create account
        </button>

        @error('password')
            {{ $message }}
        @enderror
    </form>
</x-layout>
