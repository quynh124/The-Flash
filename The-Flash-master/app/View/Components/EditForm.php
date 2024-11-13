<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditForm extends Component
{
    public $title;
    public $columnsName;
    public $searchSelectList;
    public $ignoreColumns;
    public $fileColumnsName;

    public function __construct($title = "Create Form", $columnsName, $searchSelectList = [], $fileColumnsName = [])
    {
        $this->title = $title;
        $this->columnsName = $columnsName;
        $this->searchSelectList = $searchSelectList;
        $this->ignoreColumns = [
            'created_at',
            'updated_at',
            'remember_token',
            'email_verified_at',
        ];
        $this->fileColumnsName = $fileColumnsName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-form');
    }
}
