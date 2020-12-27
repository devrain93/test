<h1>Category Edit</h1>
<br>
<a href="{{ route('category.index') }}"><< back</a>

<br>
<br>

<form action="{{ route('category.update',$category->id) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}" placeholder="Category Name...">
    <br>
    <br>
    <input type="submit" value="Save">
</form>
