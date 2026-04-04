<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Divider extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $orientation = "horizontal",
        public string $width = "small",
        public string $color = "bg-gray-300"
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if ($this->orientation === 'vertical') {
            $this->classes = match ($this->width) {
                'small' => 'w-px self-stretch mx-1',
                'medium' => 'w-0.5 self-stretch mx-1',
                'strong' => 'w-1 self-stretch mx-1',
                default => 'w-px self-stretch mx-1',
            };
        } else {
            $this->classes = match ($this->width) {
                'small' => 'h-px w-full my-2',
                'medium' => 'h-0.5 w-full my-2',
                'strong' => 'h-1 w-full my-2',
                default => 'h-px w-full my-2',
            };
        }

        $this->classes .= " {$this->color}";

        return view('components.ui.divider');
    }
}
