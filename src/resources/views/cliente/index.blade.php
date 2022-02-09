<style>
.grid_table_6_custom {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
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

</style>

<div>
    
    <div class="font_title_custom"><center>Clientes</center></div>
    <div class="font_menu_custom"><center><a href="{{ url('/cliente/create') }}">Crear nuevo cliente </a></center></div>
    <div class="grid_table_6_custom">
        <div><b>#</b></div>
        <div><b>Nombres</b></div>
        <div><b>Apellidos</b></div>
        <div><b>Tipo de documento</b></div>
        <div><b>Número de documento</b></div>
        <div><b>Acciones</b></div>
        @foreach($clientes as $cliente)
            <div>{{ $cliente->id }}</div>
            <div>{{ $cliente->nombres }}</div>
            <div>{{ $cliente->apellidos }}</div>
            <div>{{ $cliente->tipo_docuemnto }}</div>
            <div>{{ $cliente->numero_documento }}</div>
            <div>
        
                <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}">
                    Editar
                </a>
                <br>
                <a href="{{ url('/cliente/'.$cliente->id.'/pedido') }}">
                    Ver pedidos
                </a>
                <br>
                <a href="{{ url('/cliente/'.$cliente->id.'/pedido/create') }}">
                    Nuevo pedido
                </a>

                <form action="{{ url('/cliente/'.$cliente->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </div>
        @endforeach
    </div>

</div>