<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserTextInput extends Component
{
    public $divClassName;
    public $labelFor;
    public $inputType;
    public $inputName;
    public $labelName;
    /**
     * Create a new component instance.
     */
    public function __construct($divClassName, $labelFor, $inputType, $inputName,$labelName){
        $this->divClassName = $divClassName;
        $this->labelFor = $labelFor;
        $this->inputType = $inputType;
        $this->inputName = $inputName;
        $this->labelName = $labelName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-text-input');
    }
}
