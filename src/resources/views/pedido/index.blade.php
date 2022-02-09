<style>
.grid_table_6_custom {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin: 2rem auto 0 auto;
  max-width: 600px;
  padding: 1em;
  grid-gap: 10px;
}
.font_title_custom{
    font-size:50px;
}

.font_menu_custom{
    font-size:25px;
}
.grid_client_information_custom{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr ;
  padding: 1em;
  background: #f9f9f9;
  margin: 2rem auto 0 auto;
  max-width: 600px;
  padding: 1em;
  grid-gap: 10px;
}

</style>

<div>
    <div class="font_title_custom"><center>Pedidos cliente número  {{$cliente_id}}</center></div>
    <div class="font_menu_custom"><center><a href="{{ url('/cliente') }}"> << Regresar a clientes </a></center></div>
    
    <div class="grid_client_information_custom">
        <div><b>id cliente:</b>{{$cliente[0]->id}}</div>
        <div><b>Nombres:</b>{{$cliente[0]->nombres}}</div>
        <div><b>Apellidos:</b>{{$cliente[0]->apellidos}}</div>
        <div><b>Tipo de documento:</b>{{$cliente[0]->tipo_documento}}</div>
        <div><b>Numero de documento:</b>{{$cliente[0]->numero_documento}}</div>
    </div>
    <div class="font_menu_custom"><center><a href="{{ url('/cliente/'.$cliente_id.'/pedido/create') }}"> Nuevo pedido </a></center></div>
    <div class="grid_table_6_custom">
        <div><b>id del pedido</b></div>
        <div><b>Descripcion del pedido</b></div>
        <div><b>Acciones</b></div>
        @foreach($pedidos as $pedido)
            <div>{{ $pedido->id }}</div>
            <div>{{ $pedido->descripcion_pedido }}</div>
            <div>
                <a href="{{ url('/cliente/'.$cliente_id.'/pedido/'.$pedido->id.'/edit') }}">Editar</a> 
                <br>
                <form action="{{ url('/cliente/'.$cliente_id.'/pedido/'.$pedido->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </div>
        @endforeach
        
    </div>

</div>