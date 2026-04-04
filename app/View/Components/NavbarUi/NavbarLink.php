<?php

namespace App\View\Components\NavbarUi;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $route,
        public string $message
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-ui.navbar-link');
    }
}
