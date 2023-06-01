<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tarjeta extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $titulo="",
        public string $subtitulo="",
        public string $boton1="sin boton",
        public string $contenido="sin contenido",
        public ?string $header=null,
        public ?string $footer=null,
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tarjeta',['titulo'=>$this->titulo]);
    }
}
