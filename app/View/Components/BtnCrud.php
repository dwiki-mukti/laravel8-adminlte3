<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BtnCrud extends Component
{
    public $id, $path, $excepts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $path = null, $excepts = false)
    {
        $this->id = $id;
        $this->path = $path;
        $this->excepts = $excepts ? json_decode($excepts) : [];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-crud', [
            'id' => $this->id,
            'path' => $this->path,
            'excepts' => $this->excepts
        ]);
    }
}
