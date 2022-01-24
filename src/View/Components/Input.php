<?php

namespace GabrielWebStudio\Input\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $id,
        public ?string $name,
        public ?string $label,
        public ?string $value,
        public ?string $placeholder,
        public string $type = "text",
        public bool $readonly = false,
        public bool $required = false,
    ) { }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.input');
    }
}
