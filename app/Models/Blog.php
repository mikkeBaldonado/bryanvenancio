<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use App\Models\Comment;

class Blog extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
    	'title', 'image', 'more_images' , 'location', 'blog_date', 'author', 'description', 'description_2', 'tags'
    ];

    public function comment(){
    	return $this->hasMany(Comment::class, 'blog_id');
    }

    public function getSearchResult(): SearchResult
     {
        $url = url('blog_detail/'.$this->id.'/'.str_replace(' ', '_', $this->title));
     
         return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
         );
     }
}
