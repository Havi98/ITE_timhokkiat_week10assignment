<?php

namespace App\Models\posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $guarded = ['id'];
    protected $fillable = [
        'title', 'description'
      ];

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
