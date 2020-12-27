<h1>Category Create</h1>
<br>
<a href="{{ route('category.index') }}"><< back</a>

<br>
<br>

<form action="{{ route('category.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Category Name...">
    <br>
    <br>
    <input type="submit" value="Save">
</form>
