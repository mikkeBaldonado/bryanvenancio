<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
    	'image', 'title', 'tag'
    ];

    public function category(){
    	return $this->belongsTo(BlogCategory::class, 'tag');
    }
}
