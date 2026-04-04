<?php

namespace App\View\Components\sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Symfony\Component\Routing\Route;

class SidebarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $route,
        public string $d,
        public string $message
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.sidebar-link');
    }
}
