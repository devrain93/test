<h1><a href="{{ route('home') }}">Home Page</a></h1>

<ul>
    <li><a href="{{ route('category.index') }}">Category</a></li>
    <li><a href="{{ route('blog.index') }}">Blog</a></li>
</ul>
<br>
<h1>Category List</h1>

<a href="{{ route('category.create') }}">+ Category Create</a>

<br>
<ul>
    @foreach ($categories as $category)
    <a href="{{ route('category.edit',$category->id) }}" title="Category Edit"><li>{{ $category->name }} <br><br>
        <a href="{{ route('category.delete',$category->id) }}"><button>Delete</button></a> </li><br></a> <br>
    <br>
    @endforeach
</ul>
