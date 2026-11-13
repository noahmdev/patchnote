<x-layout>
    <main class="md:grid md:grid-cols-[minmax(360px,.95fr)_minmax(430px,1.10fr)]">
        @include('auth._story')

        <section class="pt-10 px-6 md:grid md:place-items-center md:py-12 md:px-8">
            <div class="w-full md:max-w-sm">
                <div class="flex items-center gap-2.5 text-[18px] mb-10.5 md:hidden">
                    <span class="inline-block relative size-7">
                        <i
                            class="top-0.5 left-0.5 bg-primary absolute w-3.5 h-2.25 rounded-sm border-2 border-surface rotate-[-16deg] z-3"></i>
                        <i
                            class="top-2 left-1.5 bg-sky-text absolute w-3.5 h-2.25 rounded-sm border-2 border-surface rotate-[-16deg] z-2"></i>
                        <i
                            class="top-3.5 left-2.5 bg-mint-text absolute w-3.5 h-2.25 rounded-sm border-2 border-surface rotate-[-16deg]"></i>
                    </span>

                    <strong class="font-heading">Patchnote</strong>
                </div>

                <div
                    class="bg-primary-soft size-10.5 text-primary rounded-[11px] mb-4.75 flex items-center justify-center">
                    <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="4"></circle>
                        <path d="M4 21a8 8 0 0 1 16 0"></path>
                    </svg>
                </div>

                <h2 class="text-[27px] tracking-[-.6] font-heading">
                    Create your account
                </h2>

                <p class="text-muted mt-1.75 text-[13px] tracking-[.2]">
                    Start managing better releases in a few seconds.
                </p>


                <form method="POST" action="{{ route('register.store') }}" class="flex flex-col mt-6.75 gap-3.75">
                    @csrf
                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Firstname</span>
                        <div
                            class="border @error('firstname') shadow-[0_0_0_3px_color-mix(in_srgb,var(--color-danger)_10%,transparent)] border-danger text-danger @else border-border text-muted @enderror  bg-surface h-10.75 rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="4"></circle>
                                <path d="M4 21a8 8 0 0 1 16 0"></path>
                            </svg>
                            <input type="text" placeholder="Alex" name="firstname"
                                class="w-full outline-none text-black" autocomplete="off">
                        </div>

                        @error('firstname')
                            <p class="text-[11px] bg-danger-soft text-danger rounded-lg border border-[color-mix(in_srgb,var(--color-danger)_25%,transparent)^> py-2.25 px-2.75"
                                role="alert">{{ $message }}</p>
                        @enderror
                    </label>

                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Lastname</span>
                        <div
                            class="border @error('lastname') shadow-[0_0_0_3px_color-mix(in_srgb,var(--color-danger)_10%,transparent)] border-danger text-danger @else border-border text-muted @enderror  bg-surface h-10.75 rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="4"></circle>
                                <path d="M4 21a8 8 0 0 1 16 0"></path>
                            </svg>
                            <input type="text" placeholder="Kim" name="lastname" class="w-full outline-none text-black"
                                autocomplete="off">
                        </div>

                        @error('lastname')
                            <p class="text-[11px] bg-danger-soft text-danger rounded-lg border border-[color-mix(in_srgb,var(--color-danger)_25%,transparent)^> py-2.25 px-2.75"
                                role="alert">{{ $message }}</p>
                        @enderror
                    </label>

                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Email address</span>
                        <div
                            class="border @error('email') shadow-[0_0_0_3px_color-mix(in_srgb,var(--color-danger)_10%,transparent)] border-danger text-danger @else border-border text-muted @enderror  bg-surface h-10.75 rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <path d="m3 7 9 6 9-6"></path>
                            </svg>
                            <input type="email" placeholder="you@example.com" name="email"
                                class="w-full outline-none text-black" autocomplete="off">
                        </div>

                        @error('email')
                            <p class="text-[11px] bg-danger-soft text-danger rounded-lg border border-[color-mix(in_srgb,var(--color-danger)_25%,transparent)^> py-2.25 px-2.75"
                                role="alert">{{ $message }}</p>
                        @enderror
                    </label>

                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Password</span>
                        <div
                            class="border @error('password') shadow-[0_0_0_3px_color-mix(in_srgb,var(--color-danger)_10%,transparent)] border-danger text-danger @else border-border text-muted @enderror  bg-surface h-10.75 rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="10" width="16" height="11" rx="2"></rect>
                                <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                            </svg>
                            <input type="password" placeholder="At least 8 characters" name="password"
                                class="w-full outline-none text-black " autocomplete="off">
                        </div>

                        @error('password')
                            <p class="text-[11px] bg-danger-soft text-danger rounded-lg border border-[color-mix(in_srgb,var(--color-danger)_25%,transparent)^> py-2.25 px-2.75"
                                role="alert">{{ $message }}</p>
                        @enderror
                    </label>

                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Confirm password</span>
                        <div
                            class="border @error('password') shadow-[0_0_0_3px_color-mix(in_srgb,var(--color-danger)_10%,transparent)] border-danger text-danger @else border-border text-muted @enderror  bg-surface h-10.75 rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="10" width="16" height="11" rx="2"></rect>
                                <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                            </svg>
                            <input type="password" placeholder="Repeat your password" name="password_confirmation"
                                class="w-full outline-none text-black" autocomplete="off">
                        </div>

                        @error('password')
                            <p class="text-[11px] bg-danger-soft text-danger rounded-lg border border-[color-mix(in_srgb,var(--color-danger)_25%,transparent)^> py-2.25 px-2.75"
                                role="alert">{{ $message }}</p>
                        @enderror
                    </label>

                    <button type="submit"
                        class="mt-0.5 bg-primary flex items-center justify-center min-h-10.75 w-full text-white cursor-pointer rounded-[9px] gap-1.75 text-sm font-semibold hover:bg-primary-hover transition-all hover:-translate-y-px">
                        Create account
                        <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-6-6 6 6-6 6"></path>
                        </svg>
                    </button>
                </form>

                <p class="text-muted text-center mt-5 text-[13px]">
                    Already have a account?
                    <a href="{{ route('login') }}" class="text-primary font-semibold">
                        Sign in
                    </a>
                </p>

                <p class="border-t border-t-border text-center mt-6 pt-4.25 text-[11px] text-muted">
                    App demo — no data is sent to a server.
                </p>
            </div>
        </section>
    </main>
</x-layout>
