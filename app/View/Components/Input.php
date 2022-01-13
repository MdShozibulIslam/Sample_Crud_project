<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $id, $type, $label,$name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $label,$type,$id,$name)
    {
        $this->label =$label;
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
      

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
