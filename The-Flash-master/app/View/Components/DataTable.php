<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public $columnsName;
    public $records;

    /**
     * Create a new component instance.
     */
    public function __construct($columnsName, $records)
    {
        $this->columnsName = $columnsName;
        $this->records = $records;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
