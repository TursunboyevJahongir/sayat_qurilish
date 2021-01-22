<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Summernote extends Component
{
    public string $id;
    public string $name;
    public ?string $placeholder = null;
    public ?string $text = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $id, string $name, ?string $placeholder = null, ?string $text = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.summernote');
    }
}
