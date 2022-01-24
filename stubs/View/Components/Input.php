<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GwsInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $id,
        public ?string $tip = null,
        public ?string $name = null,
        public ?string $label = null,
        public ?string $value = null,
        public ?string $placeholder = null,
        public string $type = "text",
        public bool $readonly = false,
        public bool $required = false
    ) { }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.gws-input');
    }
}
