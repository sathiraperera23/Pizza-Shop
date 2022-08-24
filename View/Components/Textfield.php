<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textfield extends Component
{
    public $fieldID;
    public $label;
    public $helpText;
    public $model;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldID, $label, $helpText, $model)
    {
$this->fieldID=$fieldID;
$this->label=$label;
$this->helpText=$helpText;
$this->model=$model;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.textfield');
    }
}
