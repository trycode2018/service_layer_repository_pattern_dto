
<h1>Criar Duvidas</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.store') }}" method="POST">
    
    @csrf
    <label for="subject">Assunto : </label>
    <input type="text" name="subject" placeholder="Assunto" value="{{ old('subject')}} zzzzzzzzzzzzzzzzzzzzzzzz">
    <label for="body">Description :</label>
    <textarea name="body" id="" cols="30" rows="10">{{ old('body')}} </textarea>
    <input type="submit" value="Enviar">

</form>