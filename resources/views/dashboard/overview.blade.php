<x-layout>
    <header class="flex items-center px-4.5 border-b border-b-border backdrop-blur bg-[color-mix(in_srgb,var(--color-background)_92%,transparent)] z-20 sticky top-0 h-16">

        <button class="mr-2.5">
            <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 7h16M4 12h16M4 17h16"></path>
            </svg>
        </button>

        <button class="flex items-center cursor-pointer gap-2 text-sm">
            <span class="bg-primary-soft size-6.75 text-primary rounded-[7px] flex items-center justify-center font-bold">N</span>

            <strong>Project</strong>

            <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="rotate-90">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </button>
    </header>
    <button data-test="logout-btn" class="hidden">Logout</button>
</x-layout>
