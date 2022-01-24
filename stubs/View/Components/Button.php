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
        public ?string $text = null,
        public ?string $color = null,
        public ?string $activeColor = null
    ) {
        if($this->text == null) {
            $this->text = config('input.dark_mode') ? 'text-gray-800' : 'text-white';
        }

        if($this->color == null) {
            $this->color = config('input.dark_mode') ? 'bg-white' : 'bg-gray-600';
        }

        if($this->activeColor === null) {
            $this->activeColor = config('input.dark_mode') ? 'hover:bg-gray-300' : 'hover:bg-gray-800';
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
