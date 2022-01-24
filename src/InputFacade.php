<?php

namespace GabrielWebStudio\Input;

class InputFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Input';
    }
}
