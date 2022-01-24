<?php

namespace GabrielWebStudio\Input;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Input
{
    /**
     * @param string $id
     * @param string $label
     * @param string $type
     * @param string|null $name
     * @param string|null $tip
     * @return Application|Factory|View
     */
    public function make(string $id, string $label, string $type = 'text', string $name = null, string $tip = null)
    {
        if($name === null) $name = $id;

        return view('components.input', compact('id', 'label', 'type', 'name', 'tip'));
    }
}
