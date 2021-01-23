<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortfolioCategory;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
    	'category_id', 'title', 'image', 'tags', 'caption', 'location'
    ];

    public function category(){
    	return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}
