<nav class="bg-neutral-primary w-full z-20 top-0 start-0 border-b border-default">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-7" alt="Flowbite Logo" />
            <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">Flowbite</span>
        </a>

        <div class="w-full md:block md:w-auto">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                <x-navbar-ui.navbar-icon-link-list route="/"
                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"
                    message="Home" />
            </ul>
        </div>

        <div class="flex items-center">
            <x-navbar-ui.navbar-link route="login" message="Login" />
            <x-ui.divider 
                orientation="vertical"
                width="medium"

            />
            <x-navbar-ui.navbar-link route="register" message="Create account" />
        </div>
    </div>
</nav>
