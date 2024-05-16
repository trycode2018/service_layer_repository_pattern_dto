
<h1>Criar Duvidas</h1>

<form action="{{ route('supports.store') }}" method="POST">
    
    @csrf
    <label for="subject">Assunto : </label>
    <input type="text" name="subject" placeholder="Assunto">
    <label for="body">Description :</label>
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Enviar">

</form>