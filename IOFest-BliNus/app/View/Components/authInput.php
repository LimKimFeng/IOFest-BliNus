<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class authInput extends Component
{
    public $type;
    public $name;
    public $id;
    public $value;
    public $placeholder;
    public $errorType;
    public function __construct($type = null, $name = null, $id = null, $value = null, $placeholder = null, $errorType = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->errorType = $errorType;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-input');
    }
}
