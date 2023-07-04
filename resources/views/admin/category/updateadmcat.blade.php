<form action="{{ route('categories.update', $categories->id) }}" method="post" id="form-update">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name" id="" value="{{ old('name') }}"><br><br>
</form>
