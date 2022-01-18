<?php

namespace App;
 
use App\Category;
use App\Models\PostImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 
class Post extends Model{
        protected $fillable  = ['title','url_clear','content', 'category_id', 'posted'];

        public function category(){
                return $this->belongsTo(Category::class);
        }

        public function image(){
                return $this->hasOne(PostImage::class);
        }
}


