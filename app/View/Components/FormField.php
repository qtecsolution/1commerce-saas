<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormField extends Component
{
    public $field;
    public $styles;
    /**
     * Create a new component instance.
     */
    public function __construct($field, $styles)
    {
        $this->field = $field;
        $this->styles = $styles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-field');
    }
}
