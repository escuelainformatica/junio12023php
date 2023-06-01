<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TablaPie extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $contenido,
        public int $numcol=3,
        public int $numfila=0
    )
    {
     
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabla-pie');
    }
}
