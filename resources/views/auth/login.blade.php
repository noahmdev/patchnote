<x-layout>
 <main class="md:grid md:grid-cols-[minmax(360px,.95fr)_minmax(430px,1.10fr)]">
        <section
            class="hidden md:relative md:bg-text md:min-h-screen md:text-background md:isolate md:flex md:flex-col md:justify-between lg:justify-start relative overflow-hidden p-8.5 before:content-[''] before:bg-[color-mix(in_srgb,var(--color-primary)_55%,transparent)] before:inline-block before:size-120 before:absolute before:z-[-1] before:blur-[2px] before:-top-45 before:-right-45 before:rounded-[50%]
                   after:content-[''] after:bg-[color-mix(in_srgb,var(--color-mint-text)_35%,transparent)] after:absolute after:z-[-1] after:size-90 after:-bottom-55 after:-left-30 after:rounded-[50%]
            ">

            <div class="md:flex md:items-center md:gap-2.5 md:text-[18px] md:mb-10.5">
                <span class="md:inline-block md:relative md:size-7">
                    <i
                        class="top-0.5 left-0.5 bg-primary absolute w-3.5 h-2.25 rounded-sm border-2 border-text rotate-[-16deg] z-3"></i>
                    <i
                        class="top-2 left-1.5 bg-sky-text absolute w-3.5 h-2.25 rounded-sm border-2 border-text rotate-[-16deg] z-2"></i>
                    <i
                        class="top-3.5 left-2.5 bg-mint-text absolute w-3.5 h-2.25 rounded-sm border-2 border-text rotate-[-16deg]"></i>
                </span>

                <strong class="font-heading">Patchnote</strong>

                <span class="text-xs border border-background rounded-sm py-0.5 px-1">Demo</span>
            </div>

            <div class="max-w-142.5 mt-auto pt-20 lg:mt-7">
                <span
                    class="inline-flex items-center text-xs font-semibold rounded-[20px] gap-1.75 w-fit py-1.75 px-2.5 border border-[color-mix(in_srgb,var(--background)_18%,transparent)] text-[color-mix(in_srgb,var(--background)_82%,transparent)]">
                    <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="m12 3 1.2 4.2L17 9l-3.8 1.8L12 15l-1.2-4.2L7 9l3.8-1.8ZM5 16l.6 1.8L7.5 19l-1.9.7L5 22l-.7-2.3L2.5 19l1.8-1.2Z">
                        </path>
                    </svg>
                    Release management, simplified
                </span>

                <h1 class="text-[42px] tracking-[-2.6px] max-w-140 mt-4.5 leading-[1.02] font-heading lg:text-[clamp(38px,4vw,62px)]">
                    Keep every release clear, reviewed, and ready to ship.
                </h1>

                <p
                    class="text-[15px] leading-[1.7] max-w-125 mt-4.75 text-[color-mix(in_srgb,var(--background)_68%,transparent)]">
                    One focused workspace for your team to draft updates, collect approvals, and publish a changelog
                    customers will actually read.
                </p>

                <div
                    class="backdrop-blur-md shadow-[0_24px_60px_#00000038] bg-[color-mix(in_srgb,var(--surface)_8%,transparent)] rounded-[15px] border border-[color-mix(in_srgb,var(--background)_14%,transparent)] w-[min(480px,100%)] mt-11.5 mb-7 p-4.5">
                    <div
                        class="flex items-center gap-1.25 pb-3.5 border-b border-b-[color-mix(in_srgb,var(--background)_12%,transparent)]">
                        <span
                            class="bg-[color-mix(in_srgb,var(--background)_28%,transparent)] rounded-full size-1.5 inline-block"></span>
                        <span
                            class="bg-[color-mix(in_srgb,var(--background)_28%,transparent)] rounded-full size-1.5 inline-block"></span>
                        <span
                            class="bg-[color-mix(in_srgb,var(--background)_28%,transparent)] rounded-full size-1.5 inline-block"></span>
                    </div>

                    <div class="pt-4.5 pb-3.75 grid grid-cols-[38px_1fr_auto] items-center gap-2.75">
                        <div class="bg-mint text-mint-text rounded-[10px] size-9.75 flex items-center justify-center">
                            <svg aria-hidden="true" width="17" height="17" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 4h6v6M20 4l-8 8"></path>
                                <path d="M19 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h5"></path>
                            </svg>
                        </div>

                        <div class="flex flex-col">
                            <span class="text-primary mb-0.75 text-[11px] font-mono">v1.4.0</span>
                            <strong class="text-[13px]">Smarter team notifications</strong>
                        </div>

                        <button
                            class="inline-flex items-center w-fit h-6 gap-1.25 rounded-xl px-2 text-[11px] font-bold whitespace-nowrap bg-mint text-mint-text">
                            <svg aria-hidden="true" width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6"></path>
                            </svg>
                            Approved
                        </button>
                    </div>

                    <div class="grid grid-cols-4 gap-1.25">
                        <span class="bg-primary h-0.75 rounded-[3px] inline-block w-full"></span>
                        <span class="bg-primary h-0.75 rounded-[3px] inline-block w-full"></span>
                        <span class="bg-primary h-0.75 rounded-[3px] inline-block w-full"></span>
                        <span class="bg-primary h-0.75 rounded-[3px] inline-block w-full"></span>
                    </div>

                    <small
                        class="text-right text-[11px] text-[color-mix(in_srgb,var(--background)_58%,transparent)] block mt-2">Ready
                        to publish</small>
                </div>



                <p class="text-[11px] text-[color-mix(in_srgb,var(--background)_55%,transparent)]">
                    "Patchnote gives our whole team one calm, reliable release process."
                </p>
            </div>
        </section>
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
                    Welcome back
                </h2>

                <p class="text-muted mt-1.75 text-[13px] tracking-[.2]">
                    Sign in to continue to your Patchnote worlspace.
                </p>


                <form method="POST" action="{{ route('register.store') }}" class="flex flex-col mt-6.75 gap-3.75">
                    @csrf
                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Email address</span>
                        <div
                            class="border border-border bg-surface h-10.75 text-muted rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <path d="m3 7 9 6 9-6"></path>
                            </svg>
                            <input type="email" placeholder="you@example.com" name="email"
                                class="w-full outline-none text-black" autocomplete="off">
                        </div>
                    </label>

                    <label class="flex flex-col gap-1.75 font-semibold text-xs">
                        <span>Password</span>
                        <div
                            class="border border-border bg-surface h-10.75 text-muted rounded-[9px] px-3 flex items-center gap-2.25 transition-[border-color,box-shadow] duration-150 focus-within:border-primary-hover focus-within:shadow-[0_2px_10px_rgba(151,133,255,0.30)]">
                            <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="10" width="16" height="11" rx="2"></rect>
                                <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                            </svg>
                            <input type="password" placeholder="At least 8 characters" name="password"
                                class="w-full outline-none text-black " autocomplete="off">
                        </div>
                    </label>

                    <button type="submit"
                        class="mt-0.5 bg-primary flex items-center justify-center min-h-10.75 w-full text-white cursor-pointer rounded-[9px] gap-1.75 text-sm font-semibold hover:bg-primary-hover transition-all hover:-translate-y-px">
                        Sign in
                        <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-6-6 6 6-6 6"></path>
                        </svg>
                    </button>
                </form>

                <p class="text-muted text-center mt-5 text-[13px]">
                    New to Patchnote?
                    <a href="{{ route('register.create') }}" class="text-primary font-semibold">
                        Create an account
                    </a>
                </p>

                <p class="border-t border-t-border text-center mt-6 pt-4.25 text-[11px] text-muted">
                    App demo — no data is sent to a server.
                </p>
            </div>
        </section>
    </main>
</x-layout>
