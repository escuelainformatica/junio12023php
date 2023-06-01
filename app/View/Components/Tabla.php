<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tabla extends Component
{
    public array $columnas=[];
    public int $numcol=0;
    public int $numfila=0;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $contenido=[],
        public string $thead="",
        public string $tbody="",
        public string $tfoot="",
        
    )
    {
        $this->numfila=count($contenido);
        if($this->numfila===0) {
            $this->columnas=[];
            $this->numcol=1;
        } else {
            $this->columnas=array_keys(reset($contenido));
            $this->numcol=count(reset($contenido));
        }
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tabla');
    }
}
