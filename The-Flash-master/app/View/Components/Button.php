<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $text;
    public $classes;
    public $dataToggle;
    public $dataTarget;
    public $onclick;
    
    /**
     * Create a new component instance.
     */
    public function __construct($type, $text, $classes = "", $dataToggle = "", $dataTarget = "" , $onclick = "")
    {
        $this->type = $type;
        $this->text = $text;
        $this->classes = $classes;
        $this->dataToggle = $dataToggle;
        $this->dataTarget = $dataTarget;
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
