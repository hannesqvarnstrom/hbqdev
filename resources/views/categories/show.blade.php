<x-layout.layout>
        {{Breadcrumbs::render('category', $category)}}
<h2>{{$category->name}}</h2>

<x-post-grid-pag :posts="$posts"></x-post-grid-pag>

</x-layout.layout>