<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DestroyButton extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $url;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * Create a new component instance.
     * @param string $url
     * @param string $message
     */
    public function __construct(string $url, string $message)
    {
        $this->url = $url;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.destroy-button');
    }
}
