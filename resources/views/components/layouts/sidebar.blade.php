<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
        <ul class="space-y-2 font-medium">
            {{-- Home button --}}
            <x-layouts.sidebar.button route="/"
                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                message="Home" />
            {{-- Collections consultations --}}
            <x-layouts.sidebar.button route="#"
                d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                message="Collections" />
            @if (Auth::user())
                {{-- Loged user private collections --}}
                <x-layouts.sidebar.button route="#"
                    d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                    message="My collections" />
                {{-- Shop button --}}
                <x-layouts.sidebar.button route="#"
                    d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"
                    message="Shop" />
                {{-- Logout button --}}
                <form action="logout" method="POST">
                    @csrf
                    <button type="submit">
                        <x-layouts.sidebar.button route="logout"
                            d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" message="Logout" />
                    </button>
                </form>
            @else
                {{-- login button --}}
                <x-layouts.sidebar.button route="login"
                    d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" message="Login" />
            @endif
        </ul>
    </div>
</aside>
