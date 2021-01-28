<x-layout.layout>
    {{Breadcrumbs::render('posts')}}
<ul class='row'>
    <h3>Categories</h3>
    @foreach ($categories as $cat)
    <x-category-item :category='$cat'></x-category-item>
@endforeach
</ul>
<x-component-name name="Pernilla"></x-component-name>
<h2>All posts</h2>
<hr>

<x-post-grid-pag :posts='$posts'></x-post-grid-pag>
</x-layout.layout>