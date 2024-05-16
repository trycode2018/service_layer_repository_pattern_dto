<h1>Editar duvida {{ $support->id }}</h1>

<form action="{{ route('supports.update',$support->id) }}" method="POST">
    
    @csrf
    @method('put')
    <label for="subject">Assunto : </label>
    <input type="text" name="subject" value="{{ $support->subject }}">
    <label for="body">Description :</label>
    <textarea name="body" id="" cols="30" rows="10" >{{ $support->body }}</textarea>
    <input type="submit" value="Enviar">

</form>