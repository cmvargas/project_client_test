<style>

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
form button {
  background: lightgrey;
  padding: 0.7em;
  width: 100%;
  border: 0;
}
form button:hover {
  background: gold;
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
<div class="font_title_custom"><center>Modificar pedido</center></div>
<div class="font_menu_custom"><center><a href="{{ url('/cliente/'.$cliente[0]->id.'/pedido') }}"> << Regresar a pedidos </a></center></div>
<div class="grid_client_information_custom">

        <div><b>id cliente:</b>{{$cliente[0]->id}}</div>
        <div><b>Nombres:</b>{{$cliente[0]->nombres}}</div>
        <div><b>Apellidos:</b>{{$cliente[0]->apellidos}}</div>
        <div><b>Tipo de documento:</b>{{$cliente[0]->tipo_documento}}</div>
        <div><b>Numero de documento:</b>{{$cliente[0]->numero_documento}}</div>
</div>
<form action="{{ url('/cliente/'.$cliente[0]->id.'/pedido/'.$pedido[0]->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    <label for="descripcion_pedido">Descripcion del pedido: </label>
    <input type="text" name="nombres" value="{{$pedido[0]->descripcion_pedido}}">
    <br>
    <input type="submit" value="Actualizar datos">
</form>