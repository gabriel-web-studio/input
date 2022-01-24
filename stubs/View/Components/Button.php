<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public ?string $color,
        public ?string $activeColor
    ) {
        if($this->color === null) {
            config('input.dark_mode') ? 'bg-white' : 'bg-gray-600';
        }

        if($this->activeColor === null) {
            config('input.dark_mode') ? 'bg-gray-300' : 'bg-gray-800';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.button');
    }
}
