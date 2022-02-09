<style>

.font_title_custom{
    font-size:50px;
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
.font_menu_custom{
    font-size:25px;
}
form {
  display: grid;
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin: 2rem auto 0 auto;
  max-width: 600px;
  padding: 1em;
}
form input {
  background: #fff;
  border: 1px solid #9c9c9c;
}
label {
  padding: 0.5em 0.5em 0.5em 0;
}

input {
  padding: 0.7em;
  margin-bottom: 0.5rem;
}
input:focus {
  outline: 3px solid gold;
}
@media (min-width: 400px) {
  form {
    grid-template-columns: 200px 1fr;
    grid-gap: 16px;
  }

  label {
    text-align: right;
    grid-column: 1 / 2;
  }

  input,
  button {
    grid-column: 2 / 3;
  }
}
</style>

<div>
    <div class="font_title_custom"> <center>Crear nuevo pedido</center></div>
    <div class="font_menu_custom"> <center><a href="{{ url('/cliente/'.$cliente->id.'/pedido') }}"><< Regresar a clientes</a></center></div>
    <div class="grid_client_information_custom">
        <div><b>id cliente:</b>{{$cliente->id}}</div>
        <div><b>Nombres:</b>{{$cliente->nombres}}</div>
        <div><b>Apellidos:</b>{{$cliente->apellidos}}</div>
        <div><b>Tipo de documento:</b>{{$cliente->tipo_documento}}</div>
        <div><b>Numero de documento:</b>{{$cliente->numero_documento}}</div>
    </div>
    <form action="{{ url('/cliente/'.$cliente->id.'/pedido')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="Nombre">Descripcion del pedido: </label>
        <input type="text" name="descripcion_pedido" id="descripcion_pedido" >
        <input type="submit" value="Guardar pedido">
    </form>
</div>