<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JqueryDataTable extends Component
{
    public $title;
    public $subTitle;
    public $columnsName;
    public $records;
    public $ignoreColumns;
    public $imageColumns;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $subTitle, $columnsName, $records, $imageColumns = [])
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->columnsName = $columnsName;
        $this->records = $records;
        $this->ignoreColumns = [
            'password',
            'created_at',
            'updated_at',
            'email_verified_at',
            'remember_token',
        ];
        $this->imageColumns = $imageColumns;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.jquery-data-table');
    }
}
