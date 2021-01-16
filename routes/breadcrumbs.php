<?php

//Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', '/');
});

//posts

Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Posts', '/posts');
});
//singular post
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('posts');
    $trail->push($post->title, '/posts/' . $post->id);
});
