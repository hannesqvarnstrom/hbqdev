<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->hasMany('\App\Models\Comment');
    }
    public function incrementCommentCount()
    {
        $this->comment_count++;
        $this->save();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        $arr = [];
        $relArr = $this->hasMany('\App\Models\TagRelationship')->get();
        foreach ($relArr as $rel) {
            $tag = Tag::find($rel->tag_id);
            array_push($arr, $tag);
        };
        return $arr;
    }
    public function firstTag()
    {
        $rel =  $this->hasMany('\App\Models\TagRelationship')->first();
        return Tag::find($rel->tag_id);
    }
    public function hasTag()
    {
        return $this->hasMany('\App\Models\TagRelationship')->exists();
    }
}
