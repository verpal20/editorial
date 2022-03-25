Crear un nuevo autor
<form action="{{url('/author')}}" method="post" ectype="multipart/form-data">
@csrf
<br>
<label for="name">nombre del autor </label>
<input type="text" name="name" id="name" autocomplete="name" required>

<br>
<label for="address">Direccion</label>
<input type="text" name="address" id="address" autocomplete="address" required>

<br>
<label for="phone">telefono</label>
<input type="text" name="phone" id="phone" autocomplete="phone" required>

<br>
<input type="submit" value="guardar datos">
<br>
<a href="{{url('author')}}">volver</a>
</form>