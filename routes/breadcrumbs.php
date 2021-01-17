<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
//Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', '/');
});

//posts

Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Posts', '/posts');
});
//category
Breadcrumbs::for('category',  function ($trail, $category) {
    $trail->parent('posts');
    $trail->push($category->name, '/categories/' . $category->id);
});


//singular post
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category()->first());
    $trail->push($post->title, '/categories/' . $post->id);
});
