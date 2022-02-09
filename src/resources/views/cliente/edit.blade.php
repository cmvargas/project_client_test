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
<div class="font_title_custom"><center>Modificar cliente</center></div>
<div class="font_menu_custom"><center><a href="{{ url('/cliente') }}"> << Regresar a clientes </a></center></div>
<form action="{{ url('/cliente/'.$cliente[0]->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    <label for="Nombre">Nombres: </label>
    <input type="text" name="nombres" value="{{$cliente[0]->nombres}}">
    <br>
    <label for="apellidos"> Apellidos: </label>
    <input type="text" name="apellidos" value="{{$cliente[0]->apellidos}}">
    <br>
    <label for="tipo_documento"> Tipo de documento: </label>
    <select name="tipo_documento" id="tipo_documento">
        <option value="C.C">Cedula de ciudadania</option>
        <option value="PASP">Pasaporte</option>    
    </select>
    <br>
    <label for="tipo de documento"> Número de documento: </label>
    <input type="text" name="numero_documento" id="numero_documento" value="{{$cliente[0]->numero_documento}}">
    <br>
    <input type="submit" value="Guardar datos">
</form>