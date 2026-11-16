<x-layout>
    <header
        class="flex items-center px-4.5 border-b border-b-border backdrop-blur bg-[color-mix(in_srgb,var(--color-background)_92%,transparent)] z-20 sticky top-0 h-16">
        <button class="mr-2.5 cursor-pointer">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 7h16M4 12h16M4 17h16"></path>
            </svg>
        </button>

        <button class="flex items-center cursor-pointer gap-2 text-sm">
            <span
                class="bg-primary-soft size-6.75 text-primary rounded-[7px] flex items-center justify-center font-bold">J</span>

            <strong>Project</strong>

            <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="rotate-90">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </button>
    </header>

    <button class="z-29 bg-[#1412207a] fixed inset-0"></button>
    <aside
        class="shadow-lg w-57 h-screen bg-surface border-r border-r-border z-30 flex flex-col fixed inset-y-0 left-0 px-3.5 pt-5.5 pb-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2.5 text-[18px]">
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

            <button class="cursor-pointer">
                <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 6 12 12M18 6 6 18"></path>
                </svg>
            </button>
        </div>

        <nav class="mt-9 flex flex-1 flex-col">
            <p class="text-muted uppercase mx-2.75 mt-2 text-[11px] font-bold tracking-[.12rem]">Workspace</p>

            <a href="#" class="w-full h-10.5 rounded-[9px] flex items-center gap-2.75 text-[15px] px-2.75 text-muted">
                <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 11 9-8 9 8"></path>
                    <path d="M5 10v11h14V10M9 21v-7h6v7"></path>
                </svg>
                Overview
            </a>
            <a href="#" class="w-full h-10.5 rounded-[9px] flex items-center gap-2.75 text-[15px] px-2.75 text-muted">
                <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 4h6v6M20 4l-8 8"></path>
                    <path d="M19 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h5"></path>
                </svg>
                Releases
            </a>
            <a href="#" class="w-full h-10.5 rounded-[9px] flex items-center gap-2.75 text-[15px] px-2.75 text-muted">
                <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 2h9l5 5v15H6Z"></path>
                    <path d="M14 2v6h6M9 13h6M9 17h6"></path>
                </svg>
                Changelog
            </a>

            <button class="w-full h-10.5 rounded-[9px] flex items-center gap-2.75 text-[15px] px-2.75 text-muted mt-auto">
                <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path
                        d="M19 12a7 7 0 0 0-.1-1l2-1.5-2-3.4-2.4 1a8 8 0 0 0-1.8-1L14.4 3h-4.8l-.4 3.1a8 8 0 0 0-1.8 1l-2.4-1-2 3.4L5.1 11a7 7 0 0 0 0 2L3 14.5 5 18l2.4-1a8 8 0 0 0 1.8 1l.4 3h4.8l.4-3a8 8 0 0 0 1.8-1l2.4 1 2-3.5-2.1-1.5a7 7 0 0 0 .1-1Z">
                    </path>
                </svg>
                Settings
            </button>
        </nav>

        <div class="border-t border-t-border flex items-center gap-2.25 mt-3 px-1.5 pt-4">
            <span
                class="bg-peach size-8.5 flex items-center justify-center text-peach-text border-2 border-surface rounded-full font-bold text-xs flex-none">
                J
            </span>

            <div class="flex flex-col flex-1">
                <span class="text-[13px] overflow-hidden font-bold">John</span>
                <span class="text-muted mt-0.5 text-[11px]">johndoe@example.com</span>
            </div>

            <a href="#" data-test="logout-btn" class="size-7.25 text-muted rounded-[7px] flex items-center justify-center">
                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 17l5-5-5-5M15 12H3"></path>
                    <path d="M14 3h5a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-5"></path>
                </svg>
            </a>
        </div>
    </aside>

</x-layout>
