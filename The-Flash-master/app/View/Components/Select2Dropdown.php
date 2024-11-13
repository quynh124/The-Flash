<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2Dropdown extends Component
{
    public $options;
    public $name;
    public $nameColumn;

    /**
     * Create a new component instance.
     */
    public function __construct($nameColumn, $name, $options = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->nameColumn = $nameColumn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select2-dropdown');
    }
}
