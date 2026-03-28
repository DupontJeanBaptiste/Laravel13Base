<?php

namespace App\View\Components\layouts\sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Symfony\Component\Routing\Route;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $route,
        public string $d,
        public string $message
    ) {
        $this->route = route($route);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.sidebar.button');
    }
}
