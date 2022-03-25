editar datos de author 

<form action="{{url('/author/'.$author->id )}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PUT')}}
<br>
<label for="name">nombre del autor </label>
<input type="text" name="name" value="{{$author->name}}" id="name" autocomplete="name" required>

<br>
<label for="address">Direccion</label>
<input type="text" name="address" value="{{$author->address}}" id="address" autocomplete="address" required>

<br>
<label for="phone">telefono</label>
<input type="text" name="phone" value="{{$author->phone}}" id="phone" autocomplete="phone" required>

<br>
<input type="submit" value="cambiar datos">

</form>


