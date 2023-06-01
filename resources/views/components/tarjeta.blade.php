<div class="card" >
    <div class="card-header">
        {{$header}}
      </div>
    <div class="card-body">
      @if($titulo)
      <h5 class="card-title">{{$titulo}}</h5>
      @endif
      @if($subtitulo)
      <h6 class="card-subtitle mb-2 text-muted">{{$subtitulo}}</h6>
      @endif
      <p class="card-text">{{$slot}}</p> 
      <a href="#" class="card-link">{{$boton1}}</a>
    </div>
    <div class="card-footer">
        {{$footer}}
    </div>
  </div>