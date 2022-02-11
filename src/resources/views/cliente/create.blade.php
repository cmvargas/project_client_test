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
<div class="font_title_custom"><center>Ingresar nuevo cliente</center></div>
<div class="font_menu_custom"><center><a href="{{ url('/cliente') }}"> << Regresar a pedidos </a></center></div>
<form action="{{ url('/cliente')}}" method="post" enctype="multipart/form-data">
@csrf

@include('cliente.form')
</form>